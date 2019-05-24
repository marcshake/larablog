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
        Tags::create(['id'=>1,'tag'=>'information']);
        Tags::create(['id'=>2,'tag'=>'software']);
        Tags::create(['id'=>3,'tag'=>'technology']);
    }
}
