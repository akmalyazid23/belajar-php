<?php


if (isset($_GET['p']) && $_GET ['p'] == 'tampil') {
echo $_POST['nama'];
echo "<br/>";
echo $_POST['password'];

} else {
    echo "akses gagal";
}


