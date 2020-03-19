<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'blog_posts',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('title');
                $table->string('description')->nullable(true);
                $table->longText('contents');
                $table->bigInteger('author')->nullable(true);
                $table->boolean('visible')->default(false);
                $table->bigInteger('mainImage')->nullable(true);
                $table->boolean('trashed')->nullable(true);
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
}
