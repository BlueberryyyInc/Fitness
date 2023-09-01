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
            <?= $this->Html->link(__('Edit Orders Product'), ['action' => 'edit', $ordersProduct->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Orders Product'), ['action' => 'delete', $ordersProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersProduct->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orders Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Orders Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ordersProducts view content">
            <h3><?= h($ordersProduct->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ordersProduct->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order ID') ?></th>
                    <td><?= $this->Number->format($ordersProduct->order_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product ID') ?></th>
                    <td><?= $this->Number->format($ordersProduct->product_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Product Amount') ?></th>
                    <td><?= $this->Number->format($ordersProduct->order_product_amount) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
