<?php

namespace OperacaoN2\Http\Controllers;

use Illuminate\Http\Request;

use OperacaoN2\Http\Requests;
use OperacaoN2\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class OracleTestController extends Controller
{
    public function listaArs()
    {

        $ars = DB::select('SELECT DISTINCT numero_do_ars FROM ARADMIN.TELEM_ABERTURADEOS WHERE CREATE_DATE BETWEEN ARADMIN.CONV_ARS_DATA(\'20/01/2016 00:00:00\') AND ARADMIN.CONV_ARS_DATA(\'25/01/2016 23:59:59\') AND (AGENTE_DE_SOLUCAO = \'OP_WEB_N2_GLOBALWEB\')');

        foreach ($ars as $a) {
            $a->numero_do_ars;
        }

        return view('index')->withArs($ars);
    }
}
