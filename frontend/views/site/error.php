<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="text-center">
    <div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="ui message negative">
        <i class="attention circle icon"></i>
        <div class="header">Error</div>
       
        <?= nl2br(Html::encode($message)) ?>
    </div>
<img src="<?php $imagedir = Yii::$app->imageurl->imageurl();$imagedir .= '/icons/security-system.png';echo $imagedir;?>" style="height: 200px"/>
    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>

</div>
    
</div>

