<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PersonTest extends TestCase
{
    protected $endpoint = 'person';
    protected $model = \App\Person::class;

    public function testStore()
    {
        $person = factory($this->model)->make();
        $person = $person->toArray();

        $response = $this->json('POST', "api/{$this->endpoint}/", $person);
        ($this->model)::destroy($person);
        $response
            ->assertStatus(201)
            ->assertJson($person);
    }

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
