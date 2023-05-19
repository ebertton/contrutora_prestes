<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class TagController extends Controller
{
    private Tag $tag;

    public function __construct()
    {

        $this->tag = new Tag();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        return view('tag.index', ['tags' => $this->tag->orderBy('descricao', 'asc')->get()]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $rules = [
            'descricao' => 'required',
        ];
        $validator  = Validator::make($request->all(), $rules, [
            'required' => 'O campo é obrigatório!'
        ]);

        if ($validator->fails()) {
            return redirect()->route('tags.index')
                ->withErrors($validator)
                ->withInput();
        }


        $this->tag->descricao = $request->descricao;
        $this->tag->save();
        return redirect()->back();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Tag $tag
     * @return JsonResponse
     */
    public function edit(Tag $tag): JsonResponse
    {
        return response()->json($tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Tag $tag
     * @return RedirectResponse
     */
    public function update(Request $request, Tag $tag): RedirectResponse
    {
        $rules = [
            'descricao' => 'required',
        ];
        $validator  = Validator::make($request->all(), $rules, [
            'required' => 'O campo é obrigatório!'
        ]);

        if ($validator->fails()) {
            return redirect()->route('tags.index')
                ->withErrors($validator)
                ->withInput();
        }

        $tag->descricao = $request->descricao;
        $tag->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tag $tag
     * @return RedirectResponse
     */
    public function destroy(Tag $tag): RedirectResponse
    {
        $tag->delete();
        return redirect()->back();
    }

}
