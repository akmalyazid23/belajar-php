<?php

$nama = "Yazid";
echo "$nama";

/*echo "$nama" ;

$i = 0 ;
$no = 10 ;
*/

/* while ($i < $n) {
    $n= $i + 1;
    echo $n." ". $nama . "</br>" ;
    $i++;
}  */

/* do {
    $n= $i + 1;
    echo $n." ". $nama . "</br>" ;
    $i++;} while ($i < $no)
    */

   /* $data = array('avanza', 'lambo', 'mitsubishi', 'aston martin', 'shelby cobra');
    foreach ($data as $value) {
     echo $value. "</br>";
    }*/

    //Percabangan

/*
if ($nama == "Yazid"){
    echo $nama. "adalah orang Lamongan";
} else if ($nama == "Budi"){
    echo $nama. "berasal dari Lamongan";
} else { 
    echo $nama. "darimana ya?";} */

/*switch(nama){
    case "Yazid":
        $pesan = $nama. "adalah orang Lamongan";
        break;
    case "Budi";
        $pesan = $nama. "bukan orang Lamongan";
        break;  
    default: 
        $pesan = $nama. "orang mana ya?";
}
echo $pesan;*/
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <form action ="<?php $_SERVER ['PHP_Self'] ?>" method="post">
    <label>Nama</label>
    <input> type= "text" name= "nama">
    <label>Jumlah </label>
    <input> type= "submit" name= "submit" value= "submit">
</form>


<?php

if ( !empty($_POST ['submit'])){
    switch ($POST['name']) {
        case "Yazid":
            $pesan = $nama. "adalah orang Lamongan";
            break;
        case "Budi";
            $pesan = $nama. "bukan orang Lamongan";
            break;  
        default: 
            $pesan = $nama. "orang mana ya?";

}


}
    
for ($i =0; $i<$_POST['no']; $i++) {
    echo $pesan ;
} else {

    echo "anda belum menginput nama dan jumlah";
}
?>
    
</body>
</html>