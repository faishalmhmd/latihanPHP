<?php 
    include_once("connector.php");
    $result = mysqli_query($conn,"select * from t_mahasiswa");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Mahasiswa</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container">
    <table class="table ">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Alamat</th>
        </tr>
        <tr>
            <?php 
                while($user = mysqli_fetch_array($result)) {
                    echo "<td>".$user['NIM']."</td>";
                    echo "<td>".$user['Nama']."</td>";
                    echo "<td>".$user['Kelas']."</td>";
                    echo "<td>".$user['Jurusan']."</td>";
                    echo "<td>".$user['Alamat']."</td>";
                }
            ?>
        </tr>
    </table>    
    </div>
</body>
</html>