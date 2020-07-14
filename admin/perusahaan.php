<?php
include "header.php";
?>

<div class="container2" align="center">
    <table class="table">
      <thead>
        <a href="insert.php">INSERT DATA</a>
        <p></p>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Nama Perusahaan</th>
          <th scope="col">Alamat</th>
	        <th scope="col">Posisi</th>
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
          <td>
		        <a href="edit.php?id=<?php echo $d['id']; ?>">Update</a>
		        <a href="delete.php?id=<?php echo $d['id']; ?>"> Delete</a>
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