<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_be_created()
    {
        $response = $this->post('/api/users', [
            'name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@example.com',
            'password' => 'secret',
            'permissions' => 'user',
            'trial_ends_at' => now()->addDays(30)
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('users', [
            'email' => 'john@example.com'
        ]);
    }

    /** @test */
    public function a_user_can_be_read()
    {
        $user = User::factory()->create();

        $response = $this->get('/api/users/' . $user->id);

        $response->assertStatus(200)
            ->assertJson($user->toArray());
    }

    /** @test */
    public function a_user_can_be_updated()
    {
        $user = User::factory()->create();

        $response = $this->put('/api/users/' . $user->id, [
            'name' => 'Jane',
            'last_name' => 'Doe',
            'email' => 'jane@example.com',
            'permissions' => 'admin',
            'trial_ends_at' => now()->addDays(60)
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('users', [
            'email' => 'jane@example.com'
        ]);
    }

    /** @test */
    public function a_user_can_be_deleted()
    {
        $user = User::factory()->create();

        $response = $this->delete('/api/users/' . $user->id);

        $response->assertStatus(204);
        $this->assertDatabaseMissing('users', [
            'id' => $user->id 
        ]);
    }
}
