<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CustomerControllerTest extends TestCase
{
    public function testIndex()
    {
        $response = $this->get('/api/customers');

        $response->assertStatus(200);
    }
    
    public function testGetCustomer()
    {
        $response = $this->json('GET', '/api/customers');

        $response->assertJson([]);
    }
}
