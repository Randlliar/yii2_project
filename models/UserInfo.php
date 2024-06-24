<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_info".
 *
 * @property string $id
 * @property string $first_name
 * @property string $last_name
 */
class UserInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'first_name', 'last_name'], 'required'],
            [['id'], 'string', 'max' => 36],
            [['first_name', 'last_name'], 'string', 'max' => 150],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
        ];
    }
}
