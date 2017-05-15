<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\assets\AppAsset;



$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title . ' the Programmer';
?>
<div class="container">
<div class="ui fullscreen demo teal button">Launch form for Sending Email Message</div>
<div class="ui modal" style="margin-top: 0px;height: 300px">
    <i class="close icon"></i>


        <div class="header">Send Email Notifications</div>
        <div class="content">
            
             sfsfsfs

        </div>
        <div class="actions">
            <div class="ui button">Start</div>
        </div>
        
       
    
</div>

    <div class="ui success message">
        <div class="header">
            <p>This web app is developed by Michael Mutinda  @ HOPE IT SOLUTIONS</p></div>
        <p>Email :mutindamike@gmail.com</p>
        <p>0716630770</p>
    </div>

    <div class="col-md-3 col-md-offset-4">
        <div class="ui segment">
            <div class="ui active dimmer">
                <div class="ui  text loader">Loading.....</div>

            </div>
            <br/>
            <br/>
        </div>
        
    </div>

    <form>
        <fieldset>
            <legend>Items</legend>
            Name  : <input type="text" name="name">
            Email : <input type="text" name="email">

        </fieldset>
        <fieldset>
            <legend>Items</legend>
            Name  : <input type="text" name="name">
            Email : <input type="text" name="email">
            
        </fieldset>
    </form>

   
        <menu>
        <command type="command" label="save" onclick="save()" ></menu>
        </menu>
   
</div>
