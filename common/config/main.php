<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'name' => 'smartMeeting',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
    ],
];
