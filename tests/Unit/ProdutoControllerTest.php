<?php

namespace Tests\Unit;

use App\Http\Controllers\ProdutoController;
use App\Models\Produto;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProdutoControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function index_success(): void{
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function store_success(){
        $this->assertTrue(true);
    }

    public function update_success(){
        $this->assertTrue(true);
    }
}
