<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->text('imie');
            $table->text('nazwisko');
            $table->string('email');
            $table->string('telefon');
            $table->string('data_urodzenia');
            $table->text('kraj');
            $table->text('miasto');
            $table->string('doswiadczenie');
            $table->string('szkola');
            $table->text('jezyki');
            $table->string('skills');
            $table->string('kursy');
            $table->string('hobby');
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
        Schema::dropIfExists('profiles');
    }
}
