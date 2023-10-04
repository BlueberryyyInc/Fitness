<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
use Cake\I18n\Time;
$this->layout = 'admin';
$this->myRandomNumber = random_int(1,2147483647);
$this->now = Time::now();
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <a href=<?= $this->Url->build(['action' => 'index'])?> class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fa-solid fa-arrow-left"></i> Back</a>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
        <?= $this->Form->create($user, ['class' => 'form']) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <div class="form-group">
                    <?= $this->Form->control('user_name', [
                        'class' => 'form-control',
                        'label' => 'User Name',
                    ]) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('user_email', [
                        'class' => 'form-control',
                        'label' => 'User Email',
                    ]) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('user_phone', [
                        'class' => 'form-control',
                        'label' => 'User Phone',
                    ]) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('user_emp_role', [
                        'class' => 'form-control',
                        'label' => 'User Role',
                        'type' => 'select',
                        'options' => ['lvCust' => 'Low Volume Customer','hvCust' => 'High Volume Customer', '1emp' => 'Employee Type 1', '2emp' => 'Employee Type 2'],
                        'empty' => false,
                    ]) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('password', [
                        'class' => 'form-control',
                        'label' => 'Password',
                    ]) ?>
                </div>
                <div hidden class="form-group">
                    <?= $this->Form->control('nonce', [
                        'class' => 'form-control',
                        'label' => 'Nonce',
                        'default' => $this->myRandomNumber,
                    ]) ?>
                </div>
                <div hidden class="form-group">
                    <?= $this->Form->control('nonce_expiry', [
                        'class' => 'form-control',
                        'label' => 'Nonce Expiry',
                        'default' => $this->now->addDays(365),
                    ]) ?>
                </div>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
