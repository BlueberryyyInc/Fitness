<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Order> $orders
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
    <h1 class="h3 mb-e text-gray-80"><?= __('Orders') ?></h1>
    <a href=<?= $this->Url->build(['action' => 'add'])?> class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    <i class="fa-solid fa-user-plus"></i> Add Orders</a>
</div>

<div class="card mb-4">
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th><?=h('Order ID')?></th>
                    <th><?=h('Customer ID')?></th>
                    <th><?=h('Actions')?></th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th><?=h('Order ID')?></th>
                    <th><?=h('Customer ID')?></th>
                    <th><?=h('Actions')?></th>
                </tr>
            </tfoot>
            <tbody>
                <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= $this->Number->format($order->id) ?></td>
                    <td><?= $this->Number->format($order->cust_ID) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $order->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
