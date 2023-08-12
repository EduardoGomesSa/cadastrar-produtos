<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Http\Resources\ProdutoResource;
use App\Models\Produto;

class ProdutoController extends Controller
{
    private $produto;

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    public function index(){
        return ProdutoResource::collection(
            $this->produto->all()
        );
    }

    public function store(ProdutoRequest $request){
        $produtoCriado = $this->produto->create($request->all());

        if($produtoCriado){
            $resource = new ProdutoResource($produtoCriado);

            return $resource->response()->setStatusCode(201);
        }

        return response(['error'=>'produto não foi criado'])->setStatusCode(401);
    }
}
