<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Unlock the ctype of content elements in translations',
    'description' => 'Since v13, the ctype of content elements is locked in translations. This extension removes this lock.',
    'author' => 'Michael Stein (mxsteini)',
    'author_email' => 'info@michaelstein-itb.de',
    'author_company' => 'Michael Stein IT-Beratung',
    'state' => 'stable',
    'version' => '0.0.7',
    'constraints' => [
        'depends' => [
          'php' => '8.2.0-8.5.99',
          'typo3' => '13.4.0-14.3.99',
          'frontend' => '13.4.0-14.3.99',
        ],
    ],
];
