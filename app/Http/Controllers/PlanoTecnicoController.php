<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\OperacaoN2\Repositories\GmudRepository;

class PlanoTecnicoController extends Controller{

    private $gmudRepository;

    public function __construct(GmudRepository $gmudRepository)
    {
        $this->gmudRepository = $gmudRepository;
    }

    public function listaPlanoTecnico()
    {

        $planoTecnicoList = $this->gmudRepository->getPlanoTecnicoPerGmud($gmud = '000000009553085');

        return view('planoTecnico.planoTecnico', compact('planoTecnicoList'));
    }

}