<?php

    // 1.membuat koneksi mysql
    $con = mysqli_connect("localhost", "root", "", "fakultas");

    //2. cek koneksi
    if (mysqli_connect_errno()) {
        echo "koneksi gagal" . mysqli_connect_error();
    } else {
        echo "koneksi berhasil";
    }



//3. membaca data dari data table mysql
$query = "SELECT * FROM mahasiswa WHERE id=2";

//4. menampilkan data
$result = mysqli_query($con,$query);
$mahasiswa = [];
if ($result) {
    //tampilkan data satu-persatu
    while($row = mysqli_fetch_assoc($result)){
        $mahasiswa = $row;         
    }
    mysqli_free_result($result);
}

// tutup koneksi mysql
mysqli_close($con);

//tangkap data dari form submit 
if (isset($_POST["submit"])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $id_jurusan = $_POST['id_jurusan'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    // 1.membuat koneksi mysql
    $con = mysqli_connect("localhost", "root", "", "fakultas");

    //2. cek koneksi
    if (mysqli_connect_errno()) {
        echo "koneksi gagal" . mysqli_connect_error();
    } else {
        echo "koneksi berhasil";
    }
    $sql = "UPDATE mahasiswa SET nim='$nim',nama='$nama',id_jurusan='$id_jurusan',tempat_lahir='$tempat_lahir',
    tanggal_lahir='$tanggal_lahir',alamat='$alamat' WHERE id=2";

    if (mysqli_query($con,$sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
}
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Mahasiswa</title>
</head>
<body>
<h1>Update Data Mahasiswa</h1>
    <form action="update.php" method="post">
        NIM: <input type="text" name="nim" value="<?php echo $nim; ?>"><br>
        Nama: <input type="text" name="nama" value="<?php echo $nama; ?>"><br>
        ID Jurusan: <input type="number" name="id_jurusan" value="<?php echo $id_jurusan; ?>"><br>
        Jenis Kelamin: <input type="text" name="gender" value="<?php echo $jenis_kelamin; ?>"><br>
        Tempat Lahir: <input type="text" name="tpt_lahir" value="<?php echo $tempat_lahir; ?>"><br>
        Tanggal Lahir (yyyy-mm-dd): <input type="text" name="tgl_lahir" value="<?php echo $tanggal_lahir; ?>"><br>
        Alamat: <input type="text" name="alamat" value="<?php echo $alamat; ?>"><br>
        <button type="submit" name="submit">Tambah Data</button> 
    </form>
    
</body>
</html>