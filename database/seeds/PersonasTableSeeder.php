<?php

use Illuminate\Database\Seeder;

use App\Personas;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Personas::class, 5)->create();
    }
}
