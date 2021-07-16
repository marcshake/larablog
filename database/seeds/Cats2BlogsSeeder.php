<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Category2Blogs;

class Cats2BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category2Blogs::create(['blogId'=>1,'catID'=>1]);
        Category2Blogs::create(['blogId'=>2,'catID'=>1]);
        Category2Blogs::create(['blogId'=>3,'catID'=>1]);
        Category2Blogs::create(['blogId'=>4,'catID'=>1]);
    }
}
