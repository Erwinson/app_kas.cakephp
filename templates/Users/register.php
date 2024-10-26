<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $groups
 */
?>
<div class="row">
    <div class="column column-80">
        <div class="users form content">
            <?= $this->Form->create($user, ['type' => 'file']) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('nisn');
                    echo $this->Form->control('password', ['type'=>'text']);
                    echo $this->Form->control('name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('photo', ['type' => 'file']);
                    echo $this->Form->control('status', ['options' => ['admin' => 'Admin Kelas cuy', 'Student' => 'Siswa cuy']]);
                    echo $this->Form->control('is_active', ['options' => ['1'=>'Ya in', '0'=>'Gak usah'],'value'=>'student']);
                    echo $this->Form->control('group_id', ['options' => $groups, 'label' => 'Class']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
