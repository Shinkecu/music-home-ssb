<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['title'=> 'Рояль C', 'model'=> 'C-01', 'price'=>1000, 'country'=> 'Китай', 'year'=>2001, 'img_path'=>'/img/piano (1).jpeg', 'qty'=>0, 'category_id'=>3,'created_at'=>Now(), 'updated_at'=>Now()],
            ['title'=> 'Рояль B', 'model'=> 'B-02', 'price'=>2000, 'country'=> 'Корея', 'year'=>1990, 'img_path'=>'/img/piano (2).png', 'qty'=>15, 'category_id'=>3,'created_at'=>Now(), 'updated_at'=>Now()],
            ['title'=> 'Рояль Z', 'model'=> 'Z-03', 'price'=>5000, 'country'=> 'Китай', 'year'=>2002, 'img_path'=>'/img/piano (3).jpeg', 'qty'=>11, 'category_id'=>3,'created_at'=>Now(), 'updated_at'=>Now()],
            ['title'=> 'Гитара W', 'model'=> 'W-01', 'price'=>7000, 'country'=> 'Россия', 'year'=>2020, 'img_path'=>'/img/strings (1).jpeg', 'qty'=>7, 'category_id'=>1,'created_at'=>Now(), 'updated_at'=>Now()],
            ['title'=> 'Гитара G', 'model'=> '-02', 'price'=>5000, 'country'=> 'ЮАР', 'year'=>2015, 'img_path'=>'/img/strings (2).jpeg', 'qty'=>6, 'category_id'=>1,'created_at'=>Now(), 'updated_at'=>Now()],
            ['title'=> 'Скрипка', 'model'=> 'S-01', 'price'=>20000, 'country'=> 'Австрия', 'year'=>1768, 'img_path'=>'/img/strings (4).jpeg', 'qty'=>1, 'category_id'=>2,'created_at'=>Now(), 'updated_at'=>Now()],
            ['title'=> 'Виолончель', 'model'=> 'T-01', 'price'=>30000, 'country'=> 'Китай', 'year'=>2021, 'img_path'=>'/img/piano (2).png', 'qty'=>0, 'category_id'=>2,'created_at'=>Now(), 'updated_at'=>Now()],

        ]);
    }
}
