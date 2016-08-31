<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Edit user</h2>
        </div>
        <?= $this->Form->create($user) ?>
        <fieldset>
            <?php
            echo $this->Form->input('name');
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('confirm_password', ['type' => 'password']);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success btn-block']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
