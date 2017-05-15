<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'api' => [
            'class' => 'frontend\modules\api\Api',
        ],
        'user' => [
            'class' => 'dektrium\user\Module',
//             'mailer' => [
//            'class' => 'Swift_SmtpTransport',
//            'host' => 'smtp.gmail.com',
//            'username' => 'mutindamike@gmail.com',
//            'password' => 'MikeIT1234',
//            'port' => '587',
//            'encryption' => 'tls',
//        ],
            'mailer' => [
                'sender' => ['no-reply@myhost.com' => 'Sender name'],
                'welcomeSubject' => 'Welcome subject',
                'confirmationSubject' => 'Confirmation subject',
                'reconfirmationSubject' => 'Email change subject',
                'recoverySubject' => 'Recovery subject',
            ],
            'enableUnconfirmedLogin' => true,
            'cost' => 13,
            'confirmWithin'=>86400,
            'enablePasswordRecovery'=>true,
            'urlPrefix'=>'auth',
            'admins'=>['admin'],
            'recoverWithin'=>21600,
            'rememberFor'=>1209600,
            'adminPermission'=>'admin',
            
            
        ],
        'gridview' => [
            'class' => '\kartik\grid\Module'
        // enter optional module parameters below - only if you need to  
        // use your own export download action or custom translation 
        // message source
        // 'downloadAction' => 'gridview/export/download',
        // 'i18n' => []
        ]
    ],
    'components' => [
        'imageurl'=>[
          'class' =>'frontend\components\imageurl',  
        ],
        'request' => [
            'parsers'=>[
              'application/json'=>'yii\web\JsonParser',  
            ],
            'csrfParam' => '_csrf-frontend',
            'class' => 'common\components\Request',
            'web' => '/frontend/web'
        ],
//        'user' => [
//            'identityClass' => 'common\models\User',
//            'enableAutoLogin' => true,
//            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
//        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend-ssid-helb-sacco',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'authClientCollection' => [
            'class' => \yii\authclient\Collection::className(),
//            'clients' => [
//                'facebook' => [
//                    'class' => 'dektrium\user\clients\Facebook',
//                    'authUrl' => 'https://www.facebook.com/dialog/oauth?display=popup',
//                    'clientId' => '861515487315799',
//                    'clientSecret' => '38605e944c95ec99e2688f9c65f7d1ee',
//                ],
//                'yandex' => [
//                    'class' => 'dektrium\user\clients\LinkedIn',
//                    'clientId' => '78adjtxr9xeyd0',
//                    'clientSecret' => 'd0g8ZmWYgMWgSbA3'
//                ],
//                'google'=>[
//                  'class'=>'dektrium\user\clients\Google',
//                    'clientId'=>'client_id',
//                    'clientSecret'=>'client_secret',
//                ],
//                 'twitter'=>[
//                    'class'=>'\dektrium\user\clients\Twitter',
//                    'consumerKey'=>'jkshjk',
//                    'consumerSecret'=>'jsjhds',
//                ],
//                'github'=>[
//                    'class'=>'\dektrium\user\clients\Github',
//                    'clientId'=>'client_id',
//                    'clientSecret'=>'client_secret',
//                    ],
//            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['admin'],
        ],
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                ['class'=> 'yii\rest\UrlRule', 'controller'=>'Membersspi'],
            ],
        ],
        
    ],
    'as beforeRequest'=>[
      'class'=>'frontend\components\CheckIfLoggedIn',  
    ],
    'params' => $params,
];
