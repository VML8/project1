<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<div class="content-wrapper">

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Document</title>
</head>
<body>
<div class="container-fluid">
  <div class="d-flex justify-content-center pt-5"><h1><b>Kalkulator BMI</b></h1></div>
  <div class="container d-flex justify-content-center pt-4">
    <form class=" col-8" method="post" action="hasil_bmi.php">
      <div class="form-group row">
        <label for="nama" class="col-3 col-form-label text-right">Nama</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-address-card-o"></i>
              </div>
            </div> 
            <input id="nama" name="nama" placeholder="Masukan Nama Anda" type="text" required="required" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="tgl" class="col-3 col-form-label text-right">Tanggal Lahir</label> 
        <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calendar"></i>
          </div>
          </div> 
          <input id="tgl" name="tgl" placeholder="Masukan Tanggal Lahir anda" type="date" required="required" class="form-control">
        </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="tmpt" class="col-3 col-form-label text-right">Tempat Lahir</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-location-arrow"></i>
              </div>
            </div> 
            <input id="tmpt" name="tmpt" placeholder="Masukan Tempat Lahir Anda" type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-3 text-right">Jenis Kelamin</label> 
        <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
          <input name="kelamin" id="laki-laki" type="radio" class="custom-control-input" value="L" required="required"> 
          <label for="laki-laki" class="custom-control-label text-right">Laki-laki</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="kelamin" id="perempuan" type="radio" class="custom-control-input" value="P" required="required"> 
          <label for="perempuan" class="custom-control-label text-right">Perempuan</label>
        </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-3 col-form-label text-right">E-mail</label> 
        <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
          <div class="input-group-text">@</div>
          </div> 
          <input id="email" name="email" placeholder="Masukan Email Anda" type="email" required="required" class="form-control">
        </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="tb" class="col-3 col-form-label text-right">Tinggi Badan</label> 
        <div class="col-6">
        <div class="input-group">
          <input id="tb" name="tb" placeholder="Masukan Tinggi Badan Anda" type="number" min="0" required="required" class="form-control"> 
          <div class="input-group-append">
          <div class="input-group-text">cm</div>
          </div>
        </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="bb" class="col-3 col-form-label text-right">Berat Badan</label> 
        <div class="col-6">
        <div class="input-group">
          <input id="bb" name="bb" placeholder="Masukan Berat Badan Anda" type="number" min="0" required="required" class="form-control"> 
          <div class="input-group-append">
          <div class="input-group-text">kg</div>
          </div>
        </div>
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-3 col-auto">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>    

</body>
</html>

</div>

<?php
include_once 'footer.php';
?>