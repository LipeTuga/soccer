<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leagues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('country_id')->nullable();
            $table->string('name');

            $table->foreign('country_id')->references('id')->on('countries');
            $table->timestamps();
        });

        Schema::create('league_season', function(Blueprint $table){
           $table->unsignedBigInteger('league_id');
           $table->unsignedBigInteger('season_id');

           $table->unique(['season_id', 'league_id']);
           $table->foreign('season_id')->references('id')->on('seasons')->onDelete('cascade');
           $table->foreign('league_id')->references('id')->on('leagues')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leagues');
        Schema::dropIfExists('league_season');
    }
}
