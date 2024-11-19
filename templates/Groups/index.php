<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Group> $groups
 */
?>
<div class="groups index content container mt-3">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <?= $this->Html->link(__('<i class="bi bi-building-fill-add"></i>'), ['action' => 'add'], ['class' => 'btn btn-success', 'escape' => false]) ?>
    </div>
    <h3><?= __('Groups') ?></h3>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th><?= __('id') ?></th>
                    <th><?= __('name', ['title' => 'Nama']) ?></th>
                    <th><?= __('nominal', ['title' => 'Kas']) ?></th>
                    <th><?= __('created', ['title' => 'Tanggal Daftar']) ?></th>
                    <th><?= __('modified') ?></th>
                    <th class="text-center"><?= __('Aksi') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($groups as $group): ?>
                    <tr>
                        <td><?= $this->Number->format($group->id) ?></td>
                        <td><?= h($group->name) ?></td>
                        <td><?= $this->Number->format($group->nominal) ?></td>
                        <td><?= date("d F Y H:i:s", strtotime($group->created)) ?></td>
                        <td><?= h($group->modified) ?></td>
                        <td class="text-center">
                            <?= $this->Html->link(
                                __('<i class="bi bi-eye-fill"></i>'), 
                                ['action' => 'view', $group->id], 
                                ['class' => 'btn btn-info btn-sm mb-1', 'escape' => false]
                            ) ?>
                            <?= $this->Html->link(
                                __('<i class="bi bi-pencil-square"></i>'), 
                                ['action' => 'edit', $group->id], 
                                ['class' => 'btn btn-primary btn-sm mb-1', 'escape' => false]
                            ) ?>
                            <?= $this->Form->postLink(
                                __('<i class="bi bi-trash-fill"></i>'), 
                                ['action' => 'delete', $group->id], 
                                [
                                    'confirm' => __('Ini serius data {0} dihapus?', $group->id),
                                    'class' => 'btn btn-danger btn-sm',
                                    'escape' => false
                                ]
                            ) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="paginator">
        <ul class="pagination justify-content-center">
            <?= $this->Paginator->first('<< ' . __('first'), ['class' => 'page-item']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['class' => 'page-item']) ?>
            <?= $this->Paginator->numbers(['class' => 'page-item']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['class' => 'page-item']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['class' => 'page-item']) ?>
        </ul>
        <p class="text-center"><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
