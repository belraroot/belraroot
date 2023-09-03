<?php return array(
    'root' => array(
        'name' => 'veerasaroot/codecomodo',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'codecomodo/framework' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'af25c13d7231b40bd80bc6f4d9dd2f6dda33438a',
            'type' => 'library',
            'install_path' => __DIR__ . '/../codecomodo/framework',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'veerasaroot/codecomodo' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
