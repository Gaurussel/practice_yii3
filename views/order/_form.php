<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Order $model */
/** @var yii\widgets\ActiveForm $form */

$user = Yii::$app->user->identity;

$items = [
    0 => 'Принят',
    1 => 'Ожидает повара',
];

if ($user->role === 2) {
    $items[3] = 'Готовится';
    $items[4] = 'Ожидает подачи';
    
} else if ($user->role === 2) {
    $items[5] = 'Подано';
    $items[6] = 'Оплачено';
}

?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'table_id')->textInput() ?>

    <?= $form->field($model, 'clients_count')->textInput() ?>

    <?= $form->field($model, 'waiter_id')->textInput() ?>

    <?= $form->field($model, 'cooker_id')->textInput() ?>

    <?= $form->field($model, 'drinks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'foods')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->dropDownList($items) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
