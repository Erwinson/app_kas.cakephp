<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Saving> $savings
 */
?>
<div class="savings index content">
    <?= $this->Html->link(__('New Saving'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Savings') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nominal') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($savings as $saving): ?>
                <tr>
                    <td><?= $this->Number->format($saving->id) ?></td>
                    <td><?= $this->Number->format($saving->nominal) ?></td>
                    <td><?= h($saving->status) ?></td>
                    <td><?= h($saving->created) ?></td>
                    <td><?= h($saving->modified) ?></td>
                    <td><?= $saving->hasValue('user') ? $this->Html->link($saving->user->name, ['controller' => 'Users', 'action' => 'view', $saving->user->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $saving->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $saving->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $saving->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saving->id)]) ?>
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