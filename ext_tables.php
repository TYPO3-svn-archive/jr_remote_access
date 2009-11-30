<?php

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	'JrRemoteAccess',
	'Pi1',
	'Jr Remote Access'
);

t3lib_extMgm::addStaticFile(
	$_EXTKEY,
	'Configuration/TypoScript',
	'Jr Remote Access'
);

$GLOBALS['TCA']['tx_jrremoteaccess_domain_model_customer'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:jr_remote_access/Resources/Private/Language/locallang_db.xml:tx_jrremoteaccess_domain_model_customer',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'default_sortby' => 'ORDER BY name',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'Configuration/TCA/tca_tx_jrremoteaccess_domain_model_customer.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY).'Resources/Public/Images/icon_tx_jrremoteaccess_domain_model_customer.gif',
	),
);

$GLOBALS['TCA']['tx_jrremoteaccess_domain_model_history'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:jr_remote_access/Resources/Private/Language/locallang_db.xml:tx_jrremoteaccess_domain_model_history',
		'label' => 'access',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'default_sortby' => 'ORDER BY customer,access',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca_tx_jrremoteaccess_domain_model_history.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Images/icon_tx_jrremoteaccess_domain_model_history.gif',
	),
);

?>
