<?php

use Illuminate\Database\Seeder;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'name'=>'ABC',
        	'slug'=>'abc',
        	'description'=>'THDJISK BDHDJ',
        	'isdelete'=>false,
        	'isdisplay'=>true,
        ]);
         DB::table('categories')->insert([
        	'name'=>'ABC',
        	'slug'=>'abc',
        	'description'=>'THDJISK BDHDJ',
        	'isdelete'=>false,
        	'isdisplay'=>true,
        ]);
          DB::table('categories')->insert([
        	'name'=>'ABC',
        	'slug'=>'abc',
        	'description'=>'THDJISK BDHDJ',
        	'isdelete'=>false,
        	'isdisplay'=>true,
        ]);
           DB::table('categories')->insert([
        	'name'=>'ABC',
        	'slug'=>'abc',
        	'description'=>'THDJISK BDHDJ',
        	'isdelete'=>false,
        	'isdisplay'=>true,
        ]);
    }
}
