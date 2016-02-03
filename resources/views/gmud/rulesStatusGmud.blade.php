@if ($gmud->status == 'Aprov.Técn.' || $gmud->status == 'Em Valid.' || $gmud->status == 'Em Negoci.')
    <?= $gmud->status = '<span class="label label-warning">'.$gmud->status.'</span>'?>
    @elseif ($gmud->status == 'Aprovada')
        <?= $gmud->status  = '<span class="label label-primary">'.$gmud->status.'</span>'?>
        @else
            <?= $gmud->status  = '<span class="label label-success">'.$gmud->status.'</span>'?>
    @endif