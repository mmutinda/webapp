<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
     <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">    
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
   
</head>
<body>
<?php $this->beginBody() ?>

<div class="ui left sidebar inverted vertical menu">
    <a href="#" class="item"> HOME</a>
    <a href="#" class="item"> LOANS</a>
    <a href="#" class="item"> SAVINGS</a>
    <a href="#" class="item"> REPORTS</a>
    <a href="#" class="item"> EXMAS</a>
    
</div>

<div class="pusher wrap">
    <div class=""><!--warp-->
<div class="ui pointing menu">
    
    <div class="item">
        <img src="/new/assets/icons/check.png" style="height: 20px"/>
    </div>
    <?php
    if (!Yii::$app->user->isGuest) {
        ?> 
       <a id="menu-toggle" class="item">
        <i class="sidebar icon"></i>
         
    </a>
    
    <?php } ?>
    <div class="item">
        <a href="<?=Yii::$app->urlManager->createUrl('site/index')?>">Home</a>
    </div>
    <div class="item">
        <a href="<?=Yii::$app->urlManager->createUrl('site/about')?>">About</a>
    </div>
    <div class="item">
        <a href="<?=Yii::$app->urlManager->createUrl('site/contact')?>">Contact Us</a>
    </div>
    <?php
    if (Yii::$app->user->isGuest) {
        ?> 
    <div class="item right">
        <a href="<?=Yii::$app->urlManager->createUrl('auth/register')?>">Register</a>
    </div>
    <div class="item right">
        <a href="<?=Yii::$app->urlManager->createUrl('auth/login')?>">Login</a>
    </div>
        <?php } else{ ?>
        <div class="item">
        <a href="<?=Yii::$app->urlManager->createUrl('user/settings/profile')?>">Profile</a>
    </div>
    <div class="item">
        <a href="<?=Yii::$app->urlManager->createUrl('tbl-students/index')?>">Students</a>
    </div>
    <div class="item right">
        <?= 
        Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                '<span class="glyphicon glyphicon-log-out" style="font-size:20px"></span> Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
        ;?>
    </div>
        <?php } ?>
</div>


    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
</div>
<footer class="footer">
    <div class="container">
         <p class="text-center">&copy; My Company <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
<script type="text/javascript">
    $('#menu-toggle').click(function(){
        $('.ui.sidebar').sidebar('toggle');
    });
         
    
    $('#login-form-id').click(function(){
       $(this).addClass('card'); 
       $('#sign-up-form').removeClass('card'); 
    });
    $('#sign-up-form').click(function(){
       $(this).addClass('card'); 
       $('#login-form-id').removeClass('card'); 
    });
   
     $(document).ready(function(){
        

//        swal({
//          title: "Good Job !",
//          text: "Success.",
//          imageUrl: "/new/assets/icons/check.png"
//        });
     }); 
    
</script>
</html>
<?php $this->endPage() ?>
