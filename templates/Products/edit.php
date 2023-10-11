<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 * @var string[]|\Cake\Collection\CollectionInterface $orders
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
        <div class="products form content">
            <?= $this->Form->create($product, ['class' => 'form']) ?>
            <fieldset>
                <legend><?= __('Edit Product') ?></legend>
                <div class="form-group">
                    <?= $this->Form->control('product_name', [
                        'class' => 'form-control',
                        'label' => 'Product Name',
                    ]) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('product_cost', [
                        'class' => 'form-control',
                        'label' => 'Product Cost',
                    ]) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('inventory_amount', [
                        'class' => 'form-control',
                        'label' => 'Inventory Amount',
                    ]) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('product_description', [
                        'class' => 'form-control',
                        'label' => 'Product Description',
                    ]) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('product_brand', [
                        'class' => 'form-control',
                        'label' => 'Product Brand',
                    ]) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('product_category', [
                        'class' => 'form-control',
                        'label' => 'Product Category',
                    ]) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('product_image_path', [
                        'type'  => 'file',
                        'class' => 'form-control',
                        'label' => 'Product Image',
                    ]) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('orders._ids', [
                        'options' => $orders,
                        'class' => 'form-control',
                        'label' => 'Orders',
                    ]) ?>
                </div>
            </fieldset>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                <?= $this->Form->end() ?>
        </div>
    </div>
</div>
