<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\City;
use App\Models\Contact;
use App\Models\Enterprise;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    private $modelEnterprise;
    private $modelContato;
    private $modelCidade;
    private Post $post;
    private Banner $banner;

    public function __construct(Enterprise $enterprise, Contact $contato, City $cidade)
    {
        $this->modelEnterprise = $enterprise;
        $this->modelContato = $contato;
        $this->modelCidade = $cidade;
        $this->post = new Post();
        $this->banner = new Banner();
    }

    public function index()
    {
        $contato = $this->modelContato->first('whatsapp');
        $cidade = $this->modelCidade->all();
        $enterprises = $this->modelEnterprise->with('images', 'apartments', 'cities')->orderBy('order', 'asc')->get();
        $banners = $this->banner->orderBy('order', 'asc')->get();
        if (sizeof($enterprises) > 0) {
            return view('site.index', ['content' => Home::first(), 'banners' => $banners, 'enterprises' => $enterprises, 'contato' => $contato, 'cidade' => $cidade, 'posts' => $this->post->orderBy('posts.data_publicacao', 'desc')->limit(10)->get()]);
        }
        $banners = $this->banner->orderBy('order', 'asc')->get();
        return view('site.index', ['content' => Home::first(), 'banners' => $banners,  'enterprises' => $enterprises, 'contato' => $contato, 'cidade' => $cidade, 'posts' => $this->post->orderBy('posts.data_publicacao', 'desc')->limit(10)->get()]);
    }
}
