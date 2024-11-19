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
                <?= $this->Form->postLink(
                    __('<i class="bi bi-trash-fill"></i>'),
                    ['action' => 'delete', $group->id],
                    [
                        'confirm' => __('Are you sure you want to delete # {0}?', $group->id),
                        'class' => 'btn btn-danger mb-2', 'escape' => false
                    ]
                ) ?>
                <?= $this->Html->link(__('<i class="bi bi-list-ul"></i>'), ['action' => 'index'], ['class' => 'btn btn-secondary mb-2', 'escape' => false]) ?>
            </div>
        </div>
    </aside>

    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <?= $this->Form->create($group) ?>
                <legend class="border-bottom pb-2 mb-4"><?= __('Edit Groups') ?></legend>
                <fieldset>
                    <div class="mb-3">
                        <?= $this->Form->control('name', [
                            'class' => 'form-control',
                            'label' => ['text' => 'Group Name', 'class' => 'form-label']
                        ]) ?>
                    </div>
                    <div class="mb-3">
                        <?= $this->Form->control('nominal', [
                            'class' => 'form-control',
                            'label' => ['text' => 'Nominal', 'class' => 'form-label']
                        ]) ?>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="text-right mt-2">
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>

        </div>
        <?= $this->Form->end() ?>
    </div>
</div>
