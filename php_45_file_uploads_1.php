<form action="php_45_file_uploads_2.php" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="mail" class="form-label">Kullanici mail: </label>
    <input type="email" class="form-control" id="mail" name="mail">
  </div>
    <div class="mb-3">
    <label for="file" class="form-label">Dosya yükle: </label>
    <input type="file" class="form-control" id="file" name="file">
  </div>
  <div class="mb-3">
    <label for="sifre" class="form-label">Sifre: </label>
    <input type="password" class="form-control" id="sifre" name="password">
  </div>
  <div class="mb-3 form-check">
  </div>
  <button type="reset" class="btn btn-primary">Iptal</button>
  <button type="submit" class="btn btn-primary">Gonder</button>
</form>