<?php

namespace Tests\Unit;

use App\Country;
use App\League;
use App\Season;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LeagueTest extends TestCase
{
    use DatabaseMigrations;

    public $league;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->league = factory(League::class)->create();
    }

    /** @test */
    public function a_league_has_a_name()
    {
        $this->assertNotEmpty($this->league->name);
    }

    /** @test */
    public function a_league_can_have_a_country()
    {
        $league = factory(League::class)->create(['country_id'=>factory(Country::class)->create()->id]);

        $this->assertInstanceOf(Country::class, $league->country);

    }
    /** @test */
    public function a_league_has_one_seasons()
    {
        $this->assertInstanceOf(Season::class, $this->league->season);
    }

    /** @test */
    public function a_league_has_a_start()
    {
        $this->assertInstanceOf(Carbon::class, $this->league->start_date);
    }

    /** @test */
    public function a_league_has_a_end()
    {
        $this->assertInstanceOf(Carbon::class, $this->league->end_date);
    }

    /** @test */
    public function a_league_has_a_logo()
    {
        $this->assertArrayHasKey('logo', $this->league->toArray());
    }

    /** @test */
    public function a_league_has_a_flag()
    {
        $this->assertArrayHasKey('flag', $this->league->toArray());
    }

}
