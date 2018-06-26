<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\CodeviolationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="codeviolation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'CaseId') ?>

    <?= $form->field($model, 'OrderId') ?>

    <?= $form->field($model, 'CaseNumber') ?>

    <?= $form->field($model, 'Description') ?>

    <?= $form->field($model, 'ViolationDate') ?>

    <?php // echo $form->field($model, 'HearingDate') ?>

    <?php // echo $form->field($model, 'LienDate') ?>

    <?php // echo $form->field($model, 'LienAmountPerDay') ?>

    <?php // echo $form->field($model, 'LienAmount') ?>

    <?php // echo $form->field($model, 'HardCostsAmount') ?>

    <?php // echo $form->field($model, 'RecordingFee') ?>

    <?php // echo $form->field($model, 'AdminFee') ?>

    <?php // echo $form->field($model, 'NegotiationFee') ?>

    <?php // echo $form->field($model, 'TotalAdminFees') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
