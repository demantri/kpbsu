<?php 
class simpanan_model extends CI_model
{
	
	public function getDetails($id_peternak)
	{
		# code...

		$sql = "
		SELECT detail_pembelian_bb.no_trans, jumlah, harga, subtotal, detail_pembelian_bb.no_peternak, nama_peternak, tgl_trans
		FROM detail_pembelian_bb
		JOIN peternak ON peternak.no_peternak = detail_pembelian_bb.no_peternak
		JOIN pembelian_bb ON pembelian_bb.no_trans = detail_pembelian_bb.no_trans
		WHERE detail_pembelian_bb.no_peternak = '$id_peternak'
		";
		return $this->db->query($sql);
	}

	public function anggota($id_peternak)
	{
		# code...
		$sql = "
		SELECT no_peternak, nama_peternak
		FROM `peternak`
		WHERE no_peternak = '$id_peternak'
		";
		return $this->db->query($sql);
	}

	public function detailHr($id_peternak)
	{
		# code...

		$sql = "
		SELECT kode_simpanan_hr, tgl_simpanan, nama_peternak, nominal
		FROM log_simpanan_hr
		JOIN peternak ON peternak.no_peternak = log_simpanan_hr.id_anggota
		WHERE log_simpanan_hr.id_anggota = '$id_peternak'
		";
		return $this->db->query($sql);
	}
	
}