<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new Contact();
        $contact->title_contact = 'Precisa de mais informações?';
        $contact->text_contact = 'Entre em contato e vamos encontrar o lar perfeito para você.';
        $contact->phone = '+55 (42) 9 9845-0001';
        $contact->email = 'contato@prestes.com';
        $contact->address = 'Rua Doutor Colares, 215 B – Ponta Grossa.';
        $contact->facebook = 'https://www.facebook.com/prestesconstrutora/';
        $contact->instagram = 'https://www.instagram.com/prestesconstrutora/';
        $contact->youtube = 'https://www.youtube.com/channel/UC1ZiUWNy6x8gYp-j-I8F05g/';
        $contact->whatsapp = 'https://api.whatsapp.com/send?phone=5542998450001';
        $contact->save();



    }
}
