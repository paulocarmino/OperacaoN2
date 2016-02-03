<!-- BEGIN HEAD -->
@include('planoTecnico.layout.header')
<!-- END HEADER -->

<table class="footable table table-stripped toggle-arrow-tiny" data-page-size='10000' data-sort="false">
    <thead>
    <tr>
        <th class="text-center">
            SEQUENCIA
        </th>
        <th class="text-center">
            ATIVIDADE
        </th>
        <th class="text-center">
            ESCOPO
        </th>
        <th class="text-center">
            PREDECESSOR
        </th>
        <th class="text-center">
            AGENTE DE SOLUÇÃO
        </th>
        <th class="text-center">
            EXECUTOR
        </th>
        <th class="text-center">
            INICIO PREVISTO
        </th>
        <th class="text-center">
            INICIO REAL
        </th>
        <th class="text-center">
            FIM PREVISTO
        </th>
        <th class="text-center">
            FIM REAL
        </th>
        <th class="text-center">
            DURACAO
        </th>
        <th data-hide="all">
            Atividade
        </th>
        <th data-hide="all">
            Descrição
        </th>
    </tr>
    </thead>
    <tbody>
        @foreach ($planoTecnicoList as $planoTecnicoItem)
            <tr>
                <td class="text-center">
                    <?= $planoTecnicoItem->sequencia ?>
                </td>
                <td>
                    <?= substr($planoTecnicoItem->atividade, 0, 35).'...' ?>
                </td>
                <td class="text-center">
                    <?= $planoTecnicoItem->tipo_plano ?>
                </td>
                <td class="text-center">
                    <?= $planoTecnicoItem->predecessor ?>
                </td>
                <td class="text-center">
                    <?= $planoTecnicoItem->agente_solucao ?>
                </td>
                <td class="text-center">
                    <?= $planoTecnicoItem->executor ?>
                </td>
                <td class="text-center">
                    <?= $planoTecnicoItem->inicio_previsto ?>
                </td >
                <td class="text-center">
                    <?= $planoTecnicoItem->inicio_real ?>
                </td>
                <td class="text-center">
                    <?= $planoTecnicoItem->fim_previsto ?>
                </td>
                <td class="text-center">
                    <?= $planoTecnicoItem->fim_real ?>
                </td>
                <td class="text-center">
                    <?= $planoTecnicoItem->duracao ?>
                </td>
                <td>
                    <?= $planoTecnicoItem->atividade ?>
                </td>
                <td>
                    <?= $planoTecnicoItem->descricao_atividade ?>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- END PAGE CONTAINER -->
@include('planoTecnico.layout.bottom')
<!-- BEGIN PRE-FOOTER -->

