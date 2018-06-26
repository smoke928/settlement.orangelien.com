<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Codeviolation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="codeviolation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'OrderId')->textInput() ?>

    <?= $form->field($model, 'CaseNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ViolationDate')->textInput() ?>

    <?= $form->field($model, 'HearingDate')->textInput() ?>

    <?= $form->field($model, 'LienDate')->textInput() ?>

    <?= $form->field($model, 'LienAmountPerDay')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LienAmount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HardCostsAmount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RecordingFee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AdminFee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NegotiationFee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TotalAdminFees')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
