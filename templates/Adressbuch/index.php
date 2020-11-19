<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Adressbuch[]|\Cake\Collection\CollectionInterface $adressbuch
 */
?>
<div class="adressbuch index content">
    <?= $this->Html->link(__('New Adressbuch'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Adressbuch') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('adresse') ?></th>
                    <th><?= $this->Paginator->sort('telefonnummer') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('geburtstag') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($adressbuch as $adressbuch): ?>
                <tr>
                    <td><?= $this->Number->format($adressbuch->id) ?></td>
                    <td><?= h($adressbuch->name) ?></td>
                    <td><?= h($adressbuch->adresse) ?></td>
                    <td><?= $this->Number->format($adressbuch->telefonnummer) ?></td>
                    <td><?= h($adressbuch->email) ?></td>
                    <td><?= h($adressbuch->geburtstag) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $adressbuch->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adressbuch->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adressbuch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adressbuch->id)]) ?>
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
