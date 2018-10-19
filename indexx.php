<html>
<head>
  <title>Menampilkan data dari database ke dalam bentuk tabel</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div class="container">
    <h2><center>DATA PESERTA</center></h2>
    <table class=" table table-bordered table-hovered" align="center">
  <tr>
    <th>id</th>
    <th>username</th>
    <th>password</th>
    <th>level</th>
    <th>fullname</th>
  </tr></div>
  <?php
  include('koneksi.php');
  $sql_tampil ="SELECT * FROM tabel_kk4";
  $peserta=mysqli_query($conn,$sql_tampil);
  while($baris_data=mysqli_fetch_array($peserta,MYSQLI_ASSOC)){
    echo'
    </tr>
      <td>'.$baris_data['id'].'</td>
      <td>'.$baris_data['username'].'</td>
      <td>'.$baris_data['password'].'</td>
      <td>'.$baris_data['level'].'</td>
      <td>'.$baris_data['fullname'].'</td>
    </tr>';
  }
  ?>
</body>
</html>