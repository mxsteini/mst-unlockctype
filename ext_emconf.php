<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Unlock the ctype of content elements in translations',
    'description' => 'In v13, the ctype of content elements is locked in translations. This extension removes this lock.',
    'author' => 'Michael Stein (mxsteini)',
    'author_email' => 'info@michaelstein-itb.de',
    'author_company' => 'Michael Stein IT-Beratung',
    'state' => 'stable',
    'version' => '0.0.4',
    'constraints' => [
        'depends' => [
          'typo3' => '13.4.0-13.4.99'
        ],
    ],
];
