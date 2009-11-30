<?php

class Tx_JrRemoteAccess_Domain_Service_HistoryService {

	/**
	 * @var Tx_JrRemoteAccess_Domain_Repository_CustomerRepository
	 */
	protected $customerRepository;

	/**
	 * Initialize Service
	 */
	public function __construct() {
		$this->customerRepository = t3lib_div::makeInstance('Tx_JrRemoteAccess_Domain_Repository_CustomerRepository');
	}

	/**
	 * Save a history-entry for a customer
	 *
	 * @param string $username
	 * @param int $pid
	 * @return void
	 */
	public function save($username, $pid) {
		$customer = $this->customerRepository->findOneByName($username);

		if (isset($customer)) {
			$history = t3lib_div::makeInstance('Tx_JrRemoteAccess_Domain_Model_History');
			$history->setPid($pid);
			$history->setAccess(new DateTime());
			$history->setIpAddress(t3lib_div::getIndpEnv('REMOTE_ADDR'));
			$history->setCustomer($customer);
			$customer->addHistory($history);
		}

	}

}

?>
