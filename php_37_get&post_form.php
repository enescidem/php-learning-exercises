<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color:gray">
  
<form action="php_37_get&post_gonder.php" method="post">
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

</body>
</html>

