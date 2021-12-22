<?php

namespace App\Http\Controllers;
use App\Models\Categoria;

use Illuminate\Http\Request;

class ApiController extends Controller
{
	//retornar todas as categorias em formato Json
    public function getCategorias(){
		//logica para retornar todas as categorias
		$categorias = Categoria::get()->toJson();
		return response($categorias, 200);
	}
	//requisição tipo post
	public function criarCategoria(Request $request){
		$categoria = new Categoria();
		$categoria->nome = $request->nome;
		$categoria->save();
		return response()->json([
			"mensagem" => "Categoria criada com sucesso"
		],201);
	}
	//retornar a unica categoria
	public function getCategoria($id){
		$categoria = Categoria::where('id',$id)->with(['produtos'])->first();
		//$categoria = Categoria::where('id',$id)->first();
		if($categoria){
			$resposta = $categoria->toJson();
			return response($resposta,200);
		}else{
			return response()->json([
				"mensagem" => "Categoria não encontrada"
			],404);
		}
	}
	//atualizar categoria
	public function atualizarCategoria(Request $request,Categoria $categoria){
		$categoria->nome = $request->nome;
		if($categoria->save()){;
		return response()->json([
			"mensagem" => "Categoria atualizada com sucesso"
		],200);
		}else{
			return response()->json([
				"mensagem" =>"Erro ao atualizar a categoria"
			],400);
		}
		
	} 
	//excluir categoria
	public function excluirCategoria(Categoria $categoria){
		if($categoria){
			$categoria->delete();
		return response()->json([
			"mensagem" => "Categoria apagada com sucesso"
		],200);
		}else{
			return response()->json([
				"mensagem" =>"Categoria não encontrada"
			],404);
		}
	}

}
