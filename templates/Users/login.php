<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">

    </aside>
    <div class="column-responsive column-100">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Welcome Login') ?></legend>
                <?php
                echo $this->Form->control('user_name');
                echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('login')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>