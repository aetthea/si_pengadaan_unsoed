#ifndef HPS_H
#define HPS_H

class rincian_HPS {

private:
	int ID;
	Paket paket;
	std::vector<Pelaksanaan_Paket_Pengadaan::Penawaran_HPS> penawaran_HPS;
	string jenis_barang_jasa;
	string satuan;
	float volume;
	double harga;
	string keterangan;
};

#endif
