<!-- in /templates/Users/login.php -->
<div class="app-content">
    <h3>Login</h3>
    <h5>Belum punya akun? yok <?= $this->Html->link("Register!", ['action' => 'register']) ?></h5>
    <?= $this->Form->create(null, ['url'=>'/users/login']) ?>
    <fieldset>
        <legend>Login akun nya Broo!</legend>
        <?= $this->Form->control('nisn', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Login')); ?>
    <?= $this->Form->end() ?>
</div>