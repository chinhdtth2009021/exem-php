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
                'title' => 'Oneness with all life: Inspirational selections...',
                'ISBN' => 'ISBN 388053101-10',
                'pub_year' => 2008,
                'available' => 1,
            ],[
                'bookId' => 2,
                'authorId' => 1,
                'title' => 'Oneness with all life: Inspirational selections...',
                'ISBN' => 'ISBN 388053101-10',
                'pub_year' => 2008,
                'available' => 1,
            ],[
                'bookId' => 3,
                'authorId' => 1,
                'title' => 'Oneness with all life: Inspirational selections...',
                'ISBN' => 'ISBN 388053101-10',
                'pub_year' => 2008,
                'available' => 1,
            ],[
                'bookId' => 4,
                'authorId' => 1,
                'title' => 'Oneness with all life: Inspirational selections...',
                'ISBN' => 'ISBN 388053101-10',
                'pub_year' => 2008,
                'available' => 1,
            ],[
                'bookId' => 5,
                'authorId' => 1,
                'title' => 'Oneness with all life: Inspirational selections...',
                'ISBN' => 'ISBN 388053101-10',
                'pub_year' => 2008,
                'available' => 1,
            ],[
                'bookId' => 6,
                'authorId' => 1,
                'title' => 'Oneness with all life: Inspirational selections...',
                'ISBN' => 'ISBN 388053101-10',
                'pub_year' => 2008,
                'available' => 1,
            ],[
                'bookId' => 7,
                'authorId' => 1,
                'title' => 'Oneness with all life: Inspirational selections...',
                'ISBN' => 'ISBN 388053101-10',
                'pub_year' => 2008,
                'available' => 1,
            ],[
                'bookId' => 8,
                'authorId' => 1,
                'title' => 'Oneness with all life: Inspirational selections...',
                'ISBN' => 'ISBN 388053101-10',
                'pub_year' => 2008,
                'available' => 1,
            ],[
                'bookId' => 9,
                'authorId' => 1,
                'title' => 'Oneness with all life: Inspirational selections...',
                'ISBN' => 'ISBN 388053101-10',
                'pub_year' => 2008,
                'available' => 1,
            ],[
                'bookId' => 10,
                'authorId' => 1,
                'title' => 'Oneness with all life: Inspirational selections...',
                'ISBN' => 'ISBN 388053101-10',
                'pub_year' => 2008,
                'available' => 1,
            ],
        ]);

    }
}
