<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\BlogPosts;

/**
 * Class BlogpostsSeeder
 */
class BlogpostsSeeder extends Seeder
{
    /**
     * Run Seeds
     */
    public function run()
    {
        BlogPosts::create(['author'=>1,'title'=>'First Blog Post','contents'=>'The First Blogpost','visible'=>1]);
    }
}
