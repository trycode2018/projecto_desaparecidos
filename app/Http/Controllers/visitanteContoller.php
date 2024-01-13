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

    public function visitante_sabeMaisrPessoas_desaparecidas()
    {
        $pessoas = (new FindController())->getDesaparecidos();
       
        return view('visitantes.visitor', ['pessoas' => $pessoas]);

    }
}