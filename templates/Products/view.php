<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
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
                ['action' => 'edit', $product->id],
                [
                    'escape' => false,
                    'class' => 'btn btn-primary btn-sm',
                ]
            ) ?>
            <a href=<?= $this->Url->build(['action' => 'add'])?> class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fa-solid fa-square-plus"></i> Add Product</a>
            <?= $this->Form->postLink(
                '<i class="fas fa-trash"></i> ' . __('Delete'),
                ['action' => 'delete', $product->id],
                [
                    'confirm' => __('Are you sure you want to delete # {0}?', $product->id),
                    'escape' => false,
                    'class' => 'btn btn-danger btn-sm',
                ]
            ) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="products view content">
            <h3>Product ID: <?= h($product->id) ?></h3>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th><?= __('Product Name') ?></th>
                            <td><?= h($product->product_name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <td><?= $this->Number->format($product->id) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Product Cost') ?></th>
                            <td><?= $this->Number->format($product->product_cost) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Inventory Amount') ?></th>
                            <td><?= $this->Number->format($product->inventory_amount) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Product Description') ?></th>
                            <td><?= h($product->product_description) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Product Brand') ?></th>
                            <td><?= h($product->product_brand) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Product Category') ?></th>
                            <td><?= h($product->product_brand) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Product Image Path') ?></th>
                            <td><?= h($product->product_brand) ?></td>
                        </tr>
                    </tbody>
                </table>
            <div class="related">
                <h4><?= __('Related Orders') ?></h4>
                <?php if (!empty($product->orders)) : ?>
                <div class="table-responsive">
                    <table class ="table table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Cust ID') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($product->orders as $orders) : ?>
                        <tr>
                            <td><?= h($orders->id) ?></td>
                            <td><?= h($orders->cust_ID) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(
                                    '<i class="fa-regular fa-eye"></i> ' . __('View'),
                                    [   'controller' => 'Orders',
                                        'action' => 'view', $orders->id],
                                    [
                                        'escape' => false,
                                        'class' => 'btn btn-primary btn-sm',
                                    ]
                                ) ?>
                                <?= $this->Html->link(
                                    '<i class="fas fa-edit"></i> ' . __('Edit'),
                                    [   'controller' => 'Orders',
                                        'action' => 'edit', $orders->id],
                                    [
                                        'escape' => false,
                                        'class' => 'btn btn-primary btn-sm',
                                    ]
                                ) ?>
                                <?= $this->Form->postLink(
                                    '<i class="fas fa-trash"></i> ' . __('Delete'),
                                    [   'controller' => 'Orders',
                                        'action' => 'delete', $orders->id],
                                    [
                                        'confirm' => __('Are you sure you want to delete # {0}?', $orders->id),
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
