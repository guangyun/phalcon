<?php

/**
 * Register application modules
 */
$application->registerModules(array(
    'frontend' => array(
        'className' => 'Store\Frontend\Module',
        'path' => __DIR__ . '/../apps/frontend/Module.php'
    ),
    'admin' => array(
        'className' => 'Store\Admin\Module',
        'path' => __DIR__ . '/../apps/admin/Module.php'
    )
)
);
