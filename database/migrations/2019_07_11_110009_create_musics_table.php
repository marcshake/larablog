<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'musics', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('song_name');
                $table->string('song_genre');
                $table->string('filename');
                $table->integer('alb_id');
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
        Schema::dropIfExists('musics');
    }

}
