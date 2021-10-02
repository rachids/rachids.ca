<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('wink:install');
        config(['wink.database_connection' => 'sqlite']);
        $this->artisan('wink:migrate');
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_it_loads_the_home_page()
    {
        $this->withoutExceptionHandling();
        $response = $this->get(route('home.index'));

        $response->assertStatus(200);
        $response->assertSee('rachids');
    }
}
