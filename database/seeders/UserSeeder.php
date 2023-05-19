<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $user = new User;
        $user->name = 'Administrador';
        $user->email = 'admin@gmail.com';
        $user->whatsapp = '99999999999';
        $user->password = Hash::make('123');
        $user->save();

    }
}
