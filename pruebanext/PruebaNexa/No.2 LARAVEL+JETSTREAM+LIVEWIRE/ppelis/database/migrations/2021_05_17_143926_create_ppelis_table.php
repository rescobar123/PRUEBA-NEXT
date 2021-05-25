<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpelisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppelis', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('year');
            $table->string('ratings');
            $table->string('imdbID');
            $table->string('id_user');
            $table->string('poster');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ppelis');
    }
}
