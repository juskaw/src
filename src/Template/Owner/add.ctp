<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Owner $owner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Owner'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="owner form large-9 medium-8 columns content">
    <?= $this->Form->create($owner) ?>
    <fieldset>
        <legend><?= __('Add Owner') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('fname');
            echo $this->Form->control('lname');
            echo $this->Form->control('age');
            echo $this->Form->control('plate number');
            echo $this->Form->control('quantity');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
