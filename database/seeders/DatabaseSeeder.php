<?php

namespace Database\Seeders;

use App\Models\Acteur;
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
       Acteur::factory()->count(20)->create();
       $this->call([
           ActorSeeder::class
       ]);
    }
}
