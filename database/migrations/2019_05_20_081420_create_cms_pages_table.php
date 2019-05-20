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
        DB::table('cms_pages')->insert(['filename'=>'home', 'title'=>'Willkommen', 'contents'=>'<p>Startseite. Diese Seite kannst Du bearbeiten, aber sie darf nicht gelöscht werden. Erlaubt ist hier, was gefällt. Leere Seiten sind auch erlaubt</p><p>Viel Spaß mit der Software!</p>']);
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
