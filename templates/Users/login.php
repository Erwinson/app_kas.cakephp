<!-- in /templates/Users/login.php -->
 <?php $this->disableAutoLayout();?>

<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<?= $this->element("header"); ?>

<body class="login-page bg-body-secondary">

    <div class="app-content container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body ">
                        <?= $this->Form->create(null, ['url' => '/users/login', 'class' => 'needs-validation']) ?>
                        <legend class="text-center mb-2">Login</legend>
                        <h5 class="text-center mb-4">Login akun nya Broo!</h5>
                        <div class="form-group mb-3">
                            <?= $this->Form->control('nisn', [
                                'required' => true,
                                'class' => 'form-control',
                                'label' => 'NISN'
                            ]) ?>
                        </div>
                        <div class="form-group mb-3">
                            <?= $this->Form->control('password', [
                                'required' => true,
                                'class' => 'form-control',
                                'label' => 'Password'
                            ]) ?>
                        </div>
                        <div class="text-center">
                            <?= $this->Form->submit(__('Login'), ['class' => 'btn btn-primary w-100']) ?>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                    <p class="text-center">Belum punya akun? yok <?= $this->Html->link("Register!", ['action' => 'register'], ['class' => 'text-decoration-none']) ?></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
