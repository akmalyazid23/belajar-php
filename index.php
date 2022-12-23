<?php
// 1.membuat koneksi mysql
$con = mysqli_connect("localhost","root","","fakultas");

//2. cek koneksi
if (mysqli_connect_errno()){
    echo "koneksi gagal" . mysqli_connect_error();
} else{
    echo "koneksi berhasil";
}

//3. membaca data dari data table mysql
$query = "SELECT * FROM mahasiswa";

//4. menampilkan data
$result = mysqli_query($con,$query);
$mahasiswa = [];
if ($result) {
    //tampilkan data satu-persatu
    while($row = mysqli_fetch_assoc($result)){
        $mahasiswa[] = $row; 
    }
    mysqli_free_result($result);
}

// tutup koneksi mysql
mysqli_close($con);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body> 
    <h1>Data Mahasiswa</h1>
    <table border="1" style="width:100%;">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>tempat lahir</th>
        <th>Alamat</th>
        <th>Action</th>
        
    </tr>
    <?php foreach($mahasiswa as $value): ?>
    <tr> 
        <td> <?php echo $value ["nim"]; ?></td>
        <td> <?php echo $value ["nama"]; ?></td>
        <td> <?php echo $value ["tempat_lahir"]; ?></td>
        <td> <?php echo $value ["alamat"]; ?></td>
        <td> <?php echo $value ["jenis_kelamin"]; ?></td>
        <td> <?php echo $value ["tanggal_lahir"]; ?></td>
        <td> Edit | Delete </td>
    </tr>
    <?php endforeach; ?>

    </table>
    
</body>
</html>