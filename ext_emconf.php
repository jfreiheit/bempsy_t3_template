<?php

/**
 * Extension Manager/Repository config file for ext "bempsy_template".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'BEMpsy Template',
    'description' => 'BEMpsy',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.2.0-10.4.99',
            'fluid_styled_content' => '10.2.0-10.4.99',
            'rte_ckeditor' => '10.2.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'UniversityOfAppliedSciencesBerlin\\BempsyTemplate\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Jörn Freiheit',
    'author_email' => 'freiheit@htw-berlin.de',
    'author_company' => 'University of Applied Sciences Berlin',
    'version' => '1.0.1',
];
