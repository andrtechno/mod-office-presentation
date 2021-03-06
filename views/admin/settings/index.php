<?php

use panix\engine\Html;
use panix\engine\bootstrap\ActiveForm;
?>


<div class="card">
    <div class="card-header">
        <h5><?= $this->context->pageName ?></h5>
    </div>
    <div class="card-body">
        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'auth_login') ?>
        <?= $form->field($model, 'auth_token') ?>
        <?= $form->field($model, 'account') ?>


        <div class="card-footer text-center">
            <?= Html::submitButton(Yii::t('app/default', 'SAVE'), ['class' => 'btn btn-success']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>

</div>

