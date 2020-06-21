<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 Examples for Custom Placeholders',
    'description' => '',
    'category' => 'examples',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'SusanneMoog\\Cupla\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Susanne Moog',
    'author_email' => 'code@susi.dev',
    'author_company' => 'Susanne Moog',
    'version' => '1.0.0',
];
