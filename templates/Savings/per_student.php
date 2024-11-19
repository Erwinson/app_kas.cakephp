<div class="container mt-3">
    <table class="table table-striped table-bordered">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Dibuat</th>
            <th>Total Nominal</th>
        </tr>
            <?php
                $no = 1;
                $grandTotal = 0;
                foreach ($PerStudent as $student): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= h($student->name); ?></td> 
                    <td><?= h($student->created->format('Y-m-d H:i:s')); ?></td> <!-- Displaying created date -->
                    <td><?= number_format($student->total_nominal, 2, ',', '.'); ?></td>
                </tr>
            <?php
                $grandTotal += $student->total_nominal;
                endforeach; ?>
            <tr class="fw-bold">
                <td colspan="3" class="font-weight-bold text-end">TOTAL</td>
                <td><?= number_format($grandTotal, 2, ',', '.'); ?></td>
            </tr>
    </table>

</div>