<?php

return [
    'homepage' => [
        'path' => '/',
        'method' => 'get',
        'action' => 'Index::index'
    ],
    
    'posts' => [
        'path' => '/posts',
        'method' => 'get',
        'action' => 'Index::posts',
        'params' => [
            'id' => '[0-9]+'
        ]
    ],

    'post' => [
        'path' => '/posts/:id',
        'method' => 'get',
        'action' => 'Index::post',
        'params' => [
            'id' => '[0-9]+'
        ]
    ]
];