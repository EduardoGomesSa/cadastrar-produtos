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

    public function test_index_success(): void{
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_store_success(): void{
        $data = [
            'nome'=>'teste',
            'preco'=>1,
        ];

        $response = $this->post('/produtos', $data);

        $response->assertStatus(201);
    }

    public function test_update_success(){
        $this->assertTrue(true);
    }
}
