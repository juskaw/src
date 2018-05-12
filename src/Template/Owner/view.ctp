<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Owner $owner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Owner'), ['action' => 'edit', $owner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Owner'), ['action' => 'delete', $owner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $owner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Owner'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="owner view large-9 medium-8 columns content">
    <h3><?= h($owner->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($owner->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($owner->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fname') ?></th>
            <td><?= h($owner->fname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lname') ?></th>
            <td><?= h($owner->lname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plate Number') ?></th>
            <td><?= h($owner->plate number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($owner->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($owner->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($owner->quantity) ?></td>
        </tr>
    </table>
</div>
