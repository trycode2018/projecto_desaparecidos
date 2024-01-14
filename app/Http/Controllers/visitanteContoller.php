<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class visitanteContoller extends Controller
{
    public function visitante_visualizarPessoas_desaparecidas()
    {
        $pessoas = (new FindController())->getDesaparecidos();
       
        return view('visitantes.visitor', ['pessoas' => $pessoas]);

    }
    public function visualizarPessoas_desaparecidas()
    {
        $pessoas = (new FindController())->getDesaparecidos();
       
        return view('visitantes.desaparecidos', ['pessoas' => $pessoas]);

    }

    public function depoimentos_visualizarPessoas_desaparecidas()
    {
        $pessoas = (new FindController())->getDesaparecidos();
       
        return view('visitantes.depoimentos', ['pessoas' => $pessoas]);

    }

    public function visitante_sabeMaisrPessoas_desaparecidas($id)
    {
        $findController = new FindController();

        $pessoa = $findController->getDesaparecidoPorId($id);
       
        //dd($pessoa);

        return view('visitantes.sabermais', ['pessoa' => $pessoa]);

    }
}
