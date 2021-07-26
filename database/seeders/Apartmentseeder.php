<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class Apartmentseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('apartments')->truncate();
        \Illuminate\Support\Facades\DB::table('apartments')->insert([
            [
                'id' => 1,
                'name' => 'ktx Mi Dinh',
                'address' => 'Mi Dinh 2',
                'price' => 2000,
                'general' => 'xanh sach dep',
                'description' => 'moi can co 1 phong khach va 2 phong ngu',
                'thumbnail' => 'https://saomaitn.com/wp-content/uploads/2020/07/M%E1%BB%B9-%C4%91%C3%ACnh-1.jpg',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 2,
                'name' => 'Linh dam',
                'address' => 'linh dam',
                'price' => 2000,
                'general' => 'xanh sach dep',
                'description' => 'moi can co 1 phong khach va 2 phong ngu',
                'thumbnail' => 'https://mydinh-plaza2.com/wp-content/uploads/2017/03/my-dinh-plaza-2.jpg',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 3,
                'name' => 'dinh thon',
                'address' => 'dinh thon',
                'price' => 2000,
                'general' => 'xanh sach dep',
                'description' => 'moi can co 1 phong khach va 2 phong ngu',
                'thumbnail' => 'https://chungcuvip.com.vn/wp-content/uploads/2017/08/chung-c%C6%B0-m%E1%BB%B9-%C4%91%C3%ACnh-plaza-2.jpg',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 4,
                'name' => 'tay mo',
                'address' => 'tay mo',
                'price' => 2000,
                'general' => 'xanh sach dep',
                'description' => 'moi can co 1 phong khach va 2 phong ngu',
                'thumbnail' => 'https://saomaitn.com/wp-content/uploads/2020/07/M%E1%BB%B9-%C4%91%C3%ACnh-1.jpg',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 5,
                'name' => 'samco',
                'address' => 'samco',
                'price' => 2000,
                'general' => 'xanh sach dep',
                'description' => 'moi can co 1 phong khach va 2 phong ngu',
                'thumbnail' => 'https://chungcumydinhpearl.com.vn/wp-content/uploads/2016/06/my-dinh-pearl2.jpg',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 6,
                'name' => 'ha dong',
                'address' => 'ha dong',
                'price' => 2000,
                'general' => 'xanh sach dep',
                'description' => 'moi can co 1 phong khach va 2 phong ngu',
                'thumbnail' => 'https://chungcuvip.com.vn/wp-content/uploads/2017/08/chung-c%C6%B0-m%E1%BB%B9-%C4%91%C3%ACnh-plaza-2.jpg',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ], [
                'id' => 7,
                'name' => 'ho tay',
                'address' => 'ho tay',
                'price' => 2000,
                'general' => 'xanh sach dep',
                'description' => 'moi can co 1 phong khach va 2 phong ngu',
                'thumbnail' => 'https://saomaitn.com/wp-content/uploads/2020/07/M%E1%BB%B9-%C4%91%C3%ACnh-1.jpg',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ], [
                'id' => 8,
                'name' => 'flc mi dinh',
                'address' => 'Mi Dinh 1',
                'price' => 2000,
                'general' => 'xanh sach dep',
                'description' => 'moi can co 1 phong khach va 2 phong ngu',
                'thumbnail' => 'https://chungcumydinhpearl.com.vn/wp-content/uploads/2016/06/my-dinh-pearl2.jpg',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 9,
                'name' => 'lang ha',
                'address' => 'lang ha',
                'price' => 2000,
                'general' => 'xanh sach dep',
                'description' => 'moi can co 1 phong khach va 2 phong ngu',
                'thumbnail' => 'https://saomaitn.com/wp-content/uploads/2020/07/M%E1%BB%B9-%C4%91%C3%ACnh-1.jpg',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 10,
                'name' => 'cau giay',
                'address' => 'cau giay',
                'price' => 2000,
                'general' => 'xanh sach dep',
                'description' => 'moi can co 1 phong khach va 2 phong ngu',
                'thumbnail' => 'https://static2.cafeland.vn/static01/sgd/news/2019/08/ban-can-ho-chung-cu-tu-liem-ha-noi-1567146959-nhadat.cafeland.vn.jpg',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],

        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
