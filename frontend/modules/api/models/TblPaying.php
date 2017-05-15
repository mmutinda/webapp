<?php

namespace frontend\modules\api\models;

use Yii;

/**
 * This is the model class for table "tbl_paying".
 *
 * @property integer $P_Transaction_ID_PK
 * @property string $P_Transaction_Date
 * @property integer $P_Claim_Id_FK
 * @property integer $P_Cust_No_FK
 * @property integer $P_Product_Id_FK
 * @property string $P_Amount
 * @property string $usercharge
 * @property string $P_Captured_By
 * @property string $P_Captured_Date
 * @property string $P_Pay_Type
 * @property integer $tr_charges
 * @property double $balance
 * @property string $bfloanref
 */
class TblPaying extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_paying';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['P_Transaction_Date', 'P_Claim_Id_FK', 'P_Cust_No_FK', 'P_Product_Id_FK', 'P_Amount', 'usercharge', 'P_Captured_By', 'P_Pay_Type', 'tr_charges', 'balance'], 'required'],
            [['P_Transaction_Date', 'P_Captured_Date'], 'safe'],
            [['P_Claim_Id_FK', 'P_Cust_No_FK', 'P_Product_Id_FK', 'tr_charges'], 'integer'],
            [['P_Pay_Type'], 'string'],
            [['balance'], 'number'],
            [['P_Amount', 'P_Captured_By'], 'string', 'max' => 128],
            [['usercharge'], 'string', 'max' => 10],
            [['bfloanref'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'P_Transaction_ID_PK' => 'P  Transaction  Id  Pk',
            'P_Transaction_Date' => 'P  Transaction  Date',
            'P_Claim_Id_FK' => 'P  Claim  Id  Fk',
            'P_Cust_No_FK' => 'P  Cust  No  Fk',
            'P_Product_Id_FK' => 'P  Product  Id  Fk',
            'P_Amount' => 'P  Amount',
            'usercharge' => 'Usercharge',
            'P_Captured_By' => 'P  Captured  By',
            'P_Captured_Date' => 'P  Captured  Date',
            'P_Pay_Type' => 'P  Pay  Type',
            'tr_charges' => 'Tr Charges',
            'balance' => 'Balance',
            'bfloanref' => 'Bfloanref',
        ];
    }
}
