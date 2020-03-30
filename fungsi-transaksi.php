<?php
	function ambilBuku($kon) //fungsiambilbuku
	{
	    $sql = "SELECT id_buku, judul  FROM buku";
	    $res = mysqli_query($kon, $sql);
	    $data_buku = array();
	    while ($data = mysqli_fetch_assoc($res)) {
	        $data_buku[] = $data;
	    }


	    return $data_buku;
	}
	function ambilAnggota($kon) //fungsiambilanggota
	{
	    $sql = "SELECT id_anggota, nama  FROM anggota";
	    $res = mysqli_query($kon, $sql);

	    $data_anggota = array();


	    while ($data = mysqli_fetch_assoc($res)) {
	        $data_anggota[] = $data;
	    }


	    return $data_anggota;
	}
	function ambilPeminjaman($kon, $id_pinjam) //fungsiambilpeminjman
	{
	    $sql = "SELECT * FROM peminjaman INNER JOIN anggota ON peminjaman.id_anggota = anggota.id_anggota INNER JOIN buku ON peminjaman.id_buku = buku.id_buku
	WHERE id_pinjam = $id_pinjam";


	    $res = mysqli_query($kon, $sql);
	    $data = mysqli_fetch_assoc($res);



	    return $data;
	}
	function ambilStok($kon, $id_buku) //fungsiambilstok
	{
	    $sql = "SELECT stok FROM buku WHERE id_buku = $id_buku";
	    $res = mysqli_query($kon, $sql);
	    $data = mysqli_fetch_assoc($res);


	    return $data['stok'];
	}
	function cekPinjam($kon, $id_anggota) //fungsicekpinjam
	{
	    $sql = "SELECT * FROM peminjaman WHERE id_anggota = $id_anggota AND status = 'Dipinjam'";
	    $res = mysqli_query($kon, $sql);


	    $pinjam = mysqli_affected_rows($kon);


	    if($pinjam == 0)
	        return true;
	    else
	        return false;
	}
	function updateStok($kon, $id_buku, $stok_update) //fungsiupdatestok
	{
	    $sql = "UPDATE buku SET stok = $stok_update WHERE id_buku = $id_buku";
	    $res = mysqli_query($kon, $sql);
	}
	function hitungDenda($kon, $id_pinjam, $tgl_kembali) //fungsihitungdenda
	{
	    $denda = 0;


	    $sql = "SELECT tgl_jatuh_tempo FROM peminjaman WHERE id_pinjam = $id_pinjam";
	    $res = mysqli_query($kon, $sql);
	    $data = mysqli_fetch_assoc($res);
	    $tgl_jatuh_tempo = $data['tgl_jatuh_tempo'];


	    $hari_denda = (strtotime($tgl_kembali) - strtotime($tgl_jatuh_tempo))/60/60/24;


	    if($hari_denda >= 0)
	    {
	        $denda = $hari_denda * 1000;
	    }
	    return $denda;
	}
	?>
