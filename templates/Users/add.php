<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $groups
 */
?>
<div class="row mt-3 container">
    <aside class="col-md-2">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('<i class="bi bi-list-ul"></i> '), ['action' => 'index'], ['class' => 'btn btn-secondary', 'escape' => false]) ?>
        </div>
    </aside>
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-body">
                <?= $this->Form->create($user, ['type' => 'file', 'class' => 'form-horizontal']) ?>
                <fieldset class="">
                    <legend class="border-bottom pb-2 mb-4"><?= __('Add User') ?></legend>
                    <div class="form-group">
                        <?= $this->Form->control('nisn', ['class' => 'form-control', 'label' => 'NISN']) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('password', ['type'=>'text', 'class' => 'form-control', 'label' => 'Password']) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('name', ['class' => 'form-control', 'label' => 'Name']) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('email', ['class' => 'form-control', 'label' => 'Email']) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('phone', ['class' => 'form-control', 'label' => 'Phone']) ?>
                    </div>
                    <div class="form-group mt-2">
                        <?= $this->Form->control('photo', ['type' => 'file', 'class' => 'form-control-file', 'label' => 'Photo']) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('status', ['options' => ['Pilih status', 'admin' => 'Admin Kelas cuy', 'Student' => 'Siswa cuy'], 'class' => 'form-control', 'label' => 'Status']) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('is_active', ['options' => ['1' => 'Ya in', '0' => 'Gak usah'], 'value' => 'student', 'class' => 'form-control', 'label' => 'Is Active']) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('group_id', ['options' => $groups, 'label' => 'Class', 'class' => 'form-control']) ?>
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
