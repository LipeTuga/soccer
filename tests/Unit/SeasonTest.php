<?php

namespace Tests\Unit;

use App\Season;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SeasonTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_season_has_a_year()
    {
        $season = factory(Season::class)->create();

        $this->assertArrayHasKey('year', $season->toArray());
        $this->assertIsInt($season->year);

    }

}
