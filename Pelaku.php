<?php
require_once(realpath(dirname(__FILE__)) . '/Paket.php');

use Paket;

/**
 * @access public
 * @author aetthea
 */
class Pelaku {
	/**
	 * @AttributeType int
	 */
	private $_iD;
	/**
	 * @AttributeType string
	 */
	private $_jenisPelaku;
	/**
	 * @AttributeType string
	 */
	private $_nomorsk;
	/**
	 * @AttributeType int
	 */
	private $_tahunsk;
	/**
	 * @AttributeType string
	 */
	private $_deskripsiPelaku;
	/**
	 * @AttributeType Paket
	 * /**
	 *  * @AssociationType Paket
	 *  * @AssociationMultiplicity 1..*
	 *  * /
	 */
	public $_paket = array();
}
?>