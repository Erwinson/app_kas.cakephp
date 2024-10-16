<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Saving $saving
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $saving->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $saving->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Savings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="savings form content">
            <?= $this->Form->create($saving) ?>
            <fieldset>
                <legend><?= __('Edit Saving') ?></legend>
                <?php
                    echo $this->Form->control('nominal');
                    echo $this->Form->control('status');
                    echo $this->Form->control('user_id', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
