<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
//            UserSeeder::class,
//            AchievementsSeeder::class,
//            ContactSeeder::class,
//            DifferentialsSeeder::class,
//            DynamicContentSeeder::class,
//            ReferralsSeeder::class,
//            PolicySeeder::class,
//            EnterpriseSeeder::class,
            BlogSeeder::class,
            TagsSeeder::class,
            PostsSeeder::class
        ]);
    }
}
