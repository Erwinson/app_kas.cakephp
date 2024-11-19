<div class="container mt-3">
    <table class="table table-striped table-bordered">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Nominal</th>
        </tr>
        <?php
            $no=1;
            $total=0;
            foreach ($outcome as $key => $i) :?>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$i->user->name;?></td>
                <td><?=$i->user->group->name;?></td>
                <td><?=$i->nominal;?></td>
            </tr>
        <?php
            $total = $total + $i->nominal;
            endforeach;?>
         <tr class="fw-bold">
            <td colspan="3" class="text-end">TOTAL</td>
            <td><?= $this->Number->currency($total, 'IDR'); ?></td>
        </tr>
    
    </table>

</div>