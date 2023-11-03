<?php
require_once(realpath(dirname(__FILE__)) . '/Pelaku.php');
require_once(realpath(dirname(__FILE__)) . '/Pelaksanaan Paket Pengadaan/Peserta.php');
require_once(realpath(dirname(__FILE__)) . '/PP.php');
require_once(realpath(dirname(__FILE__)) . '/RUP.php');
require_once(realpath(dirname(__FILE__)) . '/rincian_HPS.php');
require_once(realpath(dirname(__FILE__)) . '/dok_persiapan_pengadaan.php');

use Pelaku;
use Pelaksanaan Paket Pengadaan\Peserta;
use PP;
use RUP;
use rincian_HPS;
use dok_persiapan_pengadaan;

/**
 * @access public
 * @author aetthea
 */
class Paket {
	/**
	 * @AttributeType int
	 */
	private $_iD;
	/**
	 * @AttributeType double
	 * nilai paguAnggaranPaket defaultnya sama dengan atau kruang dari (<=) paguAnggaran dalam RUP. Tetapi jika paket mengalami pemecahan maka nilai paguAnggaranPaket isinya merupakan nilai baru, tentunya lebih kecil sama dengan paguAnggaranPaket dari paket yang dipecahnya. Sebaliknya, jika paket-paket digabungkan maka nilai paguAnggaranPaket berisi nilai penjumlahan dari paket-paket yang digabungkannya.
	 */
	private $_paguAnggaranPaket;
	/**
	 * @AttributeType double
	 */
	private $_nilaiHPS;
	/**
	 * @AttributeType string
	 * namaPaket isinya sama dengan namaPaket di RUP, jika sebuah paket mengalami penggabungan atau pemecahan, maka namaPaket pada item pecahannya atau item hasil penggabungannya merupakan nama baru yang tidak ada dalam namaPaket di RUP.
	 */
	private $_namaPaket;
	/**
	 * @AttributeType int
	 */
	private $_kode_paket;
	/**
	 * @AttributeType Pelaku
	 * /**
	 *  * @AssociationType Pelaku
	 *  * @AssociationMultiplicity 0..*
	 *  * /
	 */
	public $_konsolidasi = array();
	/**
	 * @AttributeType Pelaku
	 * /**
	 *  * @AssociationType Pelaku
	 *  * @AssociationMultiplicity 0..*
	 *  * /
	 */
	public $_meluncurkan = array();
	/**
	 * @AttributeType Paket
	 * /**
	 *  * @AssociationType Paket
	 *  * @AssociationMultiplicity 0..*
	 *  * /
	 */
	public $_down = array();
	/**
	 * @AttributeType Paket
	 * /**
	 *  * @AssociationType Paket
	 *  * @AssociationMultiplicity 1..*
	 *  * /
	 */
	public $_up = array();
	/**
	 * @AttributeType Pelaku
	 * /**
	 *  * @AssociationType Pelaku
	 *  * @AssociationMultiplicity 1..*
	 *  * /
	 */
	public $_pelaku = array();
	/**
	 * @AttributeType Pelaksanaan Paket Pengadaan\Peserta
	 * /**
	 *  * @AssociationType Pelaksanaan Paket Pengadaan\Peserta
	 *  * @AssociationMultiplicity 0..*
	 *  * /
	 */
	public $_peserta = array();
	/**
	 * @AttributeType PP
	 * /**
	 *  * @AssociationType PP
	 *  * /
	 */
	public $_unnamed_PP_;
	/**
	 * @AttributeType RUP
	 * /**
	 *  * @AssociationType RUP
	 *  * @AssociationMultiplicity 1
	 *  * /
	 */
	public $_rUP;
	/**
	 * @AttributeType rincian_HPS
	 * /**
	 *  * @AssociationType rincian_HPS
	 *  * @AssociationMultiplicity 1..*
	 *  * /
	 */
	public $_rincian_HPS = array();
	/**
	 * @AttributeType dok_persiapan_pengadaan
	 * /**
	 *  * @AssociationType dok_persiapan_pengadaan
	 *  * @AssociationMultiplicity 1
	 *  * /
	 */
	public $_dpp;
}
?>