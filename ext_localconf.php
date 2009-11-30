<?php

if (!defined ('TYPO3_MODE')) {
 	die ('Access denied.');
}

/**
Tx_Extbase_Utility_Extension::configurePlugin(
	'ZefuegDealer',
	'Pi1',
	array(
		'Region' => 'index,show',
	),
	array(
		'Region' => 'index,show',
	)
);
**/

t3lib_extMgm::addUserTSConfig('
	options.saveDocNew.tx_jrremoteaccess_domain_model_customer=1
');
t3lib_extMgm::addUserTSConfig('
	options.saveDocNew.tx_jrremoteaccess_domain_model_history=1
');

?>
