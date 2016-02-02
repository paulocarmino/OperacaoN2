@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Operação WEB/VAS/SOA</h5>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    GMUD
                                </th>
                                <th>
                                    Inicio
                                </th>
                                <th>
                                    Fim
                                </th>
                                <th>
                                    Atividade
                                </th>
                                <th>
                                    Agente Solução
                                </th>
                                <th>
                                    Analista
                                </th>
                                <th>
                                    Aprovação
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($gmuds as $gmud)

                                <?php if ($gmud->aprovacao == 'Sem aprovação') {
                                    $gmud->aprovacao = '<span class="label label-danger">
                                                                        Não avaliada
                                                                        </span>';
                                }else{
                                    $gmud->aprovacao = '<span class="label label-success">'.
                                            $gmud->aprovacao
                                            .'</span>';
                                } ?>

                                <tr>
                                    <td>
                                        <?= $gmud->gmud ?>
                                    </td>
                                    <td>
                                        <?= $gmud->inicio ?>
                                    </td>
                                    <td class="numeric">
                                        <?= $gmud->fim ?>
                                    </td>
                                    <td class="numeric">
                                        <?= $gmud->atividade ?>
                                    </td>
                                    <td class="numeric">
                                        <?= $gmud->agente_solucao ?>
                                    </td>
                                    <td class="numeric">
                                        <?= $gmud->executor ?>
                                    </td>
                                    <td class="numeric">
                                        <?= $gmud->aprovacao ?>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
@endsection