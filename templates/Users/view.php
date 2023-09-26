<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
$this->layout = 'admin';
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
            <h3><?= h($user->id) ?></h3>
            <table>
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

            </table>
        </div>
    </div>
</div>
