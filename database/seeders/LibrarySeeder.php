<?php

namespace Database\Seeders;

use App\Models\Library;
use Carbon\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('libraries')->truncate();
        DB::table('libraries')->insert([
            [
                'bookId' => 1,
                'authorId' => 2,
                'title' => 'lap trinh web',
                'ISBN' => 'ISBN 388053101-10',
                'pub_year' => 2008,
                'available' => 1,
            ], [
                'bookId' => 2,
                'authorId' => 1,
                'title' => 'lap trinh web',
                'ISBN' => 'ISBN 3880531344-93',
                'pub_year' => 2008,
                'available' => 1,
            ], [
                'bookId' => 3,
                'authorId' => 2,
                'title' => 'lap trinh web',
                'ISBN' => 'ISBN 3880533234-87',
                'pub_year' => 2008,
                'available' => 1,
            ], [
                'bookId' => 4,
                'authorId' => 0,
                'title' => 'giao trinh c#',
                'ISBN' => 'ISBN 31134053101-10',
                'pub_year' => 2008,
                'available' => 0,
            ], [
                'bookId' => 5,
                'authorId' => 1,
                'title' => 'tai lieu php',
                'ISBN' => 'ISBN 38923053101-10',
                'pub_year' => 2008,
                'available' => 1,
            ], [
                'bookId' => 6,
                'authorId' => 3,
                'title' => 'tai lieu html',
                'ISBN' => 'ISBN 388053261014-10',
                'pub_year' => 2008,
                'available' => 0,
            ], [
                'bookId' => 7,
                'authorId' => 2,
                'title' => 'tai lieu html',
                'ISBN' => 'ISBN 388053142201-10',
                'pub_year' => 2008,
                'available' => 1,
            ], [
                'bookId' => 8,
                'authorId' => 4,
                'title' => 'tai lieu php',
                'ISBN' => 'ISBN 38805312442-93',
                'pub_year' => 2008,
                'available' => 0,
            ], [
                'bookId' => 9,
                'authorId' => 3,
                'title' => 'tai lieu php',
                'ISBN' => 'ISBN 3880532443-12',
                'pub_year' => 2008,
                'available' => 1,
            ], [
                'bookId' => 10,
                'authorId' => 4,
                'title' => 'tai lieu php',
                'ISBN' => 'ISBN 3880524144-44',
                'pub_year' => 2008,
                'available' => 0,
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}
