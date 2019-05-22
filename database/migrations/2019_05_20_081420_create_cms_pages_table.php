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
    <div class="four columns">
        <h2 clasS="title primary">Funktionen</h2>
        <p>
            Vollständige Bloglösung für mehrere Autoren, komplett aufgesetzt auf Laravel und Jquery. Kompromisslos schnell und sicher.
        </p>
        <ol>
            <li>Beliebig viele Blogposts</li>
            <li>Beliebig viele Kategorien, Tags</li>
            <li>RSS-Feeds.</li>
            <li>Kommentare. (*geplant*)</li>
        </ol>
    </div>
    <div class="four columns">
        <h2 clasS="title primary">NOch mehr Content</h2>
        <p>
        Bla blabla bla
        </p>
    </div>
    <div class="four columns">
        <h2 clasS="title primary">Funktionen</h2>
        <p>
        Ganz viel.
        </p>
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
