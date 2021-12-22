<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$meus_produtos = Produto::all();
        //return view ('produtos.index', ['produtos' => $meus_produtos]);

        return view('produtos.index', ['produtos' => Produto::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        #if($request->hasFile('url_imagem') && 
        #    $request->file('url_imagem')->isValid()){
        #    $extensao = $request->file('url_imagem')->extension();
        #    $nome = time().'.'.$extensao;
        #    $endereco = $request->file('url_imagem')->storeAs('imagens', 
        #        $nome, 'public');

            $produto = new Produto();
            $produto->nome = $request->nome;
            $produto->url_imagem = $request->url_imagem;
        #    $produto->url_imagem = $endereco;
            $produto->quantidade = $request->quantidade;

            $prduto->save();
            return redirect()->route('produtos.index');
        #    if($produto->save())
        #        return redirect()->route('produtos.index'); 

        #}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        return view('produtos.show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        return view('produtos.edit', ['produto' => $produto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {

        $produto->nome = $request->nome;
        $produto->url_imagem = $request->url_imagem;
        $produto->quantidade = $request->quantidade;  

        $produto->save();
        return redirect()->route('produtos.index');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        if($produto->delete())
            return redirect()->route('produtos.index');
    }
}
