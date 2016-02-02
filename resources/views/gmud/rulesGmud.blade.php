<?php if ($gmud->aprovacao == 'Sem aprovação') {
    $gmud->aprovacao = '<span class="label label-danger">
                                                                        Não avaliada
                                                                        </span>';
}else{
    $gmud->aprovacao = '<span class="label label-success">'.
            $gmud->aprovacao
            .'</span>';
} ?>