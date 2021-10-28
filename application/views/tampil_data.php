<html> 
<head> 
	<title>Tampil Data</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>desain/css/style.css">
</head> 
<body> 
	<center> 
		<h1>Data Transaksi</hl>
	</center> 
	<table style="margin:20px auto;" border="1"> 
	<table style="margin:20px auto;" border="1" id="tampilantabel">
	<tr> 
		<th>No</th>
		<th>Nama</th>
		<th>No HP</th>
		<th>Harga Sepatu</th>
		<th>Ukuran Sepatu</th>
		<th>Action</th>
	</tr> 
	<?php 
	$no = 1;
	foreach($transaksi as $u){
	?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $u->nama ?></td>
		<td><?php echo $u->nohp ?></td>
		<td><?php echo $u->harga ?></td>
		<td><?php echo $u->ukuran ?></td>
		<td>
			<?php echo anchor('toko/hapus/'.$u->id, 'Hapus'); ?>
		</td>
	</tr>
	<?php } ?>
	</table>
		<center><?php echo anchor('toko/tambah','<input type=button value=\'Tambah Data\'>'); ?></center>
</body> 
</html> 
