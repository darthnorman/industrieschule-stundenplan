<?php
$EM_CONF[$_EXTKEY] = array(
    'title' => 'Stundenplan',
    'description' => 'Anzeige der Stundenpläne',
    'category' => 'plugin',
    'author' => 'Sebastian Fritze',
    'author_company' => '',
    'author_email' => '',
    'dependencies' => 'extbase,fluid',
    'state' => 'alpha',
    'clearCacheOnLoad' => '1',
    'version' => '0.0.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '4.3.0-6.2.9',
            'extbase' => '1.0.0-0.0.0',
            'fluid' => '1.0.0-0.0.0',
        )
    )
);

