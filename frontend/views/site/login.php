<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
   
    <div class="col-md-offset-2">
    <p>Please fill out the following fields to login:</p>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin([
      'layout' => 'horizontal',
      'fieldConfig' => [
          'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
          'horizontalCssClasses' => [
              'label' => 'col-sm-4',
              'offset' => 'col-sm-offset-4',
              'wrapper' => 'col-sm-8',
             'error' => '',
              'hint' => '',
          ],
      ],
  ]); ?>
            <div class="has-feedback">
                <?= $form->field($model, 'username')->textInput(['autofocus' => true,'required'=>'']) ?>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="has-feedback">
                <?= $form->field($model, 'password')->passwordInput(['required'=>'']) ?>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <div class="col-md-offset-4">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                </div>

                <div class="col-sm-10 col-md-offset-6">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<?php
$this->registerJs(" 
    $(function(){
   // alert('Some');
    });
        ");?>