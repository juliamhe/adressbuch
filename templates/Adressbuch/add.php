<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Adressbuch $adressbuch
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Adressbuch'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="adressbuch form content">
            <?= $this->Form->create($adressbuch) ?>
            <fieldset>
                <legend><?= __('Add Adressbuch') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('adresse');
                    echo $this->Form->control('telefonnummer');
                    echo $this->Form->control('email');
                    echo $this->Form->control('geburtstag', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
