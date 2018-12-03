<?php
	$nim = $_GET['nim'];
	include'config.php';

	$db = new database();

	foreach ($db->searchMahasiswa($nim) as $nim) {
?>
		<tr>
			<td style="padding-left: 5px;"><?php echo $nim['nim']; ?></td>
			<td style="padding-left: 5px;"><?php echo $nim['nama'];?></td>
		</tr>
<?php
	}
	
?>