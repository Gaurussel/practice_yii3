<?php

use app\models\Order;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Заказы';
$this->params['breadcrumbs'][] = $this->title;

$status = [
    0 => 'Принят',
    1 => 'Готовится',
    2 => 'Подано',
    3 => 'Оплачено',
];

?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->user->identity->role != 2): ?>
        <p>
            <?= Html::a('Новый заказ', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php endif; ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'table_id',
            'clients_count',
            [
                'attribute' => 'waiter_id',
                'value' => function ($data) {
                    return $data->waiter->firstname . ' ' . $data->waiter->lastname;
                }
            ],
            [
                'attribute' => 'cooker_id',
                'value' => function ($data) {
                    return $data->cooker ? $data->cooker->firstname . ' ' . $data->cooker->lastname : 'Отсутствует';
                }
            ],
            //'drinks:ntext',
            //'foods:ntext',
            [
                'attribute' => 'status',
                'value' => function ($data) use($status) {
                    return $status[$data->status];
                }
            ],
            //'created_at',
            //'updated_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Order $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
