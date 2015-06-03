<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Etudiant'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="etudiants index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('v_id_etu') ?></th>
            <th><?= $this->Paginator->sort('v_id_carte') ?></th>
            <th><?= $this->Paginator->sort('v_prenom') ?></th>
            <th><?= $this->Paginator->sort('v_nom') ?></th>
            <th><?= $this->Paginator->sort('v_id_groupe') ?></th>
            <th><?= $this->Paginator->sort('v_statut') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($etudiants as $etudiant): ?>
        <tr>
            <td><?= h($etudiant->v_id_etu) ?></td>
            <td><?= h($etudiant->v_id_carte) ?></td>
            <td><?= h($etudiant->v_prenom) ?></td>
            <td><?= h($etudiant->v_nom) ?></td>
            <td><?= h($etudiant->v_id_groupe) ?></td>
            <td><?= h($etudiant->v_statut) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $etudiant->v_id_etu]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $etudiant->v_id_etu]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $etudiant->v_id_etu], ['confirm' => __('Are you sure you want to delete # {0}?', $etudiant->v_id_etu)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
