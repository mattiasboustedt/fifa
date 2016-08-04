<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_one_id')->unsigned();
            $table->integer('user_two_id')->unsigned();
            $table->integer('user_one_score');
            $table->integer('user_two_score');
            $table->timestamps();

            /**
             * Add FK
             */
            $table->foreign('user_one_id')
                ->references('id')
                ->on('users');

            $table->foreign('user_two_id')
                ->references('id')
                ->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('games');
    }
}
