<?php

namespace Tests\Unit;

use App\Prediction;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PredictionTest extends TestCase
{
    use DatabaseMigrations;
    public $prediction;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->prediction = factory(Prediction::class)->create();
    }

    /** @test */
    public function a_prediction_has_a_type()
    {
        $this->assertArrayHasKey('type', $this->prediction->toArray());
    }

}