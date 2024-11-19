<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Saving $saving
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <legend><?= __('Add Savings') ?></legend>
                        <?= $this->Html->link(__('<i class="bi bi-list-ul"></i>'), ['action' => 'index'], ['class' => 'btn btn-secondary', 'escape' => false]) ?>
                    </div>
                    <?= $this->Form->create($saving) ?>
                    <fieldset>
                        <div class="form-group mb-3">
                            <?= $this->Form->control('nominal', [
                                'class' => 'form-control',
                                'label' => 'Nominal',
                                'required' => true
                            ]) ?>
                        </div>
                        <div class="form-group mb-3">
                            <?= $this->Form->control('status', [
                                'class' => 'form-control',
                                'label' => 'Status',
                                'required' => true
                            ]) ?>
                        </div>
                        <div class="form-group mb-3">
                            <?= $this->Form->control('user_id', [
                                'options' => $users,
                                'class' => 'form-select',
                                'label' => 'User',
                                'empty' => 'Select User',
                                'required' => true
                            ]) ?>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="mt-2">
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
