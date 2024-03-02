<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
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
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
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
            'table_id' => 'Table ID',
            'clients_count' => 'Clients Count',
            'waiter_id' => 'Waiter ID',
            'cooker_id' => 'Cooker ID',
            'drinks' => 'Drinks',
            'foods' => 'Foods',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}