<?php namespace App\OperacaoN2\Repositories;

use Illuminate\Support\Facades\DB;

class GmudRepository {

    public function getAllGmudWaitApproval()
    {

        $filasWeb = '\'OP_WEB_N2_GLOBALWEB\',
                     \'OP_OISMARTCLOUD_N2_GLOBALWEB\',
                     \'OPERACAO_SIS_PORTAL_OI\',
        ';

        $filasSva = '\'OP_ACM_N2_GLOBALWEB\',
                     \'OP_BROADCAST_N2_GLOBALWEB\',
                     \'OP_FERRAMENTASVA_N2_GLOBALWEB\',
                     \'OP_MENUOI_N2_GLOBALWEB\',
                     \'OP_OCS_N2_GLOBALWEB\',
                     \'OP_OISOMNALINHA_N2_GLOBALWEB\',
                     \'OP_PORTALVAS_N2_GLOBALWEB\',
                     \'OP_SMS_N2_GLOBALWEB\',
                     \'OP_SVA_N2_GLOBALWEB\',
                     \'OP_VASPROXY_N2_GLOBALWEB\',
        ';

        $filasSoa = '\'OP_SOA_N2_GLOBALWEB\',
                     \'OP_ENTIREX_N2_GLOBALWEB\',
                     \'OP_VITRIA_N2_GLOBALWEB\'
        ';

        $filasTodas = $filasWeb.$filasSva.$filasSoa;



        $listaGmud = DB::select('SELECT DISTINCT (SUBSTR (B.MUDANCA_ID_FK,  9, 7)  || \'<br>\' || DECODE(A.STATUS,
    3, \'Em Aprov. Ger.\',
    4, \'Aprov.Técn.\',
    5, \'Em Valid.\',
    6, \'Em Negoci.\',
    7, \'Aprovada\',
    8, \'Em Execucao\',
    9, \'Em Backout\',
    10, \'Rejeitada\',
    11, \'Executada\',
    12, \'Abortada\',
    13, \'Cancelada\',
    14, \'Fechada\')) AS GMUD,
  TO_CHAR(ARADMIN.CONV_DATA_ARS(C.INICIO_PREVISTO), \'DD/MM/YYYY\' || chr(13) || \'HH24:MI\') AS INICIO,
  TO_CHAR(ARADMIN.CONV_DATA_ARS(C.FIM_PREVISTO), \'DD/MM/YYYY\' || chr(13) || \'HH24:MI\') AS FIM,
  C.TIPO_PLANO,
  C.ATIVIDADE,
  C.DESCRICAO_ATIVIDADE,
  C.AGENTE_SOLUCAO,
  substr(c.executor,0,instr(c.executor,\' \',1,1) - 1)||substr(c.executor,instr(c.executor,\' \',-1),length(c.executor)) AS executor,
  DECODE(B.RD_APROVADA,
         0, \'Aprovada\',
         1, \'Rejeitada\',
         2, \'Em Análise\',
      NULL, \'Sem aprovação\') AS Aprovacao
  FROM ARADMIN.MUD_MUDANCAS A
      INNER JOIN ARADMIN.MUD_APROVACOESTECNICAS B ON A.MUDANCA_ID = B.MUDANCA_ID_FK
      INNER JOIN ARADMIN.MUD_PLANOTECNICO C ON A.MUDANCA_ID = C.MUDANCA_ID_FK
  WHERE (  C.AGENTE_SOLUCAO IN ('.$filasTodas.'))
    AND (b.rd_aprovada = 0  OR b.rd_aprovada = 1 OR b.rd_aprovada = 2 OR b.rd_aprovada IS NULL)
  AND C.AGENTE_SOLUCAO = B.AGENTE_SOLUCAO
  AND A.STATUS IN (\'4\',\'5\',\'6\',\'7\',\'8\',\'9\',\'10\')
ORDER BY Aprovacao DESC, INICIO');

        return $listaGmud;
    }
    
}