<html> 
<head> 
	<title>Input Data Transaksi</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>desain/css/style.css">
</head> 
<body> 
	<center> 
		<h1>Input Data Transaksi</hl>
		<label style="color:#FF0000"><?php echo validation_errors(); ?></label>
	</center>
	<form action="<?php echo base_url(). 'index.php/toko/tambah_aksi'; ?>" method="post" enctype="multipart/form-data"> 
		<table style="margin:20px auto;"> 
		<tr> 
			<td>Nama</td> 
			<td><input type="text" name="nama"></td> 
		</tr> 
		<tr> 
			<td>No HP</td> 
			<td><input type="text" name="nohp"></td> 
		</tr> 
		<tr> 
			<td><label for="harga">Pilih Merk Sepatu:</label></td> 
			<td>
			<select name="harga" id="harga">
					<option value="375000">Nike      (Rp. 375000)</option>
					<option value="300000">Adidas    (Rp. 300000)</option>
					<option value="250000">Kickers   (Rp. 250000)</option>
					<option value="275000">Eiger     (Rp. 275000)</option>
					<option value="400000">Bucherri  (Rp. 400000)</option>
			</select>
			</td> 
		</tr> 
		<tr> 
			<td><label for="ukuran">Pilih Ukuran Sepatu:</label></td> 
			<td>
			<select name="ukuran" id="ukuran">
					<option>32</option>
					<option>33</option>
					<option>34</option>
					<option>35</option>
					<option>36</option>
					<option>37</option>
					<option>38</option>
					<option>39</option>
					<option>40</option>
					<option>41</option>
					<option>42</option>
					<option>43</option>
					<option>44</option>
			</select>
			</td> 
		</tr>
		<tr> 
			<td></td> 
			<td><input type="submit" value="Tambah"> <input type="reset" value="Batal"> <?php echo anchor('toko/index','<input type=button value=Kembali>'); ?></td> 
		</tr> 
		</table> 
	</form> 
</body> 
</html> 
