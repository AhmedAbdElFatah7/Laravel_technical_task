<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;

class ProductApiTest extends TestCase
{
    use RefreshDatabase;
    public function it_can_create_a_product()
    {
        $data = [
            'name' => 'Test Product',
            'price' => 100.50,
            'stock' => 10,
        ];
        $response = $this->postJson('/api/products', $data);
        $response->assertStatus(201)
                 ->assertJson([
                     'success' => true,
                     'message' => 'Product created successfully',
                     'data' => [
                         'name' => 'Test Product',
                         'price' => 100.50,
                         'stock' => 10,
                     ]
                 ]);
        $this->assertDatabaseHas('products', $data);
    }
}
