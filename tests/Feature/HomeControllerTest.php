<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_it_loads_the_home_page()
    {
        $response = $this->get(route('home.index'));

        $response->assertStatus(200);
        $response->assertSee('rachids');
    }
}
