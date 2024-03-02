<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int $table_id
 * @property int $clients_count
 * @property int $waiter_id
 * @property int $cooker_id
 * @property string $drinks
 * @property string $foods
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['table_id', 'clients_count', 'waiter_id', 'cooker_id', 'drinks', 'foods', 'status', 'created_at', 'updated_at'], 'required'],
            [['table_id', 'clients_count', 'waiter_id', 'cooker_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['drinks', 'foods'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'table_id' => 'Номер столика',
            'clients_count' => 'Количество гостей',
            'waiter_id' => 'Официант',
            'cooker_id' => 'Повар',
            'drinks' => 'Напитки',
            'foods' => 'Еда',
            'status' => 'Статус',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
