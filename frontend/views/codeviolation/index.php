<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CodeviolationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Codeviolations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="codeviolation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Codeviolation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CaseId',
            'OrderId',
            'CaseNumber',
            'Description:ntext',
            'ViolationDate',
            //'HearingDate',
            //'LienDate',
            //'LienAmountPerDay',
            //'LienAmount',
            //'HardCostsAmount',
            //'RecordingFee',
            //'AdminFee',
            //'NegotiationFee',
            //'TotalAdminFees',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
