<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use frontend\assets\AppAsset;

$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
/* @var $this yii\web\View */
/* @var $searchModel app\models\TblPayingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
AppAsset::register($this);

$this->title = 'Debt Look Up';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profiles-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Profiles', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php if(Yii::$app->user->can('ROLE-B')) :?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'exportConfig' => [
        GridView::EXCEL => ['label' => 'Save as EXCEL',],
        ],
        'columns' => [
             ['class' => 'kartik\grid\SerialColumn'],

           
            'national_id',
            'phone_number',
            'debt_status',
            'created_at',
            // 'updated_at',

            
        ],
        
         'panel' => [
        'heading'=>'<h3 class="panel-title">DEBT STATUS </h3>',
        'type'=>'primary',
        'footer'=>false,

    ],

    ]); ?>
</div>
<?php else: ?>
    You can only search by National ID or Phone Number...To download get rights from Homepage
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'exportConfig' => [
        GridView::EXCEL => ['label' => 'Save as EXCEL',],
        ],
        'columns' => [
             ['class' => 'kartik\grid\SerialColumn'],

           
            'national_id',
            'phone_number',
            'debt_status',
            'created_at',
            // 'updated_at',

            
        ],
        
        
    ]); ?>
</div>
<?php endif; ?>
