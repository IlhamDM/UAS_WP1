<?php
include "header.php";
?>

<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "select * from daftar where id='$id'");
while ($d = mysqli_fetch_array($data)) {
?>
  <form method="post" action="update2.php">
    <div class="container2">
      <div class="card-body">


        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <div class="input"><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></div>
        </div>

        <div class="form-group">
          <label for="alamat">Alamat</label>
          <div class="input"><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></div>
        </div>

        <div class="form-group">
          <label for="nohp">No Hp</label>
          <div class="input"><input type="text" name="no_hp" value="<?php echo $d['no_hp']; ?>"></div>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <div class="input"><input type="text" name="email" value="<?php echo $d['email']; ?>"></div>
        </div>

        <div class="form-group">
          <label for="id">Foto</label>
          <div class="input">
            <input type="file" id="foto" name="foto">
          </div>
        </div>

        <div class="form-group">
          <label for="pendidikan">Pendidikan Terakhir</label>
          <div class="input"><input type="text" name="pendidikan" value="<?php echo $d['pendidikan']; ?>"></div>
          <div class="input"><input type="submit" value="Update" class="tombol"> </div>
        </div>

        <div class="form-group">
          <label for=""></label>
        </div>
      <?php
    }
      ?>
      </div>
  </form>
  <br>
  <?php
  include "footer.php";
  ?>