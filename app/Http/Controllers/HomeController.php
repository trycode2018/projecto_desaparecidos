<?php

namespace App\Http\Controllers;

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
        $pessoas = (new FindController())->getDesaparecidos();
        return view('show', ['pessoas' => $pessoas]);
    }

    public function editarPessoas()
    {
        return view('edit');
    }

    public function mostrarUmaPessoa()
    {
        $find = (new FindController())->show();
        return view('people',['pessoa'=>$find]);
    }
}
