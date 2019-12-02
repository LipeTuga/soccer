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
            $table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('season_id');
            $table->string('name');
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->string('logo', 20)->nullable();
            $table->string('flag', 20)->nullable();

            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('season_id')->references('id')->on('seasons');
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
        Schema::dropIfExists('leagues');
        Schema::dropIfExists('league_season');
    }
}
