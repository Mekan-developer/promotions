<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Livewire\Livewire;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function testLoginPageStatus(): void
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function testLoginAuthStatus(): void
    {
        // Create a test user with known credentials
        $user = User::factory()->create([
            'name' => 'test-name',
            'username' => 'testuser',
            'email' => 'testuser@example.com',
            'password' => Hash::make('password123'),
        ]);

        // Test the Livewire login component
        Livewire::test('Auth.Login') // Replace 'login' with the name of your Livewire component
            ->set('username', 'testuser') // Set the username (or email)
            ->set('password', 'password123') // Set the password
            ->call('submitLogin') // Call the submitLogin method
            ->assertRedirect('/dashboard'); // Expect redirection to the dashboard

        // Убеждаемся, что пользователь аутентифицирован
        $this->assertAuthenticatedAs($user);
    }

}
