<?php

namespace Tests\Unit;

use App\Client;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    /** @var Client $client */
    protected $client;

    public function setUp(): void
    {
        parent::setUp();

        $this->client = factory('App\Client')->create();
    }

    /** @test */
    public function a_client_has_user()
    {
        $user = User::latest()->first();
        $this->assertInstanceOf('App\Client', $user->client);
    }
}
