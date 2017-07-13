<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use App\Produto;
class ProdutoController extends Controller {

    public function lista(){

        $produtos = Produto::all();

        return view('listagem')->with('produtos', $produtos);
    }

    public function mostra() {
    	$id = Request::route('id');
		  $produto = Produto::find($id);
    	return view('detalhes')->with('p', $produto);

    }

    public function novo(){
    	return view ('formulario');
    }

      public function adiciona(){
        Produto::create(Request::all());
    	   return redirect('/produtos')->withInput();
    }

}