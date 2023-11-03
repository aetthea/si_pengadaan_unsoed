<?php
require_once(realpath(dirname(__FILE__)) . '/Paket.php');
require_once(realpath(dirname(__FILE__)) . '/RUP.php');
require_once(realpath(dirname(__FILE__)) . '/rincian_HPS.php');
require_once(realpath(dirname(__FILE__)) . '/Spek.php');

use Paket;
use RUP;
use rincian_HPS;
use Spek;

/**
 * @access public
 * @author aetthea
 */
class PP {
	/**
	 * @AttributeType int
	 */
	private $_iD;
	/**
	 * @AttributeType Integer
	 */
	private $_dok_pengadaan;
	/**
	 * @AttributeType Integer
	 */
	private $_hargaBypagu;
	/**
	 * @AttributeType Integer
	 */
	private $_hPS;
	/**
	 * @AttributeType Paket
	 * /**
	 *  * @AssociationType Paket
	 *  * /
	 */
	public $_unnamed_Paket_;
	/**
	 * @AttributeType RUP
	 * /**
	 *  * @AssociationType RUP
	 *  * @AssociationMultiplicity 1
	 *  * /
	 */
	public $_unnamed_RUP_;
	/**
	 * @AttributeType rincian_HPS
	 * /**
	 *  * @AssociationType rincian_HPS
	 *  * @AssociationKind Composition
	 *  * /
	 */
	public $_unnamed_rincian_HPS_;
	/**
	 * @AttributeType Spek
	 * /**
	 *  * @AssociationType Spek
	 *  * @AssociationKind Composition
	 *  * /
	 */
	public $_unnamed_Spek_;
}
?>