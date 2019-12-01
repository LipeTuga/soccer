<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('api_id');
            $table->unsignedBigInteger('country_id')->nullable();
            $table->string('name', 100);
            $table->string('code',10)->nullable();
            $table->string('logo', 50)->nullable();
            $table->smallInteger('founded')->nullable();
            $table->string('venue_name', 50)->nullable();
            $table->string('venue_surface', 20)->nullable();
            $table->string('venue_address', 50)->nullable();
            $table->string('venue_city', 50)->nullable();
            $table->unsignedInteger('venue_capacity')->nullable();

            $table->timestamps();

            $table->foreign('country_id')->references('id')->on('countries');
        });

        Schema::create('league_team', function(Blueprint $table) {
           $table->unsignedBigInteger('team_id');
           $table->unsignedBigInteger('league_id');

           $table->unique(['team_id', 'league_id']);
           $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
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
        Schema::dropIfExists('league_team');
        Schema::dropIfExists('teams');
    }
}
