<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
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
 * @property WorkingShifts $workingShifts
 */
class Users extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    public static function findIdentity($id)
    {

    }
    public static function findIdentityByAccessToken($token, $type = null)
    {

    }
    public function getId()
    {
        return $this->id;
    }
    public function getAuthKey()
    {
        return null;
    }
    public function validateAuthKey($authKey)
    {

    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
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
     * Gets query for [[WorkingShifts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorkingShifts()
    {
        return $this->hasOne(WorkingShifts::class, ['id' => 'id']);
    }
}
