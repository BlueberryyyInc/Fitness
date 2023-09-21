<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 * @var string[]|\Cake\Collection\CollectionInterface $products
 */
$this->layout = 'admin';
?>
<div class="row">
    <aside class="column">
        <a href=<?= $this->Url->build(['action' => 'index'])?> class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fa-solid fa-arrow-left"></i> Back</a>
    </aside>
    <div class="column-responsive column-80">
        <div class="orders form content">
            <?= $this->Form->create($order, ['class' => 'form']) ?>
            <fieldset>
                <legend><?= __('Edit Order') ?></legend>
                <div class="form-group">
                    <?= $this->Form->control('cust_ID', [
                        'class' => 'form-control',
                        'label' => 'Customer ID',
                    ]) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('products._ids', [
                        'options' => $products,
                        'class' => 'form-control',
                        'label' => 'Products',
                    ]) ?>
                </div>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
        <div>
        <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $order->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $order->id), 'class' => 'side-nav-item']
            ) ?>
        </div>
    </div>
</div>
