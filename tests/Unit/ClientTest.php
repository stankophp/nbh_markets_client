<?php

namespace Tests\Unit;

use App\Client;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClientTest extends TestCase
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
        $this->assertInstanceOf('App\User', $this->client->user);
    }
    
    /** @test */
    public function non_authenticated_user_may_not_participate()
    {
        $response = $this->get('/home');
        $response->assertStatus(302);
    }
}
