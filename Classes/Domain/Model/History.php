<?php

/**
 * A History
 *
 * @scope prototype
 * @entity
 */
class Tx_JrRemoteAccess_Domain_Model_History extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * The pid
	 *
	 * @var int
	 */
	protected $pid;

	/**
	 * The Access time
	 *
	 * @var DateTime
	 */
	protected $access;

	/**
	 * The ip address
	 *
	 * @var string
	 */
	protected $ipAddress;

	/**
	 * The Customer
	 *
	 * @var Tx_JrRemoteAccess_Domain_Model_Customer
	 */
	protected $customer;

	/**
	 * Constructs this history
	 *
	 * @return
	 */
	public function __construct() {
		$this->access = new DateTime();
	}

	/**
	 * Sets the pid
	 *
	 * @param int $pid
	 * @return void
	 */
	public function setPid($pid) {
		$this->pid = $pid;
	}

	/**
	 * Sets the access time
	 *
	 * @param datetime $access
	 * @return void
	 */
	public function setAccess(DateTime $access) {
		$this->access = $access;
	}

	/**
	 * Gets the access time
	 *
	 * @return datetime
	 */
	public function getAccess() {
		return $this->access;
	}

	/**
	 * Sets the ip address
	 *
	 * @param string $ipAddress
	 * @return void
	 */
	public function setIpAddress($ipAddress) {
		$this->ipAddress = $ipAddress;
	}

	/**
	 * Gets the ip address
	 *
	 * @return string
	 */
	public function getIpAddress() {
		return $this->ipAddress;
	}

	/**
	 * Sets the customer
	 *
	 * @param Tx_JrRemoteAccess_Domain_Model_Customer $customer
	 * @return void
	 */
	public function setCustomer($customer) {
		$this->customer = $customer;
	}

	/**
	 * Gets the customer
	 *
	 * @return Tx_JrRemoteAccess_Domain_Model_Customer
	 */
	public function getCustomer() {
		return $this->customer;
	}

	/**
	 * Returns this history as formatted string
	 *
	 * @return string
	 */
	public function __toString() {
		return 'History: ' . $this->uid . ': ' . $this->customer;
	}

}

?>
