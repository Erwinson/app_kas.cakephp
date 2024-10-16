<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Saving $saving
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Saving'), ['action' => 'edit', $saving->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Saving'), ['action' => 'delete', $saving->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saving->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Savings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Saving'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="savings view content">
            <h3><?= h($saving->status) ?></h3>
            <table>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($saving->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $saving->hasValue('user') ? $this->Html->link($saving->user->name, ['controller' => 'Users', 'action' => 'view', $saving->user->id]) : '' ?></td>
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