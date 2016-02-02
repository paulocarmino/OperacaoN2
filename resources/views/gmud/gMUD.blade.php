@extends('layout.master')

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
                                    <strong>Atividade</strong>
                                </th>
                                <th class="text-center">
                                    AGENTE DE SOLUÇÃO
                                </th>
                                <th class="text-center">
                                    ANALISTA
                                </th>
                                <th class="text-center">
                                    APROVAÇÃO
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($gmuds as $gmud)

                                @include('gmud.rulesGmud')

                                <tr>
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
                                    <td valign="middle" class="text-center">
                                        <?= $gmud->agente_solucao ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $gmud->executor ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $gmud->aprovacao ?>
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