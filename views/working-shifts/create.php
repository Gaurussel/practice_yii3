<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\WorkingShifts $model */

$this->title = 'Create Working Shifts';
$this->params['breadcrumbs'][] = ['label' => 'Working Shifts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="working-shifts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
