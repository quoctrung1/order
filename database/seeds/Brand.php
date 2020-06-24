<?php

use Illuminate\Database\Seeder;

class Brand extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
        	'name'=>'ABC',
        	'logo'=>'abc',
        	'address'=>'THDJISK BDHDJ',
        	'phone_no'=>'THDJISK BDHDJ',
        	'slug'=>'THDJISK BDHDJ',
        	'isdelete'=>false,
        ]);
        DB::table('brands')->insert([
        	'name'=>'ABC',
        	'logo'=>'abc',
        	'address'=>'THDJISK BDHDJ',
        	'phone_no'=>'THDJISK BDHDJ',
        	'slug'=>'THDJISK BDHDJ',
        	'isdelete'=>false,
        ]);

		DB::table('brands')->insert([
			'name'=>'ABC',
			'logo'=>'abc',
			'address'=>'THDJISK BDHDJ',
			'phone_no'=>'THDJISK BDHDJ',
			'slug'=>'THDJISK BDHDJ',
			'isdelete'=>false,
		]);

		DB::table('brands')->insert([
			'name'=>'ABC',
			'logo'=>'abc',
			'address'=>'THDJISK BDHDJ',
			'phone_no'=>'THDJISK BDHDJ',
			'slug'=>'THDJISK BDHDJ',
			'isdelete'=>false,
		]);

    }
}
