<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Group $group
 */
?>
<div class="row container mt-3">
    <aside class="col-md-2">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('<i class="bi bi-list-ul"></i> '), ['action' => 'index'], ['class' => 'btn btn-secondary', 'escape' => false]) ?>
        </div>
    </aside>
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-body">
                <fieldset>
                    <legend class="border-bottom pb-2 mb-4"><?= __('Add Groups') ?></legend>
                        <div class="card-body">
                            <?= $this->Form->create($group) ?>
                                <div class="form-group">
                                    <?= $this->Form->control('name', ['class' => 'form-control', 'label' => 'Group Name']) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->control('nominal', ['class' => 'form-control', 'label' => 'Nominal Amount']) ?>
                                </div>
                        </div>
                    </fieldset>

            </div>
        </div>
        <div class="mt-2">
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->end() ?>

        </div>
    </div>
</div>
