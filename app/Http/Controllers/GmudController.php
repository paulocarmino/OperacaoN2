<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\OperacaoN2\Repositories\GmudRepository;

class GmudController extends Controller{

    private $gmudRepository;

    public function __construct(GmudRepository $gmudRepository)
    {
        $this->gmudRepository = $gmudRepository;
    }


    public function listaGmuds()
    {
        $gmuds = $this->gmudRepository->getAllGmudWaitApproval();



        return view('index', compact('gmuds'));
    }
}