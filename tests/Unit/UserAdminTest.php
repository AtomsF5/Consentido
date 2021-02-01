<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
//use Illuminate\Foundation\Testing\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Contracts\Auth\Authenticatable;
use Tests\TestCase;
use App\Models\User;

class UserAdminTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_user_cannot_access_admin_profile()
    {
        // que el usuario al logearse no acceda a las funciones del admnistrador
        User::factory()->create();
        $user = User::find(1);

        $response = $this->actingAs($user)
                ->get('/admin');


        $response->assertStatus(302);

    }
}
