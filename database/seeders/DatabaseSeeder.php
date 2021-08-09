<?php

namespace Database\Seeders;

use App\Http\Controllers\ApartmentsController;
use Illuminate\Database\Seeder;
use Psy\Readline\Libedit;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Apartmentseeder::class);
        $this->call(LibrarySeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
