<?php

/**
 * Extension Manager/Repository config file for ext "site_package".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Site Package',
    'description' => '',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '13.0.0-13.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Fab\\SitePackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
];
