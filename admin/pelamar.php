<?php
include "header.php";
?>

<div class="container2" align="center">
	<table class="table">
		<thead>
			<tr>
				<th scope="col">No.</th>
				<th scope="col">Foto</th>
				<th scope="col">Nama Lengkap</th>
				<th scope="col">Alamat</th>
				<th scope="col">No Hp</th>
				<th scope="col">Email</th>
				<th scope="col">Pendidikan Terakhir</th>
			</tr>
			<?php
			include 'koneksi.php';
			$daftar = mysqli_query($koneksi, "SELECT * FROM daftar");
			$no = 1;
			while ($d = mysqli_fetch_array($daftar)) {
			?>
		</thead>
		<tbody>
			<tr>
				<th scope="row"><?php echo $no++; ?></th>
				<td><img src="img/<?= $d['foto'] ?>" width="50"></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['no_hp']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['pendidikan']; ?></td>
				<td>
					<a href="edit2.php?id=<?php echo $d['id']; ?>">Update</a>
					<a href="delete2.php?id=<?php echo $d['id']; ?>">Delete</a>
				</td>
			</tr>
		<?php
			}
		?>
		</tbody>
	</table>
</div>

<?php
include "footer.php";
?>