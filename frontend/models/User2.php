<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $familyname
 * @property string $name
 * @property int $phonenumber
 * @property string $birthday
 * @property string $avatar
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class User2 extends \yii\db\ActiveRecord
{
    public $file;

    
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
            [['username', 'auth_key', 'password_hash', 'email', 'familyname', 'name', 'phonenumber', 'birthday', 'avatar'], 'required'],
            [['phonenumber', 'status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'birthday', 'avatar'], 'string', 'max' => 255],
            [['auth_key', 'familyname', 'name'], 'string', 'max' => 32],
            // [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
            [['file'],'file','extensions'=>'jpg,png,gif']
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
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'familyname' => 'Tên họ',
            'name' => 'Tên gọi',
            'phonenumber' => 'Số điện thoại',
            'birthday' => 'Ngày sinh',
            'avatar' => 'Ảnh đại diện',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }


    // public function addInformation($id)
    // {
    //     $model = new User2();

    //     $mode=  yii::$app->db->createCommand(

    //         "UPDATE user SET familyname='$this->familyname',name='$this->name',phonenumber='$this->phonenumber',birthday='$this->birthday'
    //          WHERE id=$id",

    //     )->execute();
    
    //     return $model;
    // }
  public function addInformation($id)
    {
        $model = new User2();

        $mode=  yii::$app->db->createCommand(

            "UPDATE user SET familyname='$this->familyname',name='$this->name',phonenumber='$this->phonenumber',birthday='$this->birthday',avatar='$this->avatar'
             WHERE id=$id",

        )->execute();
    
        return $model;
    }

}
