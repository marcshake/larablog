<?php

use Illuminate\Database\Seeder;
use App\Tags2Blogs;
class Tags2BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tags2Blogs::create(['blogId'=>1,'tagId'=>1]);
        Tags2Blogs::create(['blogId'=>1,'tagId'=>2]);
        Tags2Blogs::create(['blogId'=>1,'tagId'=>3]);
    }
}
