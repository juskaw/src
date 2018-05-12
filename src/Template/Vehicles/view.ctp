<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vehicle $vehicle
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vehicle'), ['action' => 'edit', $vehicle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vehicle'), ['action' => 'delete', $vehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vehicles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vehicles view large-9 medium-8 columns content">
    <h3><?= h($vehicle->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Platenumber') ?></th>
            <td><?= h($vehicle->platenumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color') ?></th>
            <td><?= h($vehicle->color) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $vehicle->has('user') ? $this->Html->link($vehicle->user->id, ['controller' => 'Users', 'action' => 'view', $vehicle->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($vehicle->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seater') ?></th>
            <td><?= $this->Number->format($vehicle->seater) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Transactions') ?></h4>
        <?php if (!empty($vehicle->transactions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Destination') ?></th>
                <th scope="col"><?= __('Vehicle Id') ?></th>
                <th scope="col"><?= __('Capacity') ?></th>
                <th scope="col"><?= __('Days') ?></th>
                <th scope="col"><?= __('Service') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vehicle->transactions as $transactions): ?>
            <tr>
                <td><?= h($transactions->id) ?></td>
                <td><?= h($transactions->destination) ?></td>
                <td><?= h($transactions->vehicle_id) ?></td>
                <td><?= h($transactions->capacity) ?></td>
                <td><?= h($transactions->days) ?></td>
                <td><?= h($transactions->service) ?></td>
                <td><?= h($transactions->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Transactions', 'action' => 'view', $transactions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Transactions', 'action' => 'edit', $transactions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Transactions', 'action' => 'delete', $transactions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
