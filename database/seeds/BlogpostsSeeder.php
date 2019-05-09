<?php

use Illuminate\Database\Seeder;
use App\BlogPosts;
class BlogpostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogPosts::create(['title'=>'Testtitle','contents'=>'Testcontents']);
        BlogPosts::create(['title'=>'Testtitle 2','contents'=>'Testcontents 2']);
        BlogPosts::create(['title'=>'Testtitle 3','contents'=>'Testcontents 3']);
    }
}
