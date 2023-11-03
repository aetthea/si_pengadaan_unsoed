<?php
require_once(realpath(dirname(__FILE__)) . '/PP.php');
require_once(realpath(dirname(__FILE__)) . '/Paket.php');
require_once(realpath(dirname(__FILE__)) . '/Pelaksanaan Paket Pengadaan/Penawaran_HPS.php');

use PP;
use Paket;
use Pelaksanaan Paket Pengadaan\Penawaran_HPS;

/**
 * @access public
 * @author aetthea
 */
class rincian_HPS {
	/**
	 * @AttributeType int
	 */
	private $_iD;
	/**
	 * @AttributeType string
	 */
	private $_jenis_barang_jasa;
	/**
	 * @AttributeType string
	 */
	private $_satuan;
	/**
	 * @AttributeType float
	 */
	private $_volume;
	/**
	 * @AttributeType double
	 */
	private $_harga;
	/**
	 * @AttributeType string
	 */
	private $_keterangan;
	/**
	 * @AttributeType PP
	 * /**
	 *  * @AssociationType PP
	 *  * /
	 */
	public $_unnamed_PP_;
	/**
	 * @AttributeType Paket
	 * /**
	 *  * @AssociationType Paket
	 *  * @AssociationMultiplicity 1
	 *  * /
	 */
	public $_paket;
	/**
	 * @AttributeType Pelaksanaan Paket Pengadaan\Penawaran_HPS
	 * /**
	 *  * @AssociationType Pelaksanaan Paket Pengadaan\Penawaran_HPS
	 *  * @AssociationMultiplicity 0..*
	 *  * /
	 */
	public $_penawaran_HPS = array();
}
?>