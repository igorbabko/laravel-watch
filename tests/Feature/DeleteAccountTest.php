<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class DeleteAccountTest extends TestCase
{
    use RefreshDatabase;

    public function test_delete_account_page_can_be_rendered(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/account/delete');

        $response->assertOk();
        $response->assertViewIs('pages.auth.delete-account');
    }

    public function test_user_can_delete_their_account_with_correct_password(): void
    {
        $user = User::factory()->create([
            'password' => Hash::make('password123'),
        ]);

        $response = $this->actingAs($user)->delete('/account', [
            'password' => 'password123',
        ]);

        $response->assertRedirect('/');
        $response->assertSessionHas('status', 'Your account has been deleted.');

        $this->assertDatabaseMissing('users', [
            'id' => $user->id,
        ]);

        $this->assertGuest();
    }

    public function test_user_cannot_delete_account_with_incorrect_password(): void
    {
        $user = User::factory()->create([
            'password' => Hash::make('password123'),
        ]);

        $response = $this->actingAs($user)->delete('/account', [
            'password' => 'wrong-password',
        ]);

        $response->assertSessionHasErrors(['password']);

        $this->assertDatabaseHas('users', [
            'id' => $user->id,
        ]);

        $this->assertAuthenticated();
    }

    public function test_password_is_required_for_account_deletion(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->delete('/account', [
            'password' => '',
        ]);

        $response->assertSessionHasErrors(['password']);

        $this->assertDatabaseHas('users', [
            'id' => $user->id,
        ]);
    }

    public function test_guest_cannot_access_delete_account_page(): void
    {
        $response = $this->get('/account/delete');

        $response->assertRedirect('/login');
    }

    public function test_guest_cannot_delete_account(): void
    {
        $response = $this->delete('/account', [
            'password' => 'password123',
        ]);

        $response->assertRedirect('/login');
    }
}
