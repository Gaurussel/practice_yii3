<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\WorkingShift $model */

$this->title = 'Create Working Shift';
$this->params['breadcrumbs'][] = ['label' => 'Working Shifts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="working-shift-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
