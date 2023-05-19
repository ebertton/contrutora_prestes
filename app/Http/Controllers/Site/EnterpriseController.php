<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Enterprise;
use App\Models\SalesCenter;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Status;
use App\Models\Apartment;

class EnterpriseController extends Controller
{
    private $model;

    public function __construct(Enterprise $enterprise, City $city)
    {
        $this->model = $enterprise->with('images', 'apartments', 'cities')->where('public', 1);
        $this->cidade = $city->with('salesCenter');
    }


    public function index($cityName = 'curitiba')
    {


        $city = $this->cidade->get()->where('slug_name', $cityName)->first();

        if (empty($city)) {
            return view('errors.404');
        }

        $enterprises = $this->model->where('city', $city->id)->get();

        return view('site.enterprises.index', ['city' => $city, 'enterprises' => $enterprises]);
    }


    public function enterprise($slugName)
    {
        $conteudo = $this->model->with('apartments', 'images', 'salesCenter', 'cities', 'benefit', 'lands')->get()->where('slug_name', $slugName)->first();
        $description = !empty($conteudo->describe_title) ? $conteudo->describe_title . " - " . $conteudo->describe : '';
        return view('site.enterprises.enterprise.index', ['description' => $description, 'dataEnterprise' => $conteudo, 'status' => Status::getViewStatus($slugName)]);

    }
}
