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
            <?= $this->Html->link(__('Edit Adressbuch'), ['action' => 'edit', $adressbuch->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Adressbuch'), ['action' => 'delete', $adressbuch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adressbuch->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Adressbuch'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Adressbuch'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="adressbuch view content">
            <h3><?= h($adressbuch->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($adressbuch->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adresse') ?></th>
                    <td><?= h($adressbuch->adresse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($adressbuch->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($adressbuch->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefonnummer') ?></th>
                    <td><?= $this->Number->format($adressbuch->telefonnummer) ?></td>
                </tr>
                <tr>
                    <th><?= __('Geburtstag') ?></th>
                    <td><?= h($adressbuch->geburtstag) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
