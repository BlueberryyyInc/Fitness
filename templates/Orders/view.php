<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
$this->layout = 'admin';
$this->Html->css(['normalize.min', 'milligram.min', 'cake','styles']);
$this->Html->script("https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js",['block'=>true]);
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
             <a href=<?= $this->Url->build(['action' => 'index'])?> class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fa-solid fa-arrow-left"></i> Back</a>
            <?= $this->Html->link(
                '<i class="fas fa-edit"></i> ' . __('Edit'),
                ['action' => 'edit', $order->id],
                [
                    'escape' => false,
                    'class' => 'btn btn-primary btn-sm',
                ]
            ) ?>
            <a href=<?= $this->Url->build(['action' => 'add'])?> class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fa-solid fa-file-circle-plus"></i> Add Order</a>
            <?= $this->Form->postLink(
                '<i class="fas fa-trash"></i> ' . __('Delete'),
                ['action' => 'delete', $order->id],
                [
                    'confirm' => __('Are you sure you want to delete # {0}?', $order->id),
                    'escape' => false,
                    'class' => 'btn btn-danger btn-sm',
                ]
            ) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orders view content">
            <h3>Order ID: <?= h($order->id) ?></h3>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= $this->Number->format($order->id) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Cust ID') ?></th>
                        <td><?= $this->Number->format($order->cust_ID) ?></td>
                    </tr>
                </tbody>
            </table>
            <div class="related">
                <h4><?= __('Related Products') ?></h4>
                <?php if (!empty($order->products)) : ?>
                <div class="table-responsive">
                    <table class ="table table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Product Name') ?></th>
                            <th><?= __('Product Cost') ?></th>
                            <th><?= __('Inventory Amount') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($order->products as $products) : ?>
                        <tr>
                            <td><?= h($products->id) ?></td>
                            <td><?= h($products->product_name) ?></td>
                            <td><?= h($products->product_cost) ?></td>
                            <td><?= h($products->inventory_amount) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(
                                    '<i class="fa-regular fa-eye"></i> ' . __('View'),
                                    [   'controller' => 'Products',
                                        'action' => 'view', $products->id],
                                    [
                                        'escape' => false,
                                        'class' => 'btn btn-primary btn-sm',
                                    ]
                                ) ?>
                                <?= $this->Html->link(
                                    '<i class="fas fa-edit"></i> ' . __('Edit'),
                                    [   'controller' => 'Products',
                                        'action' => 'edit', $products->id],
                                    [
                                        'escape' => false,
                                        'class' => 'btn btn-primary btn-sm',
                                    ]
                                ) ?>
                                <?= $this->Form->postLink(
                                    '<i class="fas fa-trash"></i> ' . __('Delete'),
                                    [   'controller' => 'Products',
                                        'action' => 'delete', $products->id],
                                    [
                                        'confirm' => __('Are you sure you want to delete # {0}?', $products->id),
                                        'escape' => false,
                                        'class' => 'btn btn-danger btn-sm',
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
