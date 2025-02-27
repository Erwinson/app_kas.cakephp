<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 * @var iterable<\App\Model\Entity\Group> $groups
 */
?>
<div class="users index content container mt-3">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <?= $this->Html->link(('<i class="bi bi-person-plus-fill"></i> '), ['action' => 'add'], ['class' => 'btn btn-success float-right', 'escape' => false]) ?>
    </div>
    <h3><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Photo') ?></th>
                    <th><?= __('Name') ?></th>
                    <th><?= __('Phone') ?></th>
                    <th><?= __('Is Active') ?></th>
                    <th><?= __('Group') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= h($user->id) ?></td>
                    <td><?= $this->Html->image("users/".$user->photo, ['class' => 'img-thumbnail', 'width' => '105px']) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td><?= h($user->phone) ?></td>
                    <td>
                    <?php
                        if ($user->is_active) {
                            echo $this->Html->link('<i class="bi bi-bell-fill"></i>', ['action'=> 'active',$user->id, 0], ['class' => 'btn btn-success btn-sm', 'escape' => false]);
                        } else {
                            echo $this->Html->link('<i class="bi bi-bell-slash-fill"></i>', ['action'=> 'active',$user->id, 1], ['class' => 'btn btn-warning btn-sm', 'escape' => false]);
                        }
                    ?>
                    </td>
                    <td>
                        <?= $user->group ? $this->Html->link($user->group->name, ['controller' => 'Groups', 'action' => 'view', $user->group->id]) : '' ?>
                    </td>
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
    <div class="paginator">
        <ul class="pagination justify-content-center">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(('next') . ' >') ?>
            <?= $this->Paginator->last(('last') . ' >>') ?>
        </ul>
        <p class="text-center"><?= $this->Paginator->counter(('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>