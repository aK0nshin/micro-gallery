<?php

return new \Phalcon\Config(array(

    'database' => array(
        'adapter'    => 'Mysql',
        'host'       => 'localhost',
        'username'   => 'root',
        'password'   => '',
        'dbname'     => 'micro_gallery',
    ),

    'application' => array(
        'modelsDir'      => APP_PATH . '/models/',
        'viewsDir'       => APP_PATH . '/../views/',
        'compiledPath'      => APP_PATH . '/cache/', // for cache html files
        'cacheLength'      => 172800, // 2 days
        'baseUri'        => '/',
    )
));
