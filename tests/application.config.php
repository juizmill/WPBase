<?php

return array(
    'loader_paths' => array(
        'WPBaseTest' => __DIR__ . '/../tests' // replace this with your test module if not included in autoloading
    ),
    'modules' => array(
        'SpiffyTest' // replace this with your own module list
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            __DIR__.'/config/autoload/{,*.}{global,local}.php',
        ),
        'module_paths' => array(
            'module',
            'vendor',
        ),
    ),
    'service_manager' => array(

    ),
);
