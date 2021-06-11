<?php
$baseDir = dirname(dirname(__FILE__));

return [
    'plugins' => [
        'Awallef/Cache' => $baseDir . '/vendor/awallef/cakephp-cache/',
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'Kerox/Push' => $baseDir . '/vendor/ker0x/cakephp-push/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/',
        'WyriHaximus/TwigView' => $baseDir . '/vendor/wyrihaximus/twig-view/',
    ],
];
