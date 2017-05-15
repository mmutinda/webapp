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


        <div class="pusher wrap">

           
                
            
            <div class="ui container">

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

            <h5 class="text-center">&copy; My Company <?= date('Y') ?>  | Michael | Mutinda</h5>

        </footer>

<?php $this->endBody() ?>
    </body>
    <script type="text/javascript">
        $('#menu-toggle').click(function () {
            $('.ui.sidebar').sidebar('toggle');
        });


        $(window).load(function () {


        });
        $(document).ready(function () {
           
            
            $('select').dropdown();
            $('.ui .dropdown').dropdown();
            $('.example .browse')
                    .popup({
                        on: 'click'
                    });
            //        swal({
            //          title: "Good Job !",
            //          text: "Success.",
            //          imageUrl: "/new/assets/icons/check.png"
            //        });
        });

    </script>
</html>
<?php $this->endPage() ?>
