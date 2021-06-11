<?php

return [
    'Awallef.cache.settings' => [
        'default' => 'default', // default cache config to use if not set in rules...
    ],
    'Awallef.cache.rules' => [
        // cache request
        [
            'cache' => 'default', // default: 'default', can be a fct($request)
            'skip' => false, // default: false, can be a fct($request)
            'clear' => false, // default: false, can be a fct($request)
            'compress' => true, // default: false, can be a fct($request)
            //'key' => 'whatEver',// default is fct($request) => return $request->here()
            'method' => ['GET'],
            'code' => '200', // must be set or '*' !!!!!
            'prefix' => '*',
            'plugin' => '*',
            'controller' => '*',
            'action' => '*',
            'extension' => '*'
        ],
        // clear request
        [
            'cache' => 'default', // default: 'default'
            'skip' => false, // default: false
            'clear' => true, // default: false,
            'key' => '*', // * => Cache::clear(false, cache) (Will clear all keys), 'whatEver' => Cache::delete('whatEver', cache), null => Cache::delete($request->here(), cache)
            'method' => ['POST', 'PUT', 'DELETE'],
            'code' => ['200', '201', '202', '302'], // 302 is often triggered by cakephp in case of success crud operation...
            'prefix' => '*',
            'plugin' => '*',
            'controller' => '*',
            'action' => '*',
            'extension' => '*'
        ],
    ]
];
