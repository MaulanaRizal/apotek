<?php

class M_admin extends CI_Model{
	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}
// ======================== Obat ==========================
	function inputObat($namaObat,$kodeObat,$kategori,$produsen,$distributor,$satuan,$hargaBeli,$harga,$stok,$masuk,$expired){
		$this->db->query("INSERT INTO `tbl_obat` (`id_obat`, `kategori`, `nama_obat`, `kode_obat`, `produsen`, `distributor`, `satuan`, `harga_beli`, `harga`, `stok`, `expired`, `tgl_masuk`) VALUES (NULL, '$namaObat', '$kategori', '$kodeObat', '$produsen', '$distributor', '$satuan', '$harga', '$hargaBeli', '$stok', '$expired', '$masuk')");
	}
	function getObat()
  {
  	$hasil = $this->db->query("SELECT * FROM `tbl_obat` ");
		return $hasil;
  }
	function deleteObat($value)
	{
		$this->db->query("DELETE FROM `tbl_obat` WHERE `tbl_obat`.`id_obat` = $value");
	}

	function getUpdateObat($value)
	{
		// code...
		$hasil = $this->db->query("SELECT * FROM `tbl_obat` WHERE id_obat=$value ");
		return $hasil;
	}

	function updateObat($id,$namaObat,$kodeObat,$kategori,$produsen,$distributor,$satuan,$hargaBeli,$harga,$stok,$masuk,$expired)
	{
		// code...
		$hasil = $this->db->query("UPDATE `tbl_obat` SET `id_obat` = '$id', `kategori` = '$kategori', `nama_obat` = '$namaObat ', `kode_obat` = '$kodeObat', `produsen` = '$produsen', `distributor` = '$distributor', `satuan` = '$satuan', `harga_beli` = '$hargaBeli', `harga` = '$harga', `stok` = '$stok', `expired` = '$expired', `tgl_masuk` = '$masuk' WHERE `tbl_obat`.`id_obat` = $id;");
		return $hasil;
	}

// ========================= Kategori =====================
function getKategori()
{
	// code...
	$hasil = $this->db->query("SELECT * FROM `tbl_kategori` ");
	return $hasil;
}
 function inputKategori($kategori)
 {
 	// code...
	$this->db->query("INSERT INTO `tbl_kategori` (`id_kategori`, `kategori`) VALUES (NULL, '$kategori');");
 }
 function deleteKategori($id)
 {
 	// code...
	$this->db->query("DELETE FROM `tbl_kategori` WHERE `tbl_kategori`.`id_kategori` = '$id'");
 }
 function getUpdateKategori($id)
 {
 	// code...
	$hasil = $this->db->query("SELECT * FROM `tbl_kategori` WHERE id_kategori=$id ");
	return $hasil;
 }
 function updateKategori($id,$kategori)
 {
 	// code...
	$this->db->query("UPDATE `tbl_kategori` SET `kategori` = '$kategori' WHERE `tbl_kategori`.`id_kategori` = $id;");
 }

 // =================== Transaksi ==========================

 function transaksi($id)
 {
 	// code...
	$hasil = $this->db->query("SELECT * FROM `tbl_obat` WHERE id_obat=$id ");
	return $hasil;
 }
function inputTransaksi($id,$namaObat,$kategori,$lokasi,$tanggal,$stok,$jumlah,$harga,$kodeObat)
{
	// code...
	$pengurangan = $stok - $jumlah;
	$this->db->query("UPDATE `tbl_obat` SET `stok` = '$pengurangan' WHERE `tbl_obat`.`id_obat` = $id;");
	$this->db->query("INSERT INTO `tbl_transaksi` (`id_transaksi`, `kategori`, `nama`, `lokasi`, `tanggal`, `jumlah`, `id_obat`, `kodeObat`, `harga`)
	VALUES (NULL, '$namaObat', '$kategori', '$lokasi', '$tanggal', '$jumlah', '$id', '$kodeObat', '$harga');");

}
function getTransaksi()
{
	// code...
	$hasil	=	$this->db->query("SELECT tbl_transaksi.*,tbl_obat.*
		FROM `tbl_transaksi`
		INNER JOIN tbl_obat
		WHERE tbl_transaksi.id_obat=tbl_obat.id_obat
		ORDER BY tanggal DESC
		");

	return $hasil;
}
function deleteTransaksi($id_transaksi)
{
	// code...

	$this->db->query("DELETE FROM `tbl_transaksi` WHERE `tbl_transaksi`.`id_transaksi` = $id_transaksi");
}

// ================================= User ====================
function getUser()
{
	// code...
	$hasil	=	$this->db->query("SELECT * FROM `tbl_akses` ");
	return $hasil;
}

function getCetak($)
{
	// code...
}
}
?>
