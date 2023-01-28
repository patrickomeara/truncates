<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTruncates;
use Tests\TestCase;

class Example2Test extends TestCase
{
    use DatabaseTruncates;
    // use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        User::factory(20)->create();

        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_response2()
    {
        User::factory(20)->create();

        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_response3()
    {
        User::factory(20)->create();

        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_response4()
    {
        User::factory(20)->create();

        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_response5()
    {
        User::factory(20)->create();

        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_response6()
    {
        User::factory(20)->create();

        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_response7()
    {
        User::factory(20)->create();

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
