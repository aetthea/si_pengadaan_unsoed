<?php
require_once(realpath(dirname(__FILE__)) . '/Paket.php');
require_once(realpath(dirname(__FILE__)) . '/PP.php');
require_once(realpath(dirname(__FILE__)) . '/UnitKerja.php');

use Paket;
use PP;
use UnitKerja;

/**
 * @access public
 * @author aetthea
 */
class RUP {
	/**
	 * @AttributeType int
	 */
	private $_iD;
	/**
	 * @AttributeType string
	 */
	private $_kodeRUP;
	/**
	 * @AttributeType double
	 */
	private $_paguAnggaranRUP;
	private $_tahunAnggaran;
	/**
	 * @AttributeType string
	 */
	private $_namaPaket;
	/**
	 * @AttributeType Paket
	 * /**
	 *  * @AssociationType Paket
	 *  * @AssociationMultiplicity 0..*
	 *  * /
	 */
	public $_paket = array();
	/**
	 * @AttributeType PP
	 * /**
	 *  * @AssociationType PP
	 *  * @AssociationMultiplicity 1
	 *  * /
	 */
	public $_unnamed_PP_;
	/**
	 * @AttributeType UnitKerja
	 * /**
	 *  * @AssociationType UnitKerja
	 *  * /
	 */
	public $_unnamed_UnitKerja_;
}
?>