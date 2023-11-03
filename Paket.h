#ifndef PAKET_H
#define PAKET_H

class Paket {

private:
	std::vector<Paket> up;
	std::vector<Pelaku> konsolidasi;
	std::vector<Paket> down;
	RUP rUP;
	int ID;
	std::vector<Pelaku> meluncurkan;
	std::vector<Pelaku> pelaku;
	std::vector<rincian_HPS> rincian_HPS;
	dok_persiapan_pengadaan dpp;
	/**
	 * nilai paguAnggaranPaket defaultnya sama dengan atau kruang dari (<=) paguAnggaran dalam RUP. Tetapi jika paket mengalami pemecahan maka nilai paguAnggaranPaket isinya merupakan nilai baru, tentunya lebih kecil sama dengan paguAnggaranPaket dari paket yang dipecahnya. Sebaliknya, jika paket-paket digabungkan maka nilai paguAnggaranPaket berisi nilai penjumlahan dari paket-paket yang digabungkannya.
	 */
	double PaguAnggaranPaket;
	double nilaiHPS;
	/**
	 * namaPaket isinya sama dengan namaPaket di RUP, jika sebuah paket mengalami penggabungan atau pemecahan, maka namaPaket pada item pecahannya atau item hasil penggabungannya merupakan nama baru yang tidak ada dalam namaPaket di RUP.
	 */
	string namaPaket;
	int kode_paket;
};

#endif
