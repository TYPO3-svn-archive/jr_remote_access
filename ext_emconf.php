<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Base Extension to check remote access',
	'description' => 'Permits or denies access to different extensions',
	'category' => 'plugin',
	'author' => 'Joerg Schoppet',
	'author_email' => 'joerg(at)schoppet(dot)de',
	'shy' => '',
	'dependencies' => 'extbase',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.1',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.3dev-4.3.99',
			'extbase' => '0.0.0-0.0.0',
			'fluid' => '0.0.0-0.0.0',
		),
		'conflicts' => array(),
		'suggests' => array(),
	),
);

?>
