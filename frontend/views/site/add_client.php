<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\client */
/* @var $form ActiveForm */
?>
<div class="site-add_client">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'PrimaryContactId') ?>
        <?= $form->field($model, 'CreatedDateTime') ?>
        <?= $form->field($model, 'UpdatedDateTime') ?>
        <?= $form->field($model, 'ClientName') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-add_client -->
