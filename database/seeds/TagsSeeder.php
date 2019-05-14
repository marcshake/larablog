<?php

use Illuminate\Database\Seeder;
use App\Tags;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tags::create(['id'=>1,'tag'=>'Information']);
        Tags::create(['id'=>2,'tag'=>'Software']);
        Tags::create(['id'=>3,'tag'=>'Technology']);
    }
}
