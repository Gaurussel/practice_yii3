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
            [['table_id', 'clients_count', 'drinks', 'foods', 'status'], 'required'],
            [['table_id', 'clients_count', 'waiter_id', 'cooker_id', 'status'], 'integer'],
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

    public function getCooker()
    {
        return $this->hasOne(User::class, ['id' => 'cooker_id']);
    }

    public function getWaiter()
    {
        return $this->hasOne(User::class, ['id' => 'waiter_id']);
    }
}
