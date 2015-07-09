<?php
/***********************************************************************
* Extension Manager/Repository config file for ext "stundenplan".
*
*
* Manual updates:
* Only the data in the array - everything else is removed by next
* writing. "version" and "dependencies" must not be touched!
**********************************************************************/
$EM_CONF[$_EXTKEY] = array(
	'title' => 'Stundenplan',
	'description' => 'Anzeige der Stundenpläne, Templates, Dokumentation',
	'category' => 'plugin',
	'author' => 'ITF13C Team Industrieschule Chemnitz',
	'author_email' => '',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => 'top',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.3',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-6.2.99',
			'extbase' => '1.0.0-0.0.0',
            'fluid' => '1.0.0-0.0.0',
		),
		'conflicts' => array(),
		'suggests' => array()
	),
	'suggests' => array(),
	'_md5_values_when_last_written' => '',
);