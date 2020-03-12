<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelKontaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_kontaks', function (Blueprint $table) {
            $table->increments('id'); //membuat kolom id auto increments
            $table->string('nama'); //membuat kolom nama
            $table->string('email'); //membuat kolom email
            $table->string('nohp'); //membuat kolom no hp
            $table->string('alamat'); //membuat kolom alamat
            $table->timestamps(); //membuat created_at dan updated_at sebagai fungsi dasar laravel
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_kontaks');
    }
}
