@extends('layout.master')

@section('content')
    <div class="page-content">
        <div class="container">
            <!-- BEGIN PAGE BREADCRUMB -->
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="javascript:;">Inicio</a><i class="fa fa-circle"></i>
                </li>
                <li class="active">
                    Bem vindo
                </li>
            </ul>
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="row">
                <div class="col-md-12">

                    <!-- BEGIN Portlet PORTLET-->
                    <div class="portlet light">
                        <div class="portlet-title tabbable-line">
                            <div class="caption">
                                <i class="icon-pin caption font-red-sunglo"></i>
								<span class="caption-subject bold caption font-red-sunglo uppercase">
								WEB/VAS/SOA </span>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#portlet_tab2" data-toggle="tab">
                                        Mudanças - GMUD </a>
                                </li>
                                <li>
                                    <a href="#portlet_tab1" data-toggle="tab">
                                        Solicitações de Mudança - CRQ </a>
                                </li>
                            </ul>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="portlet_tab2">


                                    <div class="portlet grey-cascade box">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-cogs"></i>Aguardando aprovação
                                            </div>
                                        </div>
                                        <div class="portlet-body">

                                            <table class="table table-bordered table-striped table-condensed flip-content">
                                                <thead class="flip-content">
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
                                    </div>
                                </div>
                                <div class="tab-pane" id="portlet_tab1">
                                    <div class="scroller" style="height: 200px;">
                                        Teste
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- END PAGE CONTENT INNER -->
        </div>
    </div>

@endsection