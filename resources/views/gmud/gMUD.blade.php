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
                           placeholder="Search in table">

                    <div class="table-responsive">
                        <table class="footable table table-stripped" data-page-size='10000' data-filter=#filter>
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

                                @include('gmud.rulesGmud')

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