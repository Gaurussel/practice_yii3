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
 * @property WorkingShift[] $workingShifts
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    public static function findByUsername($username)
    {
        return self::findOne(['username' => $username]);
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
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
        return null;
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
        return $this->hasMany(WorkingShift::class, ['user_id' => 'id']);
    }
}
