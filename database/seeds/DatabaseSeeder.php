<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(BlogpostsSeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(Tags2BlogsSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(Cats2BlogsSeeder::class);
    }
}
