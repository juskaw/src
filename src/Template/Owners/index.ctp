<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Owner[]|\Cake\Collection\CollectionInterface $owners
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Owner'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="owners index large-9 medium-8 columns content">
    <h3><?= __('Owners') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('platenumber') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quatity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_owners') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($owners as $owner): ?>
            <tr>
                <td><?= $this->Number->format($owner->id) ?></td>
                <td><?= h($owner->username) ?></td>
                <td><?= h($owner->password) ?></td>
                <td><?= h($owner->fname) ?></td>
                <td><?= h($owner->lname) ?></td>
                <td><?= $this->Number->format($owner->age) ?></td>
                <td><?= h($owner->platenumber) ?></td>
                <td><?= h($owner->quatity) ?></td>
                <td><?= $this->Number->format($owner->id_owners) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $owner->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $owner->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $owner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $owner->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
