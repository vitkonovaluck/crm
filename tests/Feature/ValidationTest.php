<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ValidationTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testValidationWrongEmail()
    {
        $response = $this->post('login', ['email' => 'testemail', 'password' => 'testemail']);
        $response->assertStatus(422);
        $content = $response->getContent();
        $this->assertStringContainsString('email', $content);
    }

    public function testValidationNoPassword()
    {
        $response = $this->post('login', ['email' => 'testemail@example.com']);
        $response->assertStatus(422);
        $content = $response->getContent();
        $this->assertStringContainsString('password', $content);
    }
}
