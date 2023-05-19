<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\Land;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Models\Enterprise;
use App\Models\Apartment;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use App\Models\City;
use Illuminate\Support\Str;

class EnterprisesController extends Controller
{
    public function index()
    {
        $enterprises = Enterprise::all();
        return view('enterprises.index', ['enterprises' => $enterprises]);
    }

    public function create()
    {
        return view('enterprises.form-create');
    }

    public function store(Request $request)
    {

        $enterprise = new Enterprise;

        $city = City::where('city_name', $request->city)->first();
        if (!empty($city->id)) {
            $enterprise->city = $city->id;
        } else {
            return redirect()->back()->with(['error' => 'Cadastre a cidade primeiro!']);
        }


        if (!empty(Enterprise::where('name', $request->name)->count())) {
            return redirect()->back()->with(['error' => true]);
        }

        $enterprise->name = $request->name;
        $enterprise->parking_spaces = $request->parking_spaces;
        $enterprise->concierge24h = ($request->concierge == 'on') ? 1 : 0;
        $enterprise->zip_code = $request->zip;
        $enterprise->street = $request->street;
        $enterprise->describe = $request->describe;
        $enterprise->describe_title = $request->describe_title;
        $enterprise->prime_location_text = $request->prime_location;
        $enterprise->neighborhood = $request->neighborhood;
        $enterprise->tour_360_link = $request->tour_360_link;



        $enterprise->state = $request->state;
        $enterprise->complement = $request->complement;
        $enterprise->number = $request->number;
        $enterprise->video = $request->video;


        if ($request->hasFile('benefits') && $request->file('benefits')->isValid()) {
            if (Storage::exists($request->benefits)) {
                Storage::delete($request->benefits);
            }

            $upload = Storage::put('public/enterprises/benefits', $request->benefits);

            if (!$upload) {
                return response()->json(['error' => 'Falha ao fazer upload']);
            }

            $enterprise->benefits_image = str_replace('public', '/storage', $upload);
        }

        $enterprise->save();

        $availableStatus = [0, 1, 2, 3, 4, 5];
        foreach ($availableStatus as $i) {
            $statusInstance = new Status;
            $statusInstance->enterprise_id = $enterprise->id;
            $statusInstance->status = $i;
            $statusInstance->status_image = '/assets/img/img-status.png';
            $statusInstance->status_progress = 0;
            $statusInstance->save();
        }


        return redirect('/admin/enterprises')->with(['success' => true]);
    }

    public function edit($enterpriseId)
    {
        $enterprise = Enterprise::with(['cities', 'benefit'])->find($enterpriseId);
        return view('enterprises.form-edit', ['enterprise' => $enterprise]);
    }

    public function update($enterpriseId, Request $request)
    {
        $enterprise = Enterprise::find($enterpriseId);
        if (!empty($enterprise)) {
            $city = City::where('city_name', $request->city)->first();
            if (!empty($city->id)) {
                $enterprise->city = $city->id;
            } else {
                return redirect()->back()->with(['error' => 'Cadastre a cidade primeiro!']);
            }

            $enterprise->name = $request->name;
            $enterprise->parking_spaces = $request->parking_spaces;
            $enterprise->concierge24h = ($request->concierge == 'on') ? 1 : 0;
            $enterprise->public = ($request->public == 'on') ? 1 : 0;
            $enterprise->zip_code = $request->zip;
            $enterprise->street = $request->street;
            $enterprise->describe = $request->describe;
            $enterprise->describe_title = $request->describe_title;
            $enterprise->prime_location_text = $request->prime_location;
            $enterprise->neighborhood = $request->neighborhood;
            $enterprise->tour_360_link = $request->tour_360_link;

            $enterprise->state = $request->state;
            $enterprise->complement = $request->complement;
            $enterprise->number = $request->number;
            $enterprise->video = $request->video;


            if ($request->hasFile('benefits') && $request->file('benefits')->isValid()) {


                $upload = Storage::put('public/enterprises/benefits', $request->benefits);

                if (!$upload) {
                    return response()->json(['error' => 'Falha ao fazer upload']);
                }
                $enterprise->benefits_image = str_replace('public', '/storage', $upload);
            }

            $enterprise->save();

            return redirect('/admin/enterprises')->with(['success' => true]);
        } else {
            return redirect('/admin/enterprises')->with(['error' => true]);
        }

    }

    public function destroy($enterpriseId)
    {
        $images = Image::where('enterprise_id', $enterpriseId);
        $apartments = Apartment::where('enterprise_id', $enterpriseId);
        $enterprise = Enterprise::find($enterpriseId);
        $status = Status::where('enterprise_id', $enterpriseId);
        $lands = Land::where('enterprise_id', $enterpriseId);
        $beneficios = Benefit::where('enterprise_id', $enterpriseId);
        if (!empty($images->get())) {
            $images->delete();
        }
        if (!empty($apartments->get())) {
            $apartments->delete();
        }
        if (!empty($status->get())) {
            $status->delete();
        }
        if (!empty($lands->get())) {
            $lands->delete();
        }
        if (!empty($beneficios->get())) {
            $beneficios->delete();
        }
        if (!empty($enterprise->get())) {
            $enterprise->delete();
        }


        return redirect('/admin/enterprises')->with(['success' => true]);


    }

    public function storeOrder(Enterprise $enterprise, Request $request)
    {
        $enterprises = Enterprise::whereNotNull('order')->get();



        if(Enterprise::where('order', $request->order)->exists()){
            foreach ($enterprises as $e){
                if (sizeof($enterprises) === 5 &&  $e->order === 5) {
                    $e->order = null;
                    $e->save();
                }

                if ($e->order >= $request->order && $e->order !== 5){
                    $e->order += 1;
                    $e->save();
                }
                if ($e->order === 5 &&  $request->order === 5) {
                    $e->order = null;
                    $e->save();
                }
            }
        }


        $enterprise->order = $request->order;
        $enterprise->save();
        return redirect()->route('enterprises.list.banner.order');
    }

    public function listBannerOrder()
    {
        $enterprises = Enterprise::whereNotNull('order')->orderBy('order', 'asc')->get();
        return view('enterprises.featured-banners', compact('enterprises'));
    }

    public function removeOrder(Enterprise $enterprise)
    {
        $enterprise->order = null;
        $enterprise->save();
        return redirect()->route('enterprises.list.banner.order');
    }
}
