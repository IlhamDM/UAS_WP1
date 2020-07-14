<?php
include "header.php";
?>
<title>Perusahaan</title>
<div class="container2">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Nama Perusahaan</th>
        <th scope="col">Alamat</th>
	      <th scope="col">Posisi</th>
	      <th scope="col">Opsi</th>
      </tr>
	      <?php 
		      include 'koneksi.php';
		      $perusahaan = mysqli_query($koneksi,"SELECT * FROM perusahaan");
	      	$no = 1;		
	      	while($d = mysqli_fetch_array($perusahaan)){
		  	?>
    </thead>
      <tbody>
        <tr>
          <th scope="row"><?php echo $no++; ?></th>
          <td><?php echo $d['nama']; ?></td>
          <td><?php echo $d['alamat']; ?></td>
	        <td><?php echo $d['butuh']; ?></td>
          <td> <a href="daftar.php?id=<?php echo $d['id']; ?>">Daftar</a> </td>
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