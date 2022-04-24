<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>0110121058</title>
</head>
<body>

<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<div class="content-wrapper">
  <?php
    $ns1 = ['id'=>1,'nim'=>'01104','uts'=>82,'uas'=>98,'tugas'=>80];
    $ns2 = ['id'=>2,'nim'=>'01101','uts'=>81,'uas'=>58,'tugas'=>90];
    $ns3 = ['id'=>3,'nim'=>'01102','uts'=>70,'uas'=>94,'tugas'=>80];
    $ns4 = ['id'=>4,'nim'=>'01103','uts'=>99,'uas'=>93,'tugas'=>90];

    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
  ?>

  <h3 class="text-center m-5">DAFTAR NILAI SISWA</h3>

  <table class="table table-hover">
    <thead>
      <tr class="text-center">
        <th>No</th><th>NIM</th><th>UTS</th>
        <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
      </tr>
    </thead>

    <tbody class="text-center">
      <?php
      $nomor = 1;
      foreach($ar_nilai as $ns){
        echo '<tr><td>'.$nomor.'</td>';
        echo '<td>'.$ns['nim'].'</td>';
        echo '<td>'.$ns['uts'].'</td>';
        echo '<td>'.$ns['uas'].'</td>';
        echo '<td>'.$ns['tugas'].'</td>';
        $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
        echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
        echo '<tr/>';
        $nomor++;
      }
      ?>
    </tbody>
</table>
</div>

</body>
</html>
<?php
include_once 'footer.php';
?>