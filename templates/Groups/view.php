<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Group $group
 */
?>
<div class="row container mt-3">
    <aside class="col-md-2">
        <div class="side-nav mb-3">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <div class="btn-group-vertical w-70" role="group" aria-label="Actions">
                <?= $this->Html->link(__('<i class="bi bi-pencil-square"></i>'), ['action' => 'edit', $group->id], ['class' => 'btn btn-primary mb-2', 'escape' => false]) ?>
                <?= $this->Form->postLink(__('<i class="bi bi-trash-fill"></i>'), ['action' => 'delete', $group->id], [
                    'confirm' => __('Are you sure you want to delete # {0}?', $group->id),
                    'class' => 'btn btn-danger mb-2', 'escape' => false
                ]) ?>
                <?= $this->Html->link(__('<i class="bi bi-list-ul"></i>'), ['action' => 'index'], ['class' => 'btn btn-secondary mb-2', 'escape' => false]) ?>
                <?= $this->Html->link(__('<i class="bi bi-building-fill-add"></i>'), ['action' => 'add'], ['class' => 'btn btn-success mb-2', 'escape' => false]) ?>
            </div>
        </div>
    </aside>

    <div class="col-md-9">
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h3 class="mb-4 border-bottom pb-2"><?= h($group->name) ?></h3>
                <table class="table table-striped">
                    <tr>
                        <th><?= __('Name') ?></th>
                        <td><?= h($group->name) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= $this->Number->format($group->id) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Nominal') ?></th>
                        <td><?= $this->Number->format($group->nominal) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Created') ?></th>
                        <td><?= h($group->created) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Modified') ?></th>
                        <td><?= h($group->modified) ?></td>
                    </tr>
                </table>

            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4><?= __('Related Users') ?></h4>
            </div>
            <div class="card-body">
                <?php if (!empty($group->users)) : ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th><?= __('Id') ?></th>
                                    <th><?= __('Nisn') ?></th>
                                    <th><?= __('Name') ?></th>
                                    <th><?= __('Email') ?></th>
                                    <th><?= __('Phone') ?></th>
                                    <th><?= __('Status') ?></th>
                                    <th><?= __('Is Active') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($group->users as $user) : ?>
                                <tr>
                                    <td><?= h($user->id) ?></td>
                                    <td><?= h($user->nisn) ?></td>
                                    <td><?= h($user->name) ?></td>
                                    <td><?= h($user->email) ?></td>
                                    <td><?= h($user->phone) ?></td>
                                    <td><?= h($user->status) ?></td>
                                    <td><?= h($user->is_active ? __('Yes') : __('No')) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(('<i class="bi bi-eye-fill"></i>'), ['controller' => 'Users', 'action' => 'view', $user->id], ['class' => 'btn btn-info btn-sm', 'escape' => false]) ?>
                                        <?= $this->Html->link(('<i class="bi bi-pencil-square"></i>'), ['controller' => 'Users', 'action' => 'edit', $user->id], ['class' => 'btn btn-primary btn-sm', 'escape' => false]) ?>
                                        <?= $this->Form->postLink(('<i class="bi bi-trash-fill"></i>'), ['controller' => 'Users', 'action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-danger btn-sm', 'escape' => false]) ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <p class="text-muted"><?= __('No related users found.') ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
