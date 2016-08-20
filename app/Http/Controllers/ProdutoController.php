<?php   namespace app\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller{
	public function lista(){
		
		$produtos = DB::select('select * from produtos');


		return view('produto.listagem')->withProdutos($produtos);



	}

	public function mostra($id){
		//$id = Request::route('id');

		$resposta = DB::select('select * from produtos where id = ?', [$id]);
		if(empty($resposta)){
			return "Esse produto não existe";
		}

		return view('produto.detalhes')->with('p', $resposta[0]);
	}

	public function novo(){
		return view('produto.formulario');
	}

	public function adiciona(){
		$novo = Request::input('novo');
		$descricao = Request::input('descricao');
		$valor = Request::input('valor');
		$quantidade = Request::input('quantidade');	

		DB::insert("insert into produtos (nome, valor, descricao, quantidade) values(?,?,?,?)", array($novo,$valor,$descricao, $quantidade));

		return redirect('/produtos')->withInput();;
	}
}
