<?php

namespace Tests\Feature;

use App\Models\User;
use Hash;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    public function test_dashboard_renders_for_authenticated_user()
    {
        // Test the Livewire component on the '/dashboard' route
        Livewire::test('dashboard.home') // Adjust this if your component name differs
        ->assertSee('Dashboard'); // Replace with any specific text/content you expect to see
    }

    public function test_dashboard_redirects_for_guest()
    {
        // Attempt to access the Livewire component without authentication
        $response = $this->get(route('dashboard.home'));

        // Assert that the guest is redirected (assumes you have auth protection)
        $response->assertRedirect(route('login')); // Or the route to which unauthenticated users are redirected
    }
}
