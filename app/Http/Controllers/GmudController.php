<?php

namespace OperacaoN2\Http\Controllers;

use Illuminate\Http\Request;

use OperacaoN2\Http\Requests;
use OperacaoN2\Http\Controllers\Controller;

class GmudController extends Controller
{
    public function listaGmud()
    {
        return view('index');
    }
}
