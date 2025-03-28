<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    // TODO: Explain the differences between Feature and Unit tests
    // Feature tests are used to test all calls to the application, from the HTTP layer to the database layer.
    // Unit tests are used to test Models, Services, and other classes that do not interact with the HTTP layer.
    // For good examples you can check the tests/Feature and tests/Unit directories in the project UsersService.
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
