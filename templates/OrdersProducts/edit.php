<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrdersProduct $ordersProduct
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ordersProduct->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ordersProduct->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Orders Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ordersProducts form content">
            <?= $this->Form->create($ordersProduct) ?>
            <fieldset>
                <legend><?= __('Edit Orders Product') ?></legend>
                <?php
                    echo $this->Form->control('order_ID');
                    echo $this->Form->control('product_ID');
                    echo $this->Form->control('order_product_amount');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
