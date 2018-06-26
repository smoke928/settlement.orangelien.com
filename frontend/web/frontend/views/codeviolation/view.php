<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Codeviolation */

$this->title = $model->CaseId;
$this->params['breadcrumbs'][] = ['label' => 'Codeviolations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="codeviolation-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->CaseId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CaseId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'CaseId',
            'OrderId',
            'CaseNumber',
            'Description:ntext',
            'ViolationDate',
            'HearingDate',
            'LienDate',
            'LienAmountPerDay',
            'LienAmount',
            'HardCostsAmount',
            'RecordingFee',
            'AdminFee',
            'NegotiationFee',
            'TotalAdminFees',
        ],
    ]) ?>

</div>
