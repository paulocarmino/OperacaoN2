<?php namespace App\OperacaoN2\Repositories;

use Illuminate\Support\Facades\DB;

class planoTecnicoRepository {

    public function getPlanoTecnicoPerGmud($gmud)
    {

        $this->gmud = $gmud;

        $getPlanoTecnico = DB::select('SELECT
            B.SEQUENCIA,
            B.ATIVIDADE,
            B.DESCRICAO_ATIVIDADE,
            B.TIPO_PLANO,
            B.PREDECESSOR,
            B.AGENTE_SOLUCAO,
            substr(B.EXECUTOR,0,instr(B.EXECUTOR,\' \',1,1) - 1)||substr(B.EXECUTOR,instr(B.EXECUTOR,\' \',-1),length(B.EXECUTOR)) AS EXECUTOR,
            TO_CHAR(ARADMIN.CONV_DATA_ARS(B.INICIO_PREVISTO), \'DD/MM/YYYY HH24:MI\') AS INICIO_PREVISTO,
            TO_CHAR(ARADMIN.CONV_DATA_ARS(B.INICIO_REAL), \'DD/MM/YYYY HH24:MI\') AS INICIO_REAL,
            TO_CHAR(ARADMIN.CONV_DATA_ARS(B.FIM_PREVISTO), \'DD/MM/YYYY HH24:MI\') AS FIM_PREVISTO,
            TO_CHAR(ARADMIN.CONV_DATA_ARS(B.FIM_REAL), \'DD/MM/YYYY HH24:MI\') AS FIM_REAL,
            B.DURACAO
            FROM ARADMIN.MUD_MUDANCAS A
            INNER JOIN ARADMIN.MUD_PLANOTECNICO B ON A.MUDANCA_ID = B.MUDANCA_ID_FK
            WHERE A.MUDANCA_ID = ?
            ORDER BY SEQUENCIA', [$gmud]);

        return $getPlanoTecnico;

    }
}