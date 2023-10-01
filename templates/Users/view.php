<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
$this->layout = 'admin';
$this->Html->css(['normalize.min', 'milligram.min', 'cake','styles']);
$this->Html->script("https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js",['block'=>true]);
?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <a href=<?= $this->Url->build(['action' => 'index'])?>
               class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fa-solid fa-arrow-left"></i> Back</a>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3>User ID: <?= h($user->id) ?></h3>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th><?= __('User Name') ?></th>
                        <td><?= h($user->user_name) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('User Email') ?></th>
                        <td><?= h($user->user_email) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('User Phone') ?></th>
                        <td><?= h($user->user_phone) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('User Emp Role') ?></th>
                        <td><?= h($user->user_emp_role) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= $this->Number->format($user->id) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Nonce') ?></th>
                        <td><?= $this->Number->format($user->nonce) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Nonce Expiry') ?></th>
                        <td><?= h($user->nonce_expiry) ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
