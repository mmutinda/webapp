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
        <link rel="icon" type="image/png" href="<?= Yii::$app->urlManager->createUrl('assets/img/favicon.png') ?>">    
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width" />
        <?= Html::csrfMetaTags() ?>
        <title>E-Sacco ::</title>
        <?php $this->head() ?>
       

    </head>
    <body style="background-color: white" ng-app="">
        <?php $this->beginBody() ?>

        
        <div class="wrap">



            <div class="ui labeled icon fluid borderlass main stackable inverted green menu" style="border-radius:0px;margin-bottom: 0px">
<?php
if (!Yii::$app->user->isGuest) {
    ?> 
                   
<?php } ?>
                <a class="item" href="<?= Yii::$app->urlManager->createUrl('site/index') ?>">
                    <i class="dashboard icon"></i>HOME
                    
                </a>
                 <a class="item" href="<?= Yii::$app->urlManager->createUrl('profiles') ?>">
                    <i class="search icon"></i>SEARCH
                    
                </a>



<?php
if (Yii::$app->user->isGuest) {
    ?> 
                    <div class="item">
                        <i class="signup icon"></i>
                        <a href="<?= Yii::$app->urlManager->createUrl('auth/register') ?>" class="ui button green large">Register</a>
                    </div>
                    <div class="item">
                        <i class="privacy icon"></i>
                        <a href="<?= Yii::$app->urlManager->createUrl('auth/login') ?>"  class="ui button teal large">Login</a>
                    </div>
<?php } else { ?>
                    


                    <div class="item">
                        <i class="sign out icon"></i>
                        <?=
                        Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                                ' Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'ui button']
                        )
                        . Html::endForm()
                        ;
                        ?>
                    </div>
<?php } ?>
            </div> 


            <div class="container">

                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
<?= Alert::widget() ?>
<?= $content ?>
            </div>


        </div>

        <footer class="footer">

            <div class="container col-lg-12 col-md-12 col-xs-12 no-padding text-center">
        <div class="pull-right hidden-xs">
          <!--b>Version</b> 3.0 -->
        </div>
        <strong><?= Yii::t('app', 'Copyright') ?> &copy; <?= date('Y') ?> Michael Mutinda 0716630770.</strong> 
      </div>

        </footer>

<?php $this->endBody() ?>
    </body>
    <script type="text/javascript">
        
        $('#menu-toggle').click(function () {
            $('.ui.sidebar').sidebar('toggle');
        });


       
        $(document).on({
            ajaxStart: function(){
                //do something
            },
            ajaxStop: function(){
                //do something else
            }
        });

    </script>
</html>
<?php $this->endPage() ?>
