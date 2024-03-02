<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $firstname
 * @property string $lastname
 * @property string $partonymic
 * @property int $status
 * @property string $password
 * @property int $role
 * @property string $email
 *
 * @property WorkingShift $workingShift
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'firstname', 'lastname', 'partonymic', 'status', 'password', 'role', 'email'], 'required'],
            [['status', 'role'], 'integer'],
            [['username', 'firstname', 'lastname', 'partonymic'], 'string', 'max' => 50],
            [['password', 'email'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'partonymic' => 'Partonymic',
            'status' => 'Status',
            'password' => 'Password',
            'role' => 'Role',
            'email' => 'Email',
        ];
    }

    /**
     * Gets query for [[WorkingShift]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorkingShift()
    {
        return $this->hasOne(WorkingShift::class, ['id' => 'id']);
    }
}
