<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            ['user_id'=>1, 'status'=>'в корзине', 'created_at'=>Now(), 'updated_at'=>Now()],
            ['user_id'=>1, 'status'=>'новый', 'created_at'=>'2023-04-11', 'updated_at'=>'2023-04-11'],
            ['user_id'=>1, 'status'=>'подтвержден', 'created_at'=>'2023-03-21', 'updated_at'=>'2023-03-21'],
            ['user_id'=>1, 'status'=>'отменен', 'created_at'=>'2023-02-24', 'updated_at'='2023-02-24'],
        ]);
        DB::table('order_product')->insert([
            ['order_id'=>1, 'product_id'=>3, 'qty'=>1],
            ['order_id'=>1, 'product_id'=>4, 'qty'=>2],
            ['order_id'=>1, 'product_id'=>5, 'qty'=>1],

            ['order_id'=>2, 'product_id'=>2, 'qty'=>1],
            ['order_id'=>2, 'product_id'=>3, 'qty'=>2],
            ['order_id'=>2, 'product_id'=>4, 'qty'=>1],

            ['order_id'=>3, 'product_id'=>3, 'qty'=>1],
            ['order_id'=>3, 'product_id'=>2, 'qty'=>2],

            ['order_id'=>4, 'product_id'=>1, 'qty'=>1],
            ['order_id'=>4, 'product_id'=>2, 'qty'=>1],


            ]);

    }
}
