<?php
include "header.php";
?>
<div class="container2">
  <form method="post" action="input.php">


    <div class="form-group">
      <label for="foto">Foto</label>
      <div class="input"><input type="file" id="foto" name="foto"></div>
    </div>

    <div class="form-group">
      <label for="nama">Nama Lengkap</label>
      <div class="input"><input type="text" name="nama"></div>
    </div>

    <div class="form-group">
      <label for="alamat">Alamat</label>
      <div class="input"><input type="text" name="alamat"></div>
    </div>

    <div class="form-group">
      <label for="nohp">No Hp</label>
      <div class="input"><input type="text" name="no_hp"></div>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <div class="input"><input type="text" name="email"></div>
    </div>

    <div class="form-group">
      <label for="pendidikan">Pendidikan Terakhir</label>
      <div class="input"><input type="text" name="pendidikan"></div>
      <div class="input"><input type="submit" value="Daftar" class="tombol"> </div>
    </div>

    <div class="form-group">
      <label for=""></label>
    </div>


  </form>
</div>
<?php
include "footer.php";
?>