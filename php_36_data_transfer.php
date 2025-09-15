<form action="php_36_data_transfer.php" method="post">
  <div class="mb-3">
    <label for="mail" class="form-label">Kullanici mail: </label>
    <input type="email" class="form-control" id="mail" name="mail">
  </div>
  <div class="mb-3">
    <label for="sifre" class="form-label">Sifre: </label>
    <input type="password" class="form-control" id="sifre" name="sifre">
  </div>
  <div class="mb-3 form-check">
  </div>
  <button type="reset" class="btn btn-primary">Iptal</button>
  <button type="submit" class="btn btn-primary">Gonder</button>
</form>

<?php
if($_POST){
$mail=$_POST["mail"];
$sif=$_POST["sifre"];
echo "mail = ".$mail."<br/> sifre = ".$sif;
}

?>