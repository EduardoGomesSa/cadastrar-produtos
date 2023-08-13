<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstoqueRequest;
use App\Http\Resources\EstoqueResource;
use App\Models\Estoque;
use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    private $estoque;

    public function __construct(Estoque $estoque)
    {
        $this->estoque = $estoque;
    }

    public function index(){
        return EstoqueResource::collection(
            $this->estoque->all()
        );
    }

    public function store(EstoqueRequest $request){
        $estoqueExiste = $this->estoque->where('produto_id', $request->produto_id)->get();

        if($estoqueExiste){
            $quantidade = $estoqueExiste->quantidade + $request->quantidade;

            $estoqueAtualizado = $estoqueExiste->update(['quantidade'=>$quantidade]);

            if($estoqueAtualizado > 0){
                $resource = new EstoqueResource($estoqueExiste);

                return $resource->response()->setStatusCode(200);
            }

            return response(['error'=>'não foi possível atualizar esse estoque já existente'])->setStatusCode(400);
        }

        $estoqueCriado = $this->estoque->create($request->all);

        if($estoqueCriado){
            $resource = new EstoqueResource($estoqueCriado);

            return $resource->response()->setStatusCode(201);
        }

        return response(['error'=>'não foi possível criar o estoque'])->setStatusCode(400);
    }

    public function update(EstoqueRequest $request, $id){
        $estoqueExiste = $this->estoque->find($id);

        if($estoqueExiste){
            $estoqueAtualizado = $estoqueExiste->update($request->all());

            if($estoqueAtualizado > 0){
                return response(['message'=>'estoque atualizado com sucesso'])->setStatusCode(200);
            }

            return response(['error'=>'não foi possível atualizar o estoque'])->setStatusCode(400);
        }

        return response(['error'=>'estoque não existe'])->setStatusCode(404);
    }
}
