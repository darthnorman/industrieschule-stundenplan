<?php
$EM_CONF[$_EXTKEY] = array(
    'title' => 'Stundenplan',
    'description' => 'Anzeige der Stundenpläne, Templates, Dokumentation',
    'category' => 'plugin',
    'author' => 'Sebastian Fritze',
    'author_company' => '',
    'author_email' => '',
    'dependencies' => 'extbase,fluid',
    'state' => 'alpha',
    'clearCacheOnLoad' => '1',
    'version' => '0.0.1',
    'constraints' => array(
        'depends' => array(
            'typo3' => '6.2.0-6.2.99',
            'extbase' => '1.0.0-0.0.0',
            'fluid' => '1.0.0-0.0.0',
        )
    )
);

