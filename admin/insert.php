<?php
include "header.php";
?>
<title>Lowongan Kerja</title>
<form method="post" action="input.php">
<div class="container2">
    <div class="form-group">
      <label for="no">No</label>
    </div>
    <div class="form-group">
      <label for="nama">Nama Perusahaan</label>   
      <div class="input"><input type="text" name="nama"></div> 
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>   
      <div class="input"><input type="text" name="alamat"></div> 
    </div>
    <div class="form-group">
      <label for="butuh">Posisi</label>   
      <div class="input"><input type="text" name="butuh"></div> 
    </div>
    <div class="form-group">
      <label for=""></label>   
      <div class="input"><input type="submit" value="Save" class="tombol"> </div>
    </div>
    <div class="form-group">
      <label for=""></label>   
    </div>
</div>
</form>
<?php
include "footer.php";
?>