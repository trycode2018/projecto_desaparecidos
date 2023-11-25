<?php

namespace App\Http\Controllers;

use App\Models\Find;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {


            $finds = (new FindController())->index();
            $total = (new FindController())->count();
            $count = (new FindController())->getTotal();
            $encontradas = (new FindController())->totalEncontradas();

                return view('index', [
                'pessoas' => $finds,
                'total' => $total,
                'count' => $count,
                'founded' => $encontradas,
            ]);
    }

    public function call_find()
    {
        return view('create');
    }

    public function inserirPessoas(Request $request)
    {
        $pcontroller = (new FindController())->store($request);
        $total = (new FindController())->count();
        $finds = (new FindController())->index();
        $count = (new FindController())->getTotal();
        $encontradas = (new FindController())->totalEncontradas();
        if (isset($pcontroller) && $pcontroller > 0) {
            return view('index', [
                'success' => 'Registro efectuado com sucesso',
                'total' => $total, 'pessoas' => $finds, 'count' => $count,
                'founded' => $encontradas
            ]);
        } else {
            return view('index', [
                'error' => 'Individuo nao registrado !!!',
                'total' => $total, 'pessoas' => $finds, 'count' => $count,
                'founded' => $encontradas
            ]);
        }
    }

    public function visualizarPessoas()
    {
        $pessoas = (new FindController())->index();
        return view('pessoas', ['pessoas' => $pessoas]);
    }
    public function visualizarPessoas_aparecidas()
    {
        $pessoas = (new FindController())->getEncontradas();
        return view('aparecidas', ['pessoas' => $pessoas]);
    }
    public function visualizarPessoas_desaparecidas()
    {
        $pessoas = (new FindController())->getDesaparecidos();
        return view('show', ['pessoas' => $pessoas]);
    }

    public function editarPessoas($id)
    {
        $pessoa = (new FindController())->edit($id);
        return view('edit',['pessoa'=>$pessoa]);
    }

    public function mostrarUmaPessoa($id)
    {
        $find = (new FindController())->show($id);
        return view('people',['pessoa'=>$find]);
    }

    public function editarPessoa(Request $request){
        $dados = (new FindController())->update($request);
        return redirect('/home')->with(['success'=>'Pessoa editado com sucesso !!',
        'dados'=>$dados]);
    }

}
