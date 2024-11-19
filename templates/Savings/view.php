<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Saving $saving
 */
?>
<div class="row container mt-3">
        <aside class="col-md-2">
            <div class="side-nav mb-3">
                <h4 class="heading"><?= __('Actions') ?></h4>
                    <div class="btn-group-vertical w-70" role="group" aria-label="Actions">
                        <?= $this->Html->link('<i class="bi bi-pencil-square"></i> ', ['action' => 'edit', $saving->id], ['class' => 'btn btn-primary mb-2', 'escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="bi bi-trash-fill"></i> ', ['action' => 'delete', $saving->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saving->id), 'class' => 'btn btn-danger mb-2', 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="bi bi-list-ul"></i> ', ['action' => 'index'], ['class' => 'btn btn-secondary mb-2', 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="bi bi-folder-plus"></i> ', ['action' => 'add'], ['class' => 'btn btn-success', 'escape' => false]) ?>
                    </div>
            </div>
        </aside>

        <div class="col-md-9">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3 class="border-bottom pb-2"><?= h($saving->status) ?></h3>
                    <table class="table table-striped">
                        <tr>
                            <th><?= __('Status') ?></th>
                            <td><?= h($saving->status) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('User') ?></th>
                            <td>
                                <?= $saving->hasValue('user') 
                                    ? $this->Html->link($saving->user->name, ['controller' => 'Users', 'action' => 'view', $saving->user->id]) 
                                    : __('N/A') 
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <td><?= $this->Number->format($saving->id) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Nominal') ?></th>
                            <td><?= $this->Number->format($saving->nominal) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Created') ?></th>
                            <td><?= h($saving->created) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Modified') ?></th>
                            <td><?= h($saving->modified) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
</div>
