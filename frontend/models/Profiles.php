<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profiles".
 *
 * @property string $id
 * @property string $national_id
 * @property string $phone_number
 * @property string $debt_status
 * @property string $created_at
 * @property string $updated_at
 */
class Profiles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profiles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['national_id', 'phone_number', 'debt_status'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['national_id', 'phone_number', 'debt_status'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'national_id' => 'National ID',
            'phone_number' => 'Phone Number',
            'debt_status' => 'Debt Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
