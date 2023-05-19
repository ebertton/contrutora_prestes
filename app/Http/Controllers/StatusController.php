<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Status;

class StatusController extends Controller
{

    public function index($enterpriseId)
    {
        $status          = Status::where('enterprise_id', $enterpriseId)->get();
        $availableStatus = Status::availableStatus($enterpriseId);

        return view('enterprises.status.index',
          ['status' => $status, 'availableStatus' => $availableStatus]);
    }

    /*
    public function store($enterpriseId, Request $request) {
        $status = new Status;
        $status->enterprise_id = $enterpriseId;
        $status->status = $request->status;

        if ($request->hasFile('status_image') && $request->file('status_image')->isValid()) {
            if (Storage::exists($request->icon)) {
                Storage::delete($request->icon);
            }

            $upload = Storage::put('public/enterprises/status', $request->status_image);

            if (!$upload) {
                return response()->json(['error' => 'Falha ao fazer upload']);
            }

            $status->status_image = str_replace('public', '/storage', $upload);

        }

        $statusInstance->save();

        return redirect()->back()->with(['success' => true]);
    }
    */

    public function update(Request $request)
    {
        /* Coloquei esse for aqui pra nao ter que repetir o codigo nos IF's que nao sei quem colocou. By: Reinaldo Lindo */
        for ($i = 0; $i < 6; $i++) {
            $request->progress_.$i = round($request->progress_.$i);
        }

        $statusInstance                  = Status::where('enterprise_id',
          $request->enterprise_id)->where('status', 0)->first();
        $statusInstance->status_progress = $request->progress_0;

        if ($request->hasFile('img_0') && $request->file('img_0')->isValid()) {
            if (Storage::exists($request->icon)) {
                Storage::delete($request->icon);
            }

            $upload = Storage::put('public/enterprises/status',
              $request->img_0);

            if ( ! $upload) {
                return response()->json(['error' => 'Falha ao fazer upload']);
            }

            $statusInstance->status_image = str_replace('public', '/storage',
              $upload);
        }

        $statusInstance->save();


        $statusInstance                  = Status::where('enterprise_id',
          $request->enterprise_id)->where('status', 1)->first();
        $statusInstance->status_progress = $request->progress_1;

        if ($request->hasFile('img_1') && $request->file('img_1')->isValid()) {
            if (Storage::exists($request->icon)) {
                Storage::delete($request->icon);
            }

            $upload = Storage::put('public/enterprises/status',
              $request->img_1);

            if ( ! $upload) {
                return response()->json(['error' => 'Falha ao fazer upload']);
            }

            $statusInstance->status_image = str_replace('public', '/storage',
              $upload);
        }

        $statusInstance->save();


        $statusInstance                  = Status::where('enterprise_id',
          $request->enterprise_id)->where('status', 2)->first();
        $statusInstance->status_progress = $request->progress_2;

        if ($request->hasFile('img_2') && $request->file('img_2')->isValid()) {
            if (Storage::exists($request->icon)) {
                Storage::delete($request->icon);
            }

            $upload = Storage::put('public/enterprises/status',
              $request->img_2);

            if ( ! $upload) {
                return response()->json(['error' => 'Falha ao fazer upload']);
            }

            $statusInstance->status_image = str_replace('public', '/storage',
              $upload);
        }

        $statusInstance->save();

        $statusInstance                  = Status::where('enterprise_id',
          $request->enterprise_id)->where('status', 3)->first();
        $statusInstance->status_progress = $request->progress_3;

        if ($request->hasFile('img_3') && $request->file('img_3')->isValid()) {
            if (Storage::exists($request->icon)) {
                Storage::delete($request->icon);
            }

            $upload = Storage::put('public/enterprises/status',
              $request->img_3);

            if ( ! $upload) {
                return response()->json(['error' => 'Falha ao fazer upload']);
            }

            $statusInstance->status_image = str_replace('public', '/storage',
              $upload);
        }

        $statusInstance->save();

        $statusInstance                  = Status::where('enterprise_id',
          $request->enterprise_id)->where('status', 4)->first();
        $statusInstance->status_progress = $request->progress_4;

        if ($request->hasFile('img_4') && $request->file('img_4')->isValid()) {
            if (Storage::exists($request->icon)) {
                Storage::delete($request->icon);
            }

            $upload = Storage::put('public/enterprises/status',
              $request->img_4);

            if ( ! $upload) {
                return response()->json(['error' => 'Falha ao fazer upload']);
            }

            $statusInstance->status_image = str_replace('public', '/storage',
              $upload);
        }

        $statusInstance->save();

        $statusInstance                  = Status::where('enterprise_id',
          $request->enterprise_id)->where('status', 5)->first();
        $statusInstance->status_progress = $request->progress_5;

        if ($request->hasFile('img_5') && $request->file('img_5')->isValid()) {
            if (Storage::exists($request->icon)) {
                Storage::delete($request->icon);
            }

            $upload = Storage::put('public/enterprises/status',
              $request->img_5);

            if ( ! $upload) {
                return response()->json(['error' => 'Falha ao fazer upload']);
            }

            $statusInstance->status_image = str_replace('public', '/storage',
              $upload);
        }

        $statusInstance->save();

        return redirect()->back()->with(['success' => true]);
    }

    public function destroy($enterpriseId, $statusId)
    {
        $status = Status::find($statusId);
        if ( ! empty($status)) {
            $status->delete();
            return redirect()->back()->with(['success' => true]);
        } else {
            return redirect()->back()->with(['errors' => true]);
        }
    }

}
