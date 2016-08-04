<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('games_played');
            $table->integer('games_won');
            $table->integer('games_lost');
            $table->integer('games_drawn');
            $table->integer('goals_scored');
            $table->integer('goals_against');
            $table->integer('goal_difference');
            $table->integer('user_rating');
            $table->integer('user_rating_change');


            /**
             * Add FK
             */
            $table->foreign('user_id')
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
        Schema::drop('stats');
    }
}
