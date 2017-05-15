<?php
/* @var $this yii\web\View */

$this->title = 'My Application';
?>



<?php
if (!Yii::$app->user->isGuest) {
    ?>

<div class="page-header">

    <p>WELCOME <?= Yii::$app->user->identity->username; ?>        |    Today is <?= date('d-M-y')?><p> 
        
    </div>
    
  
    <div class="row">
        
                <div class="col-lg-3">

                    <p>Search</p>

                    <a href="<?php echo Yii::$app->urlManager->createUrl('profiles') ?>">
                    <i class="search icon huge"></i>
                        
                    </a>

                </div>

                <div class="col-lg-3">

                    <p>Access Control </p>

                    <a href="<?php echo Yii::$app->urlManager->createUrl('auth-assignment/index') ?>">
                        <img class="img-responsive" style="height:120px" src="<?= Yii::$app->urlManager->createUrl('assets/icons/computer.png') ?>" /></a>
                </div>
                <div class="col-lg-3">

                   <?php
                   echo 'You have this rights:';
                   echo'<ul>';
                   if(Yii::$app->user->can('ROLE-A')) {
                    echo '<li>ROLE-A</li>';
                }
                if(Yii::$app->user->can('ROLE-B')) {
                    echo '<li>ROLE-B</li>';
                }
                if(!Yii::$app->user->can('ROLE-A') && !Yii::$app->user->can('ROLE-B')) {
                    echo '<li>You have no rights yet,Click on the Access control icon to configure</li>';
                }
                   echo'</ul>';

                   ?>
                </div>
                
        
    </div>

    


<?php } else { ?>


    <div class="row">
        <div class="column">
            <div class="ui message">
                <h1 class="ui header">Hello, world!</h1>
                <p>This is a A web app that allows remote
users to look up debt status</p>
               
            </div>
        </div>
    </div>



<?php } ?>


