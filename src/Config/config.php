<?php

$projectDir = realpath(dirname(__FILE__) . '/../../');
$authDir = $projectDir . '/src/Common/Authentication';
$commonDir = $projectDir . '/src/Common';
$controllersDir = $projectDir . '/src/Controllers';
$configDir = $projectDir . '/src/Config';
$httpDir = $projectDir . '/src/Common/Http';
$routerDir = $projectDir . '/src/Common/Routers';
$srcDir = $projectDir . '/src';
$viewsDir = $projectDir . '/src/Views';

$config = [
        'dir'          => [
            'authentication' => $authDir,
            'common'         => $commonDir,
            'controllers'    => $controllersDir,
            'config'         => $configDir,
            'http'           => $httpDir,
            'routers'        => $routerDir,
            'src'            => $srcDir,
            'views'          => $viewsDir
        ]
];
