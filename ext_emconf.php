<?php
$EM_CONF['form_extended'] = [
    'title' => 'Form Extended',
    'description' => 'Multi upload field, double opt in, tag select field and other',
    'category' => 'misc',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'author' => 'Sven Wappler',
    'author_email' => 'typo3YYYY@wappler.systems',
    'author_company' => 'WapplerSystems',
    'version' => '12.2.1',
    'constraints' => [
        'depends' => [
            'typo3' => '12.0.0-12.4.99',
            'form' => '12.0.0-12.4.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
