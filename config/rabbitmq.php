<?php
return [
    # 连接信息
    'AMQP' => [
        'host' => '127.0.0.1',
        'port'=>'5672',
        'login'=>'guest',
        'password'=>'guest',
        'vhost'=>'/'
    ],
    # 邮件队列
    'email_queue' => [
        'exchange_name' => 'email_exchange',
        'exchange_type'=>'direct',#直连模式
        'queue_name' => 'email_queue',
        'route_key' => 'email_roteking',
        'consumer_tag' => 'consumer'
    ]
];
