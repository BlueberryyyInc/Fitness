<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Product> $products
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
<div class="products index content">

        <div class="d-sm-flex align-items-center justify-content-between mb-4" >
	    <h3><?= __('Products') ?></h3>
	    <a href=<?= $this->Url->build(['action' => 'add'])?> class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fa-solid fa-square-plus"></i> Add Product</a>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th><?=h('Product ID')?></th>
                            <th><?=h('Product Name')?></th>
                            <th><?=h('Product Cost')?></th>
                            <th><?=h('Inventory Amount')?></th>
                            <th><?=h('Product Description')?></th>
                            <th><?=h('Product Brand')?></th>
                            <th><?=h('Product Category')?></th>
                            <th><?=h('Product Image')?></th>
                            <th> <?=h('Actions')?></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th><?=h('Product ID')?></th>
                            <th><?=h('Product Name')?></th>
                            <th><?=h('Product Cost')?></th>
                            <th><?=h('Inventory Amount')?></th>
                            <th><?=h('Product Description')?></th>
                            <th><?=h('Product Brand')?></th>
                            <th><?=h('Product Category')?></th>
                            <th><?=h('Product Image')?></th>
                            <th> <?=h('Actions')?></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?= $this->Number->format($product->id) ?></td>
                            <td><?= h($product->product_name) ?></td>
                            <td><?= $this->Number->format($product->product_cost) ?></td>
                            <td><?= $this->Number->format($product->inventory_amount) ?></td>
                            <td><?= h($product->product_description) ?></td>
                            <td><?= h($product->product_brand) ?></td>
                            <td><?= h($product->product_category) ?></td>
                            <td>

                            <?= $this->Html->image($product->product_image_path, ['alt' => $product->product_name, 'width' => '50']) ?>
                            <td class="actions">
                                <?= $this->Html->link(
                                    '<i class="fa-regular fa-eye"></i> ' . __('View'),
                                    ['action' => 'view', $product->id],
                                    [
                                        'escape' => false,
                                        'class' => 'btn btn-primary btn-sm',
                                    ]
                                ) ?>
                                <?= $this->Html->link(
                                    '<i class="fas fa-edit"></i> ' . __('Edit'),
                                    ['action' => 'edit', $product->id],
                                    [
                                        'escape' => false,
                                        'class' => 'btn btn-primary btn-sm',
                                    ]
                                ) ?>
                                <?= $this->Form->postLink(
                                    '<i class="fas fa-trash"></i> ' . __('Delete'),
                                    ['action' => 'delete', $product->id],
                                    [
                                        'confirm' => __('Are you sure you want to delete # {0}?', $product->id),
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
