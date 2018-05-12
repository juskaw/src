<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin $admin
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Admin'), ['action' => 'edit', $admin->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Admin'), ['action' => 'delete', $admin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $admin->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Admins'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="admins view large-9 medium-8 columns content">
    <h3><?= h($admin->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($admin->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($admin->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fname') ?></th>
            <td><?= h($admin->fname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lname') ?></th>
            <td><?= h($admin->lname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plate Number') ?></th>
            <td><?= h($admin->plate number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($admin->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($admin->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($admin->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Admin Id') ?></th>
            <td><?= $this->Number->format($admin->admin_id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Admins') ?></h4>
        <?php if (!empty($admin->admins)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Fname') ?></th>
                <th scope="col"><?= __('Lname') ?></th>
                <th scope="col"><?= __('Age') ?></th>
                <th scope="col"><?= __('Plate Number') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Admin Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($admin->admins as $admins): ?>
            <tr>
                <td><?= h($admins->id) ?></td>
                <td><?= h($admins->username) ?></td>
                <td><?= h($admins->password) ?></td>
                <td><?= h($admins->fname) ?></td>
                <td><?= h($admins->lname) ?></td>
                <td><?= h($admins->age) ?></td>
                <td><?= h($admins->plate number) ?></td>
                <td><?= h($admins->quantity) ?></td>
                <td><?= h($admins->admin_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Admins', 'action' => 'view', $admins->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Admins', 'action' => 'edit', $admins->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Admins', 'action' => 'delete', $admins->id], ['confirm' => __('Are you sure you want to delete # {0}?', $admins->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
