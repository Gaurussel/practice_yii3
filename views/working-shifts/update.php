<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\WorkingShifts $model */

$this->title = 'Update Working Shifts: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Working Shifts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="working-shifts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
