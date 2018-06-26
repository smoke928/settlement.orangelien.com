<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Client */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ClientName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PrimaryContactId')->textInput() ?>

    <?= $form->field($model, 'CreatedDateTime')->textInput() ?>

    <?= $form->field($model, 'UpdatedDateTime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
