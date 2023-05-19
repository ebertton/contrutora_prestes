<?php

namespace App\Http\Controllers;

use App\Models\Enterprise;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function get()
    {

        return response()->json(Contact::first());
    }

    public function edit(Request $request)
    {

        return view('contact.edit', ['contact' => Contact::first()]);
    }

    public function update(Request $request)
    {
        $contact = Contact::first();

        $contact->title_contact = $request->title_contact;
        $contact->text_contact = $request->text_contact;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->facebook = $request->facebook;
        $contact->instagram = $request->instagram;
        $contact->youtube = $request->youtube;
        $contact->whatsapp = $request->whatsapp;
        $contact->titulo_principal_cards = $request->titulo_principal_cards;
        $contact->texto_trabalhe_conosco = $request->texto_trabalhe_conosco;
        $contact->texto_nossos_terrenos = $request->texto_nossos_terrenos;
        $contact->texto_fornecedores = $request->texto_fornecedores;
        $contact->texto_mao_obra = $request->texto_mao_obra;
        $contact->texto_alo_conduta = $request->texto_alo_conduta;
        $contact->texto_privacidade_dados = $request->texto_privacidade_dados;
        $contact->link_trabalhe_conosco = $request->link_trabalhe_conosco;
        $contact->link_nossos_terrenos = $request->link_nossos_terrenos;
        $contact->link_fornecedores = $request->link_fornecedores;
        $contact->link_mao_obra = $request->link_mao_obra;
        $contact->link_alo_conduta = $request->link_alo_conduta;
        $contact->link_privacidade_dados = $request->link_privacidade_dados;
        if ($request->hasFile(('path_banner'))){
            $contact->path_banner = $request->file('path_banner')
                ->store('contact');
        }
        $contact->save();

        return redirect()->back()->with(['success' => true]);
    }

    public function joinContact(Request $request)
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => [
                'secret' => '6LdHjeIhAAAAAMr9_R0bjmlaHRzSM_3YHouio70z',
                'response' => $request['g-recaptcha-response'] ?? ''
            ]

        ]);

        $response = json_decode(curl_exec($curl), true);
        curl_close($curl);

        //dd($response['success']);
        if(!$response['success']){
            return view('site.error-404.index');
        }

        $urlEmpreendimento = 'https://prestes.cvcrm.com.br/api/cvio/empreendimento';
        $token = '9f0ed051dc001bc5f4ce1f2d2a24526b130315b0';
        $enterpriseNameJson = null;
        $enterpriseCidadeJson = (!empty($request->cidadeNomeContato)) ? str_replace(" ", "", Enterprise::tirarAcentos(strtolower($request->cidadeNomeContato))) : null;
        $request->empreendimentoNomeContato = $request->empreendimentoContato ?? $request->empreendimentoNomeContato;
        if (!empty($request->empreendimentoNomeContato)) {
            header('Content-Type: application/json');
            $ch = curl_init($urlEmpreendimento);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'token: ' . $token,
                'origemcv: true',
                'email: guilherme.freitas@performister.com.br'
            )); // Inject the token into the header
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            curl_close($ch);

            foreach (json_decode($result) as $r) {
                if ($request->empreendimentoNomeContato == $r->nome) {
                    $enterpriseNameJson = $r->idempreendimento;
                    break;
                }
            }
        }

        $url = 'https://prestes.cvcrm.com.br/api/cvio/lead';
        $token = '9f0ed051dc001bc5f4ce1f2d2a24526b130315b0';
        $discover = !empty($request->page) && $request->page == "index" ? "descobrircidade" : "descobririnformacao";
        $enterpriseCidadeJson = !empty($enterpriseCidadeJson) ? $enterpriseCidadeJson : $discover;

        header('Content-Type: application/json');
        $ch = curl_init($url); // Initialise cURL
        $post = json_encode($request->only('nome', 'email', 'telefone') + [
                'idempreendimento' => $request->type != "contact" ? $enterpriseNameJson : "",
                'origem' => "SI",
                'midia' => $request->midia,
                'conversao' => $request->conversao,
                'tags' => array($enterpriseCidadeJson),
            ]); // request

        $authorization = "token: " . $token; // Prepare the authorisation token
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            $authorization,
            'origemcv: true'
        )); // Inject the token into the header
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $result = curl_exec($ch);
        curl_close($ch);


        return redirect()->route('success.contact');
        //return redirect()->back()->with(['form-success' => true]);


        /*
        Mail::send('mail.join-contact', ['request' => $request->all()], function ($m) use ($request) {
            $m->to(Contact::first()->email)->subject('Contato pelo site');
        });


        */
    }
}
