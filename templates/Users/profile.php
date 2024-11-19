<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row mt-3 container">
    <aside class="col-md-2">
        <div class="side-nav mb-3">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <div class="btn-group-vertical w-70" role="group" aria-label="Actions">
                <?= $this->Html->link('<i class="bi bi-pencil-square"></i> ', ['action' => 'edit', $user->id], ['class' => 'btn btn-primary mb-2', 'escape' => false]) ?>
                <?= $this->Form->postLink('<i class="bi bi-trash-fill"></i> ', ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-danger mb-2', 'escape' => false]) ?>
                <?= $this->Html->link('<i class="bi bi-list-ul"></i> ', ['action' => 'index'], ['class' => 'btn btn-secondary mb-2', 'escape' => false]) ?>
                <?= $this->Html->link('<i class="bi bi-person-plus-fill"></i> ', ['action' => 'add'], ['class' => 'btn btn-success', 'escape' => false]) ?>
            </div>
        </div>
    </aside>

    <div class="col-md-9">
        <div class="users view content border p-4 rounded">
            <h3 class="mb-4 border-bottom pb-2"><?= h($user->name) ?></h3>
            <table class="table table-striped table-bordered">
                <tr>
                    <th><?= __('NISN') ?></th>
                    <td><?= h($user->nisn) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($user->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($user->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($user->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($user->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Active') ?></th>
                    <td><?= h($user->is_active) ? __('Yes') : __('No') ?></td>
                </tr>
                <tr>
                    <th><?= __('Group') ?></th>
                    <td><?= $user->has('group') ? $this->Html->link($user->group->name, ['controller' => 'Groups', 'action' => 'view', $user->group->id]) : __('N/A') ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
            </table>

            <div class="related mt-4">
                <h4><?= __('Related Savings') ?></h4>
                <?php if (!empty($user->savings)) : ?>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th><?= __('ID') ?></th>
                                <th><?= __('Nominal') ?></th>
                                <th><?= __('Status') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th><?= __('User ID') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($user->savings as $saving) : ?>
                            <tr>
                                <td><?= h($saving->id) ?></td>
                                <td><?= h($saving->nominal) ?></td>
                                <td><?= h($saving->status) ?></td>
                                <td><?= h($saving->created) ?></td>
                                <td><?= h($saving->modified) ?></td>
                                <td><?= h($saving->user_id) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link('<i class="bi bi-eye-fill"></i>', ['controller' => 'Savings', 'action' => 'view', $saving->id], ['class' => 'btn btn-info btn-sm mr-1', 'escape' => false]) ?>
                                    <?= $this->Html->link('<i class="bi bi-pencil-square"></i>', ['controller' => 'Savings', 'action' => 'edit', $saving->id], ['class' => 'btn btn-primary btn-sm mr-1', 'escape' => false]) ?>
                                    <?= $this->Form->postLink('<i class="bi bi-trash-fill"></i>', ['controller' => 'Savings', 'action' => 'delete', $saving->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saving->id), 'class' => 'btn btn-danger btn-sm', 'escape' => false]) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php else: ?>
                    <p><?= __('No related savings found.') ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
