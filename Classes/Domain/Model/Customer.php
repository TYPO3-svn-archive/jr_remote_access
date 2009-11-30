<?php

/**
 * A Customer
 *
 * @scope prototype
 * @entity
 */
class Tx_JrRemoteAccess_Domain_Model_Customer extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * The customer name
	 *
	 * @var string
	 */
	protected $name;

	/**
	 * A description
	 *
	 * @var string
	 */
	protected $description;

	/**
	 * The api key
	 *
	 * @var string
	 */
	protected $apiKey;

	/**
	 * The access histories of this customer
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_JrRemoteAccess_Domain_Model_History>
	 * @lazy
	 * @cascade remove
	 */
	protected $histories;

	/**
	 * Constructs this customer
	 *
	 * @return
	 */
	public function __construct() {
		$this->histories = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Gets the name
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Gets the description
	 *
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Gets the apiKey
	 *
	 * @return string
	 */
	public function getApiKey() {
		return $this->apiKey;
	}

	/**
	 * Sets the apiKey
	 *
	 * @param string $apiKey
	 * @return void
	 */
	public function setApiKey($apiKey) {
		$this->apiKey = $apiKey;
	}

	/**
	 * Adds a history to this customer
	 *
	 * @param Tx_JrRemoteAccess_Domain_Model_History $history
	 * @return void
	 */
	public function addHistory(Tx_JrRemoteAccess_Domain_Model_History $history) {
		$this->histories->attach($history);
	}

	/**
	 * Removes a history from this customer
	 *
	 * @param Tx_JrRemoteAccess_Domain_Model_History $historyToRemove
	 * @return void
	 */
	public function removeHistory(Tx_JrRemoteAccess_Domain_Model_History $historyToRemove) {
		$this->histories->detach($historyToRemove);
	}

	/**
	 * Removes all histories from this customer
	 *
	 * @return void
	 */
	public function removeAllHistories() {
		$this->histories = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns all histories of this customer
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage
	 */
	public function getHistories() {
		return clone $this->histories;
	}

	/**
	 * Returns this customer as formatted string
	 *
	 * @return string
	 */
	public function __toString() {
		return 'Customer: ' . $this->uid . ': ' . $this->name;
	}

}

?>
