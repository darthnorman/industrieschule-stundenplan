<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

$TCA['tx_stundenplan_domain_model_product'] = array (
    'ctrl' => array (
        'title' => 'Stundenplan',
        'label' => 'name',
    ),
    'columns' => array(
    ),
    'types' => array(
    )
);

Tx_Extbase_Utility_Extension::registerPlugin(
    $_EXTKEY,
    'List',
    'Stundenplan'
);
