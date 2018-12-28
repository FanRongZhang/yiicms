<?php
return [
    'timeZone' => 'Asia/Shanghai',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    // the "log" component must be loaded during bootstrapping time
    'bootstrap' => ['log'],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'errorHandler' => [
            'class' => 'app\services\ErrorService',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                //"<controller:\w+>/<id:\d+>"=>"<controller>/view",
                //"<controller:\w+>/<action:\w+>"=>"<controller>/<action>"
            ],
        ],
        //https://www.yiiframework.com/doc/guide/2.0/zh-cn/runtime-logging
        'log' => [
            'targets' => [
                'db' => [
                    'class' => 'yii\log\DbTarget',
                    'levels' => ['error'],
                    'enabled' => function(){return true;}
                ],
                'email' => [
                    'class' => 'yii\log\EmailTarget',
                    'levels' => ['error'],
                    'categories' => ['yii\db\*'],
                    'message' => [
                        'from' => ['log@example.com'],
                        'to' => ['admin@example.com', 'developer@example.com'],
                        'subject' => 'Database errors at example.com',
                    ],
                    'enabled' => function(){return false;}
                ],
            ],
        ],

    ],
];
