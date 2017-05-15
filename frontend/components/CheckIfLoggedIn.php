<?php

namespace frontend\components;
use yii\helpers\Url;

class CheckIfLoggedIn extends \yii\base\Behavior{
    
    public function events() {
        return [
        \yii\web\Application::EVENT_BEFORE_REQUEST =>'CheckIfLoggedIn',
                ];
    }
    public function CheckIfLoggedIn() {
        if(\Yii::$app->user->isGuest){
            
        }  
      
    }
}