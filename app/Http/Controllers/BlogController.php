<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class BlogController extends Controller
{

    /**
     * @var Blog
     */
    private Blog $blog;

    public function __construct()
    {
        $this->blog = new Blog();
    }

    /**
     * Show the form for editing the specified resource.
     * @return Application|Factory|View|Response
     */
    public function edit(): View|Factory|Response|Application
    {
          return view('blog.edit', ['blog' => $this->blog->find(1)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Blog $blog
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, Blog $blog): RedirectResponse
    {
        $rules = [
            'titulo' => 'required',
            'descricao' => 'required',
            'path_banner' => isset($blog->path_banner)  ? 'image' :  'required|image',
            'breve_descricao' =>  'required',
        ];
        $validator =  Validator::make($request->all(), $rules, [
            'required' => 'O campo é obrigatório!',
            'image' => 'O arquivo deve ser um formato de imagem válida!'
        ]);

        if ($validator->fails()) {
            return redirect()->route('blogs.edit')
                ->withErrors($validator)
                ->withInput();
        }

        $blog->titulo = $request->titulo;
        $blog->descricao = $request->descricao;
        $blog->breve_descricao = $request->breve_descricao;
       if ($request->hasFile(('path_banner'))){
           $blog->path_banner = $request->file('path_banner')
               ->store('blog');
       }
       $blog->save();
       return redirect()->back();
    }

}
