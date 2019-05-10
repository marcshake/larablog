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
        BlogPosts::create(['author'=>1,'title'=>'Some other Text','contents'=>'<p>The Problem on writing dummy-content is, that you have to write stuff down, that does not even make sense. So I write a little story about this boy:</p>
        <p>Once upon a time, there was a coder who strongly believed in <b>html</b> and <b>PHP</b>. He did not care about the fact that other people <i>believed</i>
        HTML is weird and php is unsecure. He did the best to code stable stuff.</p>
        <p>Then, there were the frameworks. Code that almost writes itself.</p>']);
        BlogPosts::create(['author'=>1,'title'=>'Some other Text','contents'=>'<p>The Problem on writing dummy-content is, that you have to write stuff down, that does not even make sense. So I write a little story about this boy:</p>
        <p>Once upon a time, there was a coder who strongly believed in <b>html</b> and <b>PHP</b>. He did not care about the fact that other people <i>believed</i>
        HTML is weird and php is unsecure. He did the best to code stable stuff.</p>
        <p>Then, there were the frameworks. Code that almost writes itself.</p>']);
        BlogPosts::create(['author'=>1,'title'=>'Welcome','contents'=>'<p>Welcome to Larablog. This code was written by me to learn some Laravel. There should be a Tutorial on how I made this, online at <a href="http://trancefish.de/">Trancefish.de</a> somewhere.</p><p>You can login to the backend and remove this posting</p>']);
    }
}
