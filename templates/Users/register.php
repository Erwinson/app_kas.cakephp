<?php $this->disableAutoLayout();?>

<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<?= $this->element("header"); ?>

<body>
    <div class="row mt-3 ms-4">
        <div class="col-md-8 offset-md-2">
            <div class="users form content">
                <?= $this->Form->create($user, ['type' => 'file', 'class' => 'form-horizontal']) ?>
                <fieldset class="border p-4 rounded">
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
                <div class="mt-2">
                    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</body>

</html>

