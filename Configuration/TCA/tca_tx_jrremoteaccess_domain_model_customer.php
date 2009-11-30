<?php

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_jrremoteaccess_domain_model_customer'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_jrremoteaccess_domain_model_customer']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'hidden,name,description,api_key,histories',
		'maxDBListItems' => 50,
		'maxSingleDBListItems' => 50,
	),
	'feInterface' => $GLOBALS['TCA']['tx_jrremoteaccess_domain_model_customer']['feInterface'],
	'columns' => array(
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
				'default' => '0',
			),
		),
		'name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:jr_remote_access/Resources/Private/Language/locallang_db.xml:tx_jrremoteaccess_domain_model_customer.name',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'max' => '200',
				'eval' => 'required,trim',
			),
		),
        'description' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:jr_remote_access/Resources/Private/Language/locallang_db.xml:tx_jrremoteaccess_domain_model_customer.description',
            'config' => array(
                'type' => 'text',
                'cols' => 30,
                'rows' => 5,
            ),
        ),
		'api_key' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:jr_remote_access/Resources/Private/Language/locallang_db.xml:tx_jrremoteaccess_domain_model_customer.api_key',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'max' => '64',
				'eval' => 'required,trim',
			),
		),
		'histories' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:jr_remote_access/Resources/Private/Language/locallang_db.xml:tx_jrremoteaccess_domain_model_history',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_jrremoteaccess_domain_model_history',
				'appearance' => array(
					'collapseAll' => TRUE,
					'expandSingle' => TRUE,
					'newRecordLinkAddTitle' => TRUE,
					'newRecordLinkPosition' => 'top',
				),
				'foreign_field' => 'customer',
			),
		),
	),
	'types' => array(
		'0' => array('showitem' => 'hidden;;1;;1-1-1, name, description, api_key, histories'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
);

?>
