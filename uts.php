<html>
	<head>
		<title>UTS Pemrograman Web 2</title>
		
		
	</head>
	<body>
		<form method="get">
			<table rules="none" width="321">
			  <tbody>
			    <tr>
			      <td width="137">	Nama Wilayah :</td>
			      <td width="172"><select name="namaWilayah">
			        <option>Nama Wilayah</option>
			        <option value="DKI Jakarta">DKI Jakarta</option>
			        <option value="Jawa Barat">Jawa Barat</option>
			        <option value="Banten">Banten</option>
			        <option value="Jawa Tengah">Jawa Tengah</option>
		          </select></td>
		        </tr>
			    <tr>
			      <td>Jumlah Positif :</td>
			      <td><input type="text" name="jmlPositif"></td>
		        </tr>
			    <tr>
			      <td>Jumlah Dirawat :</td>
			      <td><input type="text" name="jmlDirawat"></td>
		        </tr>
			    <tr>
			      <td>Jumlah Sembuh :</td>
			      <td><input type="text" name="jmlSembuh"></td>
		        </tr>
			    <tr>
			      <td>Jumlah Meninggal :</td>
			      <td><input type="text" name="jmlMeninggal"></td>
		        </tr>
			    <tr>
			      <td>Nama Operator :</td>
			      <td><input type="text" name="nama"></td>
		        </tr>
			    <tr>
			      <td>NIM Mahasiswa :</td>
			      <td><input type="text" name="nim"></td>
		        </tr>
				  
		      </tbody>
		  </table>
			<br>
			<input type="submit">
		</form><br><br><br><br>
		<center><h1>Data Pemantauan COVID19 Wilayah <?php echo $_GET['namaWilayah']; ?> <br>
		<?php $dt = new DateTime('now', new DateTimezone('Asia/Jakarta')); ?>
		Per <?php echo $dt->format("d-F-y H:i:s"); ?> <br>
		<?php echo $_GET['nama']; ?> 
		<?php echo $_GET['nim']; ?>
		<table rules="all" width="500" border="">
			<tr>
				<th width="50">Positif</th>
				<th width="50">Dirawat</th>
				<th width="50">Sembuh</th>
				<th width="50">Meninggal</th>
			</tr>
			<tr>
				<th><?php echo $_GET['jmlPositif']; ?></th>
				<th><?php echo $_GET['jmlDirawat']; ?></th>
				<th><?php echo $_GET['jmlSembuh']; ?></th>
				<th><?php echo $_GET['jmlMeninggal']; ?></th>
			</tr>
		</table></h1></center>
		<?php
			if(isset($_GET['nama']))
			{
				$namaWilayah=$_GET['namaWilayah'];
				$jmlPositif=$_GET['jmlPositif'];
				$jmlDirawat=$_GET['jmlDirawat'];
				$jmlSembuh=$_GET['jmlSembuh'];
				$jmlMeninggal=$_GET['jmlMeninggal'];
				$nama=$_GET['nama'];
				$nim=$_GET['nim'];
				$fp = fopen('data.txt', 'a');
				fwrite($fp, $namaWilayah);
				fwrite($fp, $jmlPositif);
				fwrite($fp, $jmlDirawat);
				fwrite($fp, $jmlSembuh);
				fwrite($fp, $jmlMeninggal);
				fwrite($fp, $nama);
				fwrite($fp, $nim);
				fclose($fp);
			}
		?>
	</body>
</html>