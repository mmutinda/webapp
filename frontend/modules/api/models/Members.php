<?php

namespace frontend\modules\api\models;

use Yii;

/**
 * This is the model class for table "members".
 *
 * @property integer $cust_no
 * @property integer $cust_Idno
 * @property integer $credit_status_code
 * @property integer $bf_credit_status_code
 * @property string $cust_F_Name
 * @property string $cust_M_Name
 * @property string $cust_L_Name
 * @property string $cust_Email_Address
 * @property string $cust_Telephone
 * @property string $cust_Mpesa_Telephone
 * @property string $c_Gender
 * @property string $c_Helb_Staffno
 * @property string $c_Registered_Status
 * @property string $c_Marital_Status
 * @property string $official_status
 */
class Members extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'members';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cust_Idno', 'cust_F_Name', 'cust_M_Name', 'cust_L_Name', 'cust_Email_Address', 'cust_Telephone', 'cust_Mpesa_Telephone', 'c_Gender', 'c_Helb_Staffno', 'c_Registered_Status', 'c_Marital_Status'], 'required'],
            [['cust_Idno', 'credit_status_code', 'bf_credit_status_code'], 'integer'],
            [['c_Gender', 'c_Registered_Status', 'c_Marital_Status', 'official_status'], 'string'],
            [['cust_F_Name', 'cust_M_Name', 'cust_L_Name'], 'string', 'max' => 64],
            [['cust_Email_Address'], 'string', 'max' => 128],
            [['cust_Telephone', 'cust_Mpesa_Telephone'], 'string', 'max' => 20],
            [['c_Helb_Staffno'], 'string', 'max' => 10],
            [['cust_Idno'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cust_no' => 'Cust No',
            'cust_Idno' => 'Cust  Idno',
            'credit_status_code' => 'Credit Status Code',
            'bf_credit_status_code' => 'Bf Credit Status Code',
            'cust_F_Name' => 'Cust  F  Name',
            'cust_M_Name' => 'Cust  M  Name',
            'cust_L_Name' => 'Cust  L  Name',
            'cust_Email_Address' => 'Cust  Email  Address',
            'cust_Telephone' => 'Cust  Telephone',
            'cust_Mpesa_Telephone' => 'Cust  Mpesa  Telephone',
            'c_Gender' => 'C  Gender',
            'c_Helb_Staffno' => 'C  Helb  Staffno',
            'c_Registered_Status' => 'C  Registered  Status',
            'c_Marital_Status' => 'C  Marital  Status',
            'official_status' => 'Official Status',
        ];
    }
}
