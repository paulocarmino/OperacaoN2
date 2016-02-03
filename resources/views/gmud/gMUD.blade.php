@extends('gmud.layout.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Operação WEB/VAS/SOA</h5>

                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>

                <div class="ibox-content">
                    <input type="text" class="form-control input-sm m-b-xs" id="filter"
                           placeholder="Digite algo que queira filtrar na tabela">

                        <table class="footable table table-stripped toggle-arrow-tiny" data-page-size='10000' data-sort="false" data-filter=#filter>
                            <thead>
                            <tr>
                                <th class="text-center">
                                    GMUD
                                </th>
                                <th class="text-center">
                                    INÍCIO
                                </th>
                                <th class="text-center">
                                    FIM
                                </th>
                                <th class="text-center">
                                    ATIVIDADE
                                </th>
                                <th data-hide="all">
                                    Atividade
                                </th>
                                <th data-hide="all">
                                    Descrição
                                </th>
                                <th data-hide="all">
                                    Mais informações
                                </th>
                                <th class="text-center">
                                    AGENTE DE SOLUÇÃO
                                </th>
                                <th class="text-center">
                                    ANALISTA
                                </th>
                                <th class="text-center">
                                    STATUS
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($gmuds as $gmud)


                                <tr>

                                    <div class="modal inmodal fade" id="modalPlanoTecnico<?= substr($gmud->gmud, 8, 7) ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                    <h4 class="modal-title">Plano Técnico - GMUD <?= substr($gmud->gmud, 8, 7) ?></h4>
                                                </div>
                                                <div class="modal-body">



                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-white" data-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <td class="text-center">
                                        <?= $gmud->gmud ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $gmud->inicio ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $gmud->fim ?>
                                    </td>
                                    <td>
                                        <?= substr($gmud->atividade, 0, 35).'...' ?>
                                    </td>
                                    <td>
                                        <?= $gmud->atividade ?>
                                    </td>
                                    <td>
                                        <?= $gmud->descricao_atividade ?>
                                    </td>
                                    <td>
                                        <a href="#"><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#modalPlanoTecnico<?= substr($gmud->gmud, 8, 7) ?>"><i class="fa fa-list"></i> Visualizar Plano Técnico</button></a>
                                    </td>
                                    <td valign="middle" class="text-center">
                                        <?= $gmud->agente_solucao ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $gmud->executor ?>
                                    </td>
                                    <td class="text-center">
                                        @include('gmud.rulesStatusGmud')
                                    </td>

                                </tr>

                            @endforeach
                            </tbody>

                        </table>
                </div>
            </div>
        </div>
    </div>



@endsection