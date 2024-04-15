<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function Funcionarios(){$Funcionarios=Funcionario::all();return view('Mercados', 'Funcionarios');}
}
