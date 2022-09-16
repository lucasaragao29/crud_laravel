<?php

namespace App\Http\Controllers;

use App\Models\Produto as ModelsProduto;
use Illuminate\Http\Request;
use App\Produto;
use Illuminate\Database\Events\ModelsPruned;

class ProdutosController extends Controller
{
    public function create(){
        return view('produtos.criar');
    }
    public function store(Request $request)
    {
       ModelsProduto::create([
        'nome'=>$request->nome,
        'custo'=>$request->custo,
        'preço'=>$request->preço,
        'quantidade'=>$request->quantidade, 
       ]);
       return "Produto Criado com Sucesso!";
    }
    public function show($id)
    {
        $produto= ModelsProduto::FindOrFail($id);
        return view('produtos.show',['produtos'=>$produto]);
    }
    public function edit($id)
    {
        $produto= ModelsProduto::FindOrFail($id);
        return view('produtos.edit',['produtos'=>$produto]);
    }
    public function update(Request $request ,$id){
        $produto= ModelsProduto::FindOrFail($id);
        $produto->update([
            'nome'=>$request->nome,
            'custo'=>$request->custo,
            'preço'=>$request->preço,
            'quantidade'=>$request->quantidade,
          ]) ;
          return "Produto Atualizado com sucesso"; 
        

    }
    public function delete($id){
        $produtos= ModelsProduto::FindOrFail($id);
        return view ('produtos.delete',['produto'=>$produtos]);
    }
    public function destroy($id){
        $produto = ModelsProduto::FindOrFail($id);
        $produto->delete();
        return "Produto deletado com sucesso!!!";
    }
}
