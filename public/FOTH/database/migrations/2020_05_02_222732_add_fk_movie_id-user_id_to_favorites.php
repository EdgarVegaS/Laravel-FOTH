<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkMovieIdUserIdToFavorites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('favorites', function (Blueprint $table) {
          $table->integer('movie_id');
          $table->foreign('movie_id')->references('id')->on('movies');
          $table->integer('user_id');
          $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('favorites', function (Blueprint $table) {
          $table->dropForeign(['movie_id']);
          $table->dropColumn('movie_id');
          $table->dropForeign(['user_id']);
          $table->dropColumn('user_id');
        });
    }
}
