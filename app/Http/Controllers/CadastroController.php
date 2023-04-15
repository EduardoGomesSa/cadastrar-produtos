<?php

namespace App\Http\Controllers;

use App\Models\CadastroModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Inertia\Inertia;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function mostrar(){
        return view('cadastro');
    }

    public function index()
    {
        return Inertia::render('Cadastro/Index', ['Eu sou Eduardo']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request
            -> validate([
            'nome' => 'required | string | max:50',
            ]);

        // $validated -> preco = $request
        //     -> validate([
        //     'preco' => 'required | number'
        // ]);

        // $validated = $request -> nome;
        // $validated =  $request -> preco;


        // $produto = new CadastroModel;
        // $produto -> nome = $request -> nome;
        // $produto -> preco = $request -> preco;

        //$validated -> save();

        //$request->user()->cadastros()->create($validated);

        CadastroModel::create([
            'nome' => $request->nome,
            'preco' => $request->preco,
            'user_id' => $request->user()->id
        ]);

        return redirect(route('cadastros.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
