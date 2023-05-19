<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Enterprise;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use function PHPUnit\Framework\returnArgument;

class BuscaController extends Controller
{
    private Enterprise $enterprise;

    public function __construct()
    {
        $this->enterprise = new Enterprise();
    }

    public function search(Request $request)
    {
        $contato = Contact::first('whatsapp');
        $enterprises = $this->enterprise->where(function ($query) use ($request) {
            $query->when($request->dormitorios !== null, function ($query) use ($request) {
                $query->whereHas('apartments', function ($query) use ($request) {
                    return $query->where('dormitories', $request->dormitorios);
                });
            });
            $query->when($request->garagens !== null, function ($query) use ($request) {
                return $query->where('parking_spaces', '=', $request->garagens);
            });
            $query->when($request->suites !== null, function ($query) use ($request) {
                $query->whereHas('apartments', function ($query) use ($request) {
                    return $query->where('suites', $request->suites);
                });
            });
            $query->when($request->termo !== null, function ($query) use ($request) {
                $query->whereHas('cities', function ($query) use ($request) {
                    return $query->where('city_name', 'LIKE', "%{$request->termo}%");
                });

            });
        })->with(['apartments'])->orWhere('describe', 'LIKE', "%{$request->termo}%")->orWhere('name', 'LIKE', "%{$request->termo}%")->get();
        return view('site.search-result.index')->with(compact('enterprises', 'contato'));
    }



    //    public function resultado(Request $request)
//    {
//        //$teste = explode(' ', $request->termo);
//        //dd(filter_var($request->termo, FILTER_SANITIZE_NUMBER_INT));
//        //dd(intval($request->termo));
//        $statusVariacoes = array('morar', 'pronto', 'concluídos', 'concluído');
//        $garagemVariacoes = array('vaga', 'vagas', 'garagem', 'garagens',
//            'estacionamento', 'estacionamentos');
//        $portariaVariacoes = array('portaria 24h', '24h', '24', 'horas',
//            'portaria', 'hora', 'portarias', 'porteiro');
//        $suitesVariacoes = array('Suítes', 'suítes', 'Suites', 'suites', 'suite');
//        $dormitoriosVariacoes = array('Dormitório', 'Dormitórios', 'dormitório', 'dormitórios',
//            'Dormitorio', 'Dormitorios', 'dormitorio', 'dormitorios', 'Quarto', 'quarto',
//            'Quartos', 'quartos');
//
//        $contato = Contact::first('whatsapp');
//
//        switch ($request->termo) {
//            case Str::contains($request->termo, $statusVariacoes):
//                preg_match_all('!\d+!', $request->termo, $matches);
//                $enterprises = Enterprise::whereHas('enterprise_status', function ($q) use ($matches){
//                    return $q->whereIn()
//                })->with('enterprise_status', 'images')->where('status', '>=', 5)->where('public', 1)->get();
//                return view('site.search-result.index')->with(compact('enterprises', 'contato'));
//                break;
//            case Str::contains($request->termo, $garagemVariacoes):
//                $enterprises = Enterprise::with('apartments', 'images')->where('public', 1)
//                    ->where('parking_spaces', intval($request->termo))->get();
//                return view('site.search-result.index')->with(compact('enterprises', 'contato'));
//                break;
//            case Str::contains($request->termo, $portariaVariacoes):
//                $enterprises = Enterprise::with('apartments', 'images')->where('public', 1)->where('concierge24h', 1)->get();
//                return view('site.search-result.index')->with(compact('enterprises', 'contato'));
//                break;
//            case Str::contains($request->termo, $suitesVariacoes):
//                preg_match_all('!\d+!', $request->termo, $matches);
//                if(sizeof($matches) > 0) {
//                    $enterprises = Enterprise::whereHas('apartments', function ($q) use ($matches) {
//                        return $q->whereIn('suites', $matches[0]);
//                    })->with('apartments', 'images')->where('public', 1)->get();
//                }
//                return view('site.search-result.index')->with(compact('enterprises', 'contato'));
//                break;
//            case Str::contains($request->termo, $dormitoriosVariacoes):
//                preg_match_all('!\d+!', $request->termo, $matches);
//
//                if(sizeof($matches) > 0){
//                    $enterprises = Enterprise::whereHas('apartments', function ($q) use ($matches) {
//                        return $q->whereIn('dormitories', $matches[0]);
//                    })->with('apartments', 'images')->where('public', 1)->get();
//                }else{
//                    $enterprises = Enterprise::with('apartments', 'images')->where('public', 1)->get();
//                }
//                return view('site.search-result.index')->with(compact('enterprises', 'contato'));
//                break;
//            case Enterprise::search($request->termo)->get()->count() > 0;
//                $enterprises = Enterprise::search($request->termo)->where('public', 1)->get();
//                return view('site.search-result.index')->with(compact('enterprises', 'contato'));
//                break;
//            default:
//                $sugestoes = Enterprise::latest()->take(5)->where('public', 1)->get();
//                return view('site.search-result.index')->with(compact('sugestoes', 'contato'))->withErrors(['msg' => 'Nenhum resultado foi encontrado']);
//
//        }
//        //dd(Enterprise::search(intval($request->termo))->get());
//
//    }


}
