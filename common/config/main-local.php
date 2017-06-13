<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=gitgame',
            'username' => 'root',
            'password' => 'mot2passe',
            'charset' => 'utf8',
        ],
        'mailer' => [
                'class' => 'yii\swiftmailer\Mailer',
                'viewPath' => '@common/mail',
                'useFileTransport' => false,
                'transport' => [
                 'class' => 'Swift_SmtpTransport',
                 'host' => 'smtp.gmail.com',
                 'username' => 'lesanglierdesardennes@gmail.com',
                 'password' => 'mot2passe',
                 'port' => '587',
                 'encryption' => 'tls',
             ],  
        ], 
    ],
    'bootstrap' => ['gii'],
    'modules' => [
        'gii' => 'yii\gii\Module',
    ],  
];
