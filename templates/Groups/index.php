<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Group> $groups
 */
?>
<div class="groups index content">
    <?= $this->Html->link(__('New Group'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Groups') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name', ['title' => 'Nama']) ?></th>
                    <th><?= $this->Paginator->sort('nominal', ['title' => 'Kas']) ?></th>
                    <th><?= $this->Paginator->sort('created', ['title' => 'Tanggal Daftar']) ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Aksi') ?></th>
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
                    <td class="actions">
                        <?= $this->Html->link(__('Detail'), ['action' => 'view', $group->id]) ?>
                        <?= $this->Html->link(__('Ubah'), ['action' => 'edit', $group->id]) ?>
                        <?= $this->Form->postLink(__('Hapus'), ['action' => 'delete', $group->id], ['confirm' => __('Ini serius data {0} dihapus?', $group->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>