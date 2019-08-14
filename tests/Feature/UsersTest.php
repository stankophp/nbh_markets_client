<?php

namespace Tests\Feature;

use App\Role;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class UsersTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

    }

    /** @test */
    public function a_user_requires_an_email()
    {
        /** @var User $user */
        $user = factory(User::class)->create(['role_id' => Role::ROLE_CLIENT]);
        $this->actingAs($user);

        $userNew = factory(User::class, ['email' => null])->make();

        $response = $this->post('/dashboard', $userNew->toArray());

        $response->assertSessionHasErrors('email');
    }

    /** @test */
    public function a_user_requires_a_password()
    {
        /** @var User $user */
        $user = factory(User::class)->create(['role_id' => Role::ROLE_CLIENT]);
        $this->actingAs($user);

        $userNew = factory(User::class, ['password' => null])->make();

        $response = $this->post('/dashboard', $userNew->toArray());

        $response->assertSessionHasErrors('password');
    }

    /** @test */
    public function non_authenticated_user_may_not_participate()
    {
        $response = $this->get('/home');
        $response->assertStatus(302);
    }
}
