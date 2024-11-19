<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Saving $saving
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="container mt-3">
    <div class="row">
        <aside class="col-md-2">
            <div class="side-nav mb-3">
                <h4 class="heading"><?= __('Actions') ?></h4>
                <div class="btn-group-vertical w-70" role="group" aria-label="Actions">
                    <?= $this->Form->postLink('<i class="bi bi-trash-fill"></i> ', ['action' => 'delete', $saving->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saving->id), 'class' => 'btn btn-danger mb-2', 'escape' => false]) ?>
                    <?= $this->Html->link('<i class="bi bi-list-ul"></i> ', ['action' => 'index'], ['class' => 'btn btn-secondary mb-2', 'escape' => false]) ?>
                </div>
            </div>
        </aside>
        <div class="col-md-9">
            <div class="card shadow-sm">
                <div class="card-body">
                    <?= $this->Form->create($saving) ?>
                    <fieldset>
                        <legend class="border-bottom pb-2 mb-4"><?= __('Edit Savings') ?></legend>
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
            <div class="text-right mt-2">
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
