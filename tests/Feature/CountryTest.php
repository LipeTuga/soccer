<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Country;

class CountryTest extends TestCase
{
    use DatabaseMigrations;

    public $country;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->country = factory(Country::class)->create();

    }

    /** @test */
    public function a_country_has_a_code()
    {
        $this->assertArrayHasKey('code', $this->country->toArray());
    }

    /** @test */
    public function a_country_has_a_name()
    {
        $this->assertArrayHasKey('name', $this->country->toArray());
    }

    /** @test */
    public function a_country_has_a_image()
    {
        $this->assertArrayHasKey('image', $this->country->toArray());
    }

}
