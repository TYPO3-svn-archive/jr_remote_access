<?php

class Tx_JrRemoteAccess_Domain_Service_AuthenticationService {

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
	 * Authenticates against the userbase
	 *
	 * @param string $username
	 * @param string $apiKey
	 * @return boolean
	 */
	public function authenticate($username, $apiKey) {
		$result = FALSE;
		$customer = $this->customerRepository->findOneByName($username);

		if (isset($customer)) {

			if ($apiKey == $customer->getApiKey()) {
				$result = TRUE;
			}

		}

		return $result;
	}

}

?>
