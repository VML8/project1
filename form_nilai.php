<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<div class="content-wrapper">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="w-75">
<form method="POST" action="nilai_siswa.php" class="m-3">
  <div class="form-group row">
    <label for="nama_siswa" class="col-6 col-form-label text-right">Nama</label> 
    <div class="col-6">
      <input id="nama_siswa" name="nama_siswa" placeholder="Nama Lengkap" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-6 col-form-label text-right">Mata Kuliah</label> 
    <div class="col-6">
      <select id="matkul" name="matkul" required="required" class="custom-select" aria-describedby="matkulHelpBlock">
        <option value="DDP">Dasar-Dasar Pemrograman</option>
        <option value="BDI">Basis Data I</option>
        <option value="WEB1">Pemrograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-6 col-form-label text-right">Nilai UTS</label> 
    <div class="col-6">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-6 col-form-label text-right">Nilai UAS</label> 
    <div class="col-6">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-6 col-form-label text-right">Nilai Tugas/Praktikum</label> 
    <div class="col-6">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-6 col-6">
      <!-- <button name="submit" type="submit" class="btn btn-primary">Submit</button> -->
      <input type="submit" value="Simpan" name="proses"/>
    </div>
  </div>
</form>
</div>

</div>

<?php
include_once 'footer.php';
?>