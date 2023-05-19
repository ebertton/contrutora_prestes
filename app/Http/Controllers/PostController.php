<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;


class PostController extends Controller
{
    /**
     * @var Post
     */
    private Post $post;
    private Tag $tag;

    public function __construct()
    {
        $this->post = new Post();
        $this->tag = new Tag();

    }


    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        return view('post.index', [
            'posts' => $this->post->orderBy('id', 'desc' )->get(),
            'tags'=>   $this->tag->all()]);
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
            'titulo' => 'required',
            'texto' => 'required',
            'data_publicacao' => 'required',
            'path_banner' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ];
        $validator  = Validator::make($request->all(), $rules, [
            'required' => 'O campo é obrigatório!',
            'image' => 'O arquivo deve ser um formato de imagem válida!'
        ]);
        if ($validator->fails()) {
            return redirect()->route('posts.index')
                ->withErrors($validator)
                ->withInput();
        }
        $this->post->id_tags = $request->id_tags;
        $this->post->titulo = $request->titulo;
        $this->post->texto = $request->texto;
        $this->post->data_publicacao = $request->data_publicacao;
        $this->post->id_usuarios = auth()->id();
        if ($request->hasFile(('path_banner'))){
            $this->post->path_banner = $request->file('path_banner')
                ->store('post');
        }
        $this->post->save();
        return redirect()->back();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @return JsonResponse
     */
    public function edit(Post $post): JsonResponse
    {
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Post $post
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, Post $post): RedirectResponse
    {
        $rules = [
            'titulo' => 'required',
            'texto' => 'required',
            'data_publicacao' => 'required',
            'path_banner' => isset($post->path_banner) ?  'image' : 'required|image',
        ];
        Validator::make($request->all(), $rules, [
            'required' => 'O campo é obrigatório!',
            'image' => 'O arquivo deve ser um formato de imagem válida!'
        ])->validate();

        $post->id_tags = $request->id_tags;
        $post->titulo = $request->titulo;
        $post->texto = $request->texto;
        $post->data_publicacao = $request->data_publicacao;
        $post->id_usuarios = auth()->id();



        if ($request->hasFile(('path_banner'))){
            if($post->path_banner)
            {
                Storage::delete($post->path_banner);
            }
            $post->path_banner = $request->file('path_banner')
                ->store('post');
        }
        $post->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return RedirectResponse
     */
    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();
        return redirect()->back();
    }

    /**
     * Uploads images and returns the address to be used in ckeditor.
     * @param Request $request
     * @return JsonResponse
     */
    public function ckeditorUpload(Request $request): JsonResponse
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->upload->storeAs('editor/media', $fileName);
            $url = asset('storage/editor/media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
        return response()->json(['fileName' => '', 'uploaded' => 0, 'url' => '']);

    }
}
