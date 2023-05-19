<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    private Banner $banner;

    public function __construct()
    {
        $this->banner = new Banner();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        return view('banners.index', ['banners' => $this->banner->orderBy('order', 'asc')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $this->banner->link = $request->link;
        $this->banner->title = $request->title;
        $banners = Banner::whereNotNull('order')->get();
        if(Banner::where('order', $request->order)->exists()){
            foreach ($banners as $b){
                if (sizeof($banners) === 5 &&  $b->order === 5) {
                    $b->delete();
                }
                if ($b->order >= $request->order && $b->order !== 5){
                    $b->order += 1;
                    $b->save();
                }
                if ($b->order === 5 &&  $request->order === 5) {
                    $b->delete();
                }
            }
        }
        $this->banner->order = $request->order;
        if ($request->hasFile('path_banner') && $request->file('path_banner')->isValid()) {
            if (Storage::exists($request->path_banner)) {
                Storage::delete($request->path_banner);
            }
            $upload = Storage::put('public/banners/images', $request->path_banner);
            $this->banner->path_banner = str_replace('public', '/storage', $upload);
        }

        $this->banner->save();
        return redirect()->route('banners.index');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Banner $banner
     * @return JsonResponse
     */
    public function edit(Banner $banner): JsonResponse
    {
        return response()->json($banner, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Banner $banner
     * @return RedirectResponse
     */
    public function update(Request $request, Banner $banner): RedirectResponse
    {
        $this->banner = $banner;
        $this->banner->link = $request->link;
        $this->banner->title = $request->title;
        $banners = Banner::whereNotNull('order')->get();
        if(Banner::where('order', $request->order)->exists()){

            foreach ($banners as $b){

                if ($request->order == 1 && $b->order < $banner->order){
                    $b->order += 1;
                    $b->save();
                }else{
                    if ($b->order <= $request->order && $b->order !== 1){
                        $b->order -= 1;
                        $b->save();
                    }
                }

                if ($b->order === 6){
                    $b->delete();
                }

            }
        }
        $this->banner->order = $request->order;
        if ($request->hasFile('path_banner') && $request->file('path_banner')->isValid()) {
            if (Storage::exists($request->path_banner)) {
                Storage::delete($request->path_banner);
            }
            $upload = Storage::put('public/banners/images', $request->path_banner);
            $this->banner->path_banner = str_replace('public', '/storage', $upload);
        }
        $this->banner->save();
        return redirect()->route('banners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Banner $banner
     * @return RedirectResponse
     */
    public function destroy(Banner $banner): RedirectResponse
    {
        if (Storage::exists($banner->path_banner)) {
            Storage::delete($banner->path_banner);
        }
        $banner->delete();
        return redirect()->route('banners.index');
    }
}
