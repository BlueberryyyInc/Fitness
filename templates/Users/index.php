<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
$this->layout = 'admin';
echo $this->Html->css("https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css",['block'=>true]);
echo $this->Html->css("/css/styles1.css",['block'=>true]);
echo $this->Html->script("https://use.fontawesome.com/releases/v6.3.0/js/all.js",['block'=>true]);
echo $this->Html->script("https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js",['block'=>true]);
echo $this->Html->script("/js/scripts.js",['block'=>true]);
echo $this->Html->script("https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js",['block'=>true]);
echo $this->Html->script("/js/datatables-simple-demo.js",['block'=>true]);
?>

<div class="users index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4" >
	    <h1 class="h3 mb-e text-gray-80"><?= __('Users') ?></h1>
	    <a href="<?= $this->Url->build(['action' => 'add'])?>->" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fa-solid fa-user-plus"></i> Add User</a>
    </div>
    
<div class="card mb-4">
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_name') ?></th>
                    <th><?= $this->Paginator->sort('user_email') ?></th>
                    <th><?= $this->Paginator->sort('user_phone') ?></th>
                    <th><?= $this->Paginator->sort('user_emp_role') ?></th>
                    <th><?= $this->Paginator->sort('nonce') ?></th>
                    <th><?= $this->Paginator->sort('nonce_expiry') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                <th>
                    <?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_name') ?></th>
                    <th><?= $this->Paginator->sort('user_email') ?></th>
                    <th><?= $this->Paginator->sort('user_phone') ?></th>
                    <th><?= $this->Paginator->sort('user_emp_role') ?></th>
                    <th><?= $this->Paginator->sort('nonce') ?></th>
                    <th><?= $this->Paginator->sort('nonce_expiry') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </tfoot>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->user_name) ?></td>
                    <td><?= h($user->user_email) ?></td>
                    <td><?= h($user->user_phone) ?></td>
                    <td><?= h($user->user_emp_role) ?></td>
                    <td><?= $this->Number->format($user->nonce) ?></td>
                    <td><?= h($user->nonce_expiry) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
