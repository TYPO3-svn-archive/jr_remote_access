<?php

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_jrremoteaccess_domain_model_history'] = array (
	'ctrl' => $GLOBALS['TCA']['tx_jrremoteaccess_domain_model_history']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'hidden,customer,access,ip_address,extension,additional_info',
		'maxDBListItems' => 50,
		'maxSingleDBListItems' => 50,
	),
	'feInterface' => $GLOBALS['TCA']['tx_jrremoteaccess_domain_model_history']['feInterface'],
	'columns' => array(
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
				'default' => '0',
			),
		),
		'customer' => array(
			'label' => 'LLL:EXT:jr_remote_access/Resources/Private/Language/locallang_db.xml:tx_jrremoteaccess_domain_model_customer',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_jrremoteaccess_domain_model_customer',
				'maxitems' => 1,
			),
		),
		'access' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:jr_remote_access/Resources/Private/Language/locallang_db.xml:tx_jrremoteaccess_domain_model_history.access',
			'config' => array(
				'type' => 'input',
				'size' => 8,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => '',
				'default' => '',
			),
		),
		'ip_address' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:jr_remote_access/Resources/Private/Language/locallang_db.xml:tx_jrremoteaccess_domain_model_history.ip_address',
			'config' => array(
				'type' => 'input',
				'size' => 20,
				'max' => 15,
				'eval' => 'trim',
			),
		),
		'extension' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:jr_remote_access/Resources/Private/Language/locallang_db.xml:tx_jrremoteaccess_domain_model_history.extension',
			'config' => array(
				'type' => 'input',
				'size' => 32,
				'max' => 32,
			),
		),
		'additional_info' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:jr_remote_access/Resources/Private/Language/locallang_db.xml:tx_jrremoteaccess_domain_model_history.additional_info',
			'config' => array(
				'type' => 'text',
				'rows' => 5,
				'cols' => 30,
			),
		),
	),
	'types' => array(
		'0' => array('showitem' => 'hidden;;1;;1-1-1, customer, access, ip_address, extension, additional_info'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
);

?>
