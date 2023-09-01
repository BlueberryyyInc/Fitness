<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\OrdersProduct> $ordersProducts
 */
?>
<div class="ordersProducts index content">
    <?= $this->Html->link(__('New Orders Product'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Orders Products') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('order_ID') ?></th>
                    <th><?= $this->Paginator->sort('product_ID') ?></th>
                    <th><?= $this->Paginator->sort('order_product_amount') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ordersProducts as $ordersProduct): ?>
                <tr>
                    <td><?= $this->Number->format($ordersProduct->id) ?></td>
                    <td><?= $this->Number->format($ordersProduct->order_ID) ?></td>
                    <td><?= $this->Number->format($ordersProduct->product_ID) ?></td>
                    <td><?= $this->Number->format($ordersProduct->order_product_amount) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ordersProduct->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ordersProduct->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ordersProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersProduct->id)]) ?>
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
