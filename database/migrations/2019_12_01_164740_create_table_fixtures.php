<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFixtures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixtures', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('home_team_id');
            $table->unsignedBigInteger('away_team_id');
            $table->unsignedBigInteger('league_id')->nullable();
            $table->unsignedBigInteger('api_id');
            $table->timestamp('event_date')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->timestamp('first_half_start_at')->nullable();
            $table->timestamp('second_half_start_at')->nullable();
            $table->string('round', 30)->nullable();
            $table->tinyInteger('elapsed')->nullable();
            $table->string('venue', 50)->nullable();
            $table->tinyInteger('goals_home_team')->nullable();
            $table->tinyInteger('goals_away_team')->nullable();
            $table->string('score_half_time', 5)->nullable();
            $table->string('score_full_time', 5)->nullable();
            $table->string('score_extra_time', 5)->nullable();
            $table->string('score_penalties', 5)->nullable();
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
        Schema::dropIfExists('fixtures');
    }
}
