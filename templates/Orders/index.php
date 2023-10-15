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
    <i class="fa-solid fa-file-circle-plus"></i> Add Order</a>
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
                        <?= $this->Html->link(
                            '<i class="fa-regular fa-eye"></i> ' . __('View'),
                            ['action' => 'view', $order->id],
                            [
                                'escape' => false,
                                'class' => 'btn btn-primary btn-sm',
                            ]
                        ) ?>
                        <?= $this->Html->link(
                            '<i class="fas fa-edit"></i> ' . __('Edit'),
                            ['action' => 'edit', $order->id],
                            [
                                'escape' => false,
                                'class' => 'btn btn-primary btn-sm',
                            ]
                        ) ?>
                        <?= $this->Form->postLink(
                            '<i class="fas fa-trash"></i> ' . __('Delete'),
                            ['action' => 'delete', $order->id],
                            [
                                'confirm' => __('Are you sure you want to delete Order ID: {0}?', $order->id),
                                'escape' => false,
                                'class' => 'btn btn-danger btn-sm',
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
