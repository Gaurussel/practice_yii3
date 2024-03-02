<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Order $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'table_id')->textInput() ?>

    <?= $form->field($model, 'clients_count')->textInput() ?>

    <?= $form->field($model, 'waiter_id')->textInput() ?>

    <?= $form->field($model, 'cooker_id')->textInput() ?>

    <?= $form->field($model, 'drinks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'foods')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->dropDownList([
        0 => 'Принят',
        1 => 'Ожидает повара',
        2 => 'Готовится',
        3 => 'Ожидает подачи',
        4 => 'Подано',
        5 => 'Оплачено'
        ]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
