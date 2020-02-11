<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    public function test_can_see_registraion_page()
    {
        $response = $this->get('/register');

        $response->assertSuccessful();
        $response->assertSee('name="phone"');
        $response->assertSee('name="national_id"');
        $response->assertSee('name="email"');
        $response->assertSee('name="name"');
    }
}
