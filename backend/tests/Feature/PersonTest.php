<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PersonTest extends TestCase
{
    protected $endpoint = 'person';

    // public function testCreate()
    // {
    //     $response = $this->json('POST', "/api/{$this->endpoint}", [
    //         'first_name' => 'Juan',
    //         'last_name' => 'Gonzalez',
    //         'birthdate' => '2012-01-01'
    //     ]);

    //     $response->assertStatus(200);
    // }

    public function testIndex()
    {
        $response = $this->json('GET', "/api/{$this->endpoint}");
        $response
            ->assertStatus(200)
            ->assertJson([
                'data' => true
            ]);
    }
}
