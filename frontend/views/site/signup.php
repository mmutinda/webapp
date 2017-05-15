<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="">
    
<div class="col-md-offset-2">
    <p>Please fill out the following fields to signup:</p>
</div>
    <div class="row card">
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

                <?= $form->field($model, 'username')->textInput(['autofocus' => true,'required'=>'']) ?>

                <?= $form->field($model, 'email')->textInput(['required'=>'']) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="col-md-offset-6">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
