<?php

use Illuminate\Database\Seeder;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'product_code'=>'THK0125',
        	'name'=>'M001',
        	'slug'=>'M001',
        	'description'=>'THDJISK BDHDJ',
        	'image'=>'n2.jpg',
        	'promotion'=>'0',
        	'category_id'=>'1',
            'brand_id'=>'1',
        	'quantity'=>100,
        	'isdelete'=>false,
        	'isdisplay'=>true,
        ]);

        DB::table('products')->insert([
        	'product_code'=>'THK0125',
        	'name'=>'M002',
        	'slug'=>'M002',
        	'description'=>'THDJISK BDHDJ',
        	'image'=>'n2.jpg',
        	'promotion'=>'0',
        	'category_id'=>'1',
            'brand_id'=>'1',
        	'quantity'=>50,
        	'isdelete'=>false,
        	'isdisplay'=>true,
        ]);

        DB::table('products')->insert([
        	'product_code'=>'THK0125',
        	'name'=>'M003',
        	'slug'=>'M003',
        	'description'=>'THDJISK BDHDJ',
        	'image'=>'n2.jpg',
        	'promotion'=>'0',
        	'category_id'=>'1',
            'brand_id'=>'1',
        	'quantity'=>20,
        	'isdelete'=>false,
        	'isdisplay'=>true,
        ]);

    }
}
