<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmsPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('filename');
            $table->string('title');
            $table->longText('contents');
            $table->timestamps();
        });
        DB::table('cms_pages')->insert(['filename'=>'home', 'title'=>'Hallo!', 'contents'=>'
<div class="row">
<div class="six columns">
        <p>This is your startpage. Tlog5 needs a startpage, it won´t run without one. The reason behind this is, that we need to be able to have a non-blogging-approach
        here.</p>
        <p>
        The plan is that you can call "static" pages as well, which will be made out of Database-Content
        </p>
</div>
<div class="six columns">
When you have exhausted <b>all</b> possibilites, remember this: <em>you haven\'t</em>
</div>
</div>
        ']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cms_pages');
    }
}
