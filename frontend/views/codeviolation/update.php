<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Codeviolation */

$this->title = 'Update Codeviolation: ' . $model->CaseId;
$this->params['breadcrumbs'][] = ['label' => 'Codeviolations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CaseId, 'url' => ['view', 'id' => $model->CaseId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="codeviolation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
