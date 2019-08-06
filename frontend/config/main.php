<?php

use \yii\web\Request;

$request = new Request();
$baseUrl = str_replace('/frontend/web', '', $request->baseUrl);


$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'google' => [
                    'class' => 'yii\authclient\clients\Google',
                    'clientId' => 'google_client_id',
                    'clientSecret' => 'google_client_secret',
                ],
                'facebook' => [
                    'class' => 'yii\authclient\clients\Facebook',
                    'clientId' => '539835336551272',
                    'clientSecret' => '6f617b92e39c23ffe3c5bb775692bf4b',
                ],
                // etc.
            ],
        ],

        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'request' => [
            'baseUrl' => $baseUrl,
        ],
        'urlManager' => [
            'baseUrl' => $baseUrl,     
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' =>  'site/index',
                'gioi-thieu' => 'site/about',
                'lien-lac' => 'site/contact',
                'dang-ki' => 'site/signup',
                'dang-nhap' => 'site/login'
            ],
        ],
        
    ],
    'params' => $params,
];
