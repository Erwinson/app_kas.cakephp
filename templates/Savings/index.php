<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Saving> $savings
 */
?>
<div class="savings index content container mt-3">
    <div class="d-flex justify-content-between mb-4">
        <?= $this->Html->link(__('<i class="bi bi-folder-plus"></i>'), ['action' => 'add'], ['class' => 'btn btn-success', 'escape' => false]) ?>
        <?= $this->Html->link(__('<i class="bi bi-box-arrow-right"></i>'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'btn btn-danger', 'escape' => false]) ?>
    </div>

    <h3><?= __('Savings') ?></h3>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center"><?= __('Id') ?></th>
                    <th class="text-center"><?= __('Nominal') ?></th>
                    <th class="text-center"><?= __('Status') ?></th>
                    <th class="text-center"><?= __('Created') ?></th>
                    <th class="text-center"><?= __('Modified') ?></th>
                    <th class="text-center"><?= __('User_id') ?></th>
                    <th class="text-center"><?= __('Actions') ?></th>
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
                    <td class="text-center">
                        <?= $this->Html->link(__('<i class="bi bi-eye-fill"></i>'), ['action' => 'view', $saving->id], ['class' => 'btn btn-info btn-sm', 'escape' => false]) ?>
                        <?= $this->Html->link(__('<i class="bi bi-pencil-square"></i>'), ['action' => 'edit', $saving->id], ['class' => 'btn btn-primary btn-sm', 'escape' => false]) ?>
                        <?= $this->Form->postLink(__('<i class="bi bi-trash-fill"></i>'), ['action' => 'delete', $saving->id], [
                            'confirm' => __('Are you sure you want to delete # {0}?', $saving->id),
                            'class' => 'btn btn-danger btn-sm',
                            'escape' => false
                        ]) ?>
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
        <p class="text-center"><?= $this->Paginator->counter(('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
