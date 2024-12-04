<?php
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);

	// variabel pecahkan 1 = tanggal
	// variabel pecahkan 0 = bulan
	// variabel pecahkan 2 = tahun

	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

h2 {
    text-align: center;
}

h5 {
    font-family: "verdana";
}

.container {
    display: flex;
    justify-content: center;
    background-color: red;
}

.text {
    
}

img {
    
    padding-right: 28px;
   
}
</style>
</head>
<body>
<div class="container">
        <img src="<?= base_url('assets/img/logo.png'); ?>" width="90" height="90" alt="" />
        <div class="text">
            <h2 style="margin-bottom:-10px;">CV Hamta Makmur Sejahtera</h2>
            <center><p style="margin-bottom:-14px;">Purwakarta,, Jawa Barat</p></center>
            <center><p>Purwakarta,, Jawa Barat</p></center>
        </div>
</div>

<hr>

<h2 style="padding-left:30px;">Laporan Stok Barang Keluar</h2>
<table class="table" id="dtHorizontalExample" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>No.Transaksi</th>
                                <th>Tgl Keluar</th>
                                <th>Nama Barang</th>
                                <th>Qty</th>
                                <th>Delivery</th>
                                <th>Customer</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            <?php $no=1; foreach ($bk as $bk): ?>
                            <tr>
                                <td><?= $no++ ?>.</td>
                                <td><?= $bk->id_barang_keluar ?></td>
                                <td><?= tgl_indo($bk->tgl_keluar) ?></td>
                                <td><?= $bk->nama_barang ?></td>
                                <td><span class="badge badge-danger"> <i class="fa fa-minus"></i> <?= $bk->jumlah_keluar ?></span></td>
                                <td><?= $bk->delivery ?></td>
                                <td><?= $bk->customer ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
<script type="text/javascript">
        window.print();
    </script>
</body>
</html>