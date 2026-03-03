<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    //ATIVIDADE 2, 3, 4
    public function sobre()
    {
        return view('sobre');
    }

    //ATIVIDADE 5
    public function contato()
    {
        return "Página de Contato";
    }

    //ATIVIDADE 6
    public function usuario($id)
    {
        return "Usuário ID: " . $id;
    }
}
