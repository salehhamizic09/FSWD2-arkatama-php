<!DOCTYPE html>
<html>
<head>
	<title>Biodata Diri</title>
	<link rel="stylesheet" href="../folder_tugas/asset/css/style.css">
</head>
<body>
	<?php
		$nama = "Tegar Saleh Hamizic";
		$tempat_lahir = "Solok";
		$tanggal_lahir = "14 September 2002";
		$jenis_kelamin = "Laki-laki";
		$alamat = "Perumahan Beliung Indah Atas No. 123, Jambi";
		$hobby = "Bersantai dan membaca";
		$sekolah = array(
			array("nama" => "SMA Adhyaksa 1 Jambi", "tahun" => "2017-2020"),
			array("nama" => "Universitas Dinamika Bangsa", "jurusan" => "Teknik Informatika", "tahun" => "2020-sekarang")			
		);
	?>

	<h1>Biodata Diri</h1>
	<div class="container">
		<img src="../folder_tugas/asset/img/foto.png" alt="Foto">
		<div class="row">
			<div class="col-2">
				<p><strong>Nama:</strong> <?php echo $nama; ?></p>
				<p><strong>TTL:</strong> <?php echo $tempat_lahir . ", " . $tanggal_lahir; ?></p>
				<p><strong>Jenis Kelamin:</strong> <?php echo $jenis_kelamin; ?></p>
				<p><strong>Alamat:</strong> <?php echo $alamat; ?></p>
				<p><strong>Hobby:</strong> <?php echo $hobby; ?></p>
			</div>
			<div class="col-2">
				<p><strong>Riwayat Pendidikan:</strong></p>
				<ul>
					<?php
						foreach ($sekolah as $key => $value) {
							echo "<li>" . $value["nama"];
							if (isset($value["jurusan"])) {
								echo ", " . $value["jurusan"];
							}
							echo " (" . $value["tahun"] . ")</li>";
						}
					?>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
