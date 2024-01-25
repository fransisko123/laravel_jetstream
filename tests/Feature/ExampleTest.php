<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $user = \App\Models\User::find(21);

        $this->assertNotNull($user);

        $response = $this->actingAs($user)->get('/dashboard');

        $response->assertStatus(200);
    }
}