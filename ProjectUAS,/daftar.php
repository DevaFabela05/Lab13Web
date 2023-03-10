<?php
session_start();
include 'koneksi.php';
if($_SESSION['status_login'] != true){
    echo '<script>window.location="login.php"</script>';
}

if (isset($_POST['submit']))
{
    $tanggal = $_POST['tanggal'];
    $toilet_id = $_POST['toilet_id'];
    $kloset = $_POST['kloset'];
    $wastafel = $_POST['wastafel'];
    $lantai = $_POST['lantai'];
    $dinding = $_POST['dinding'];
    $kaca = $_POST['kaca'];
    $bau = $_POST['bau'];
    $sabun = $_POST['sabun'];
    $users_id = $_POST['users_id'];

    $sql = 'INSERT INTO checklist (tanggal, toilet_id, kloset, wastafel, lantai, dinding, kaca, bau, sabun, users_id) ';
    $sql .= "VALUE ('{$tanggal}', '{$toilet_id}', '{$kloset}', '{$wastafel}', '{$lantai}', '{$dinding}', '{$kaca}', '{$bau}', '{$sabun}', '{$users_id}')";
    $result = mysqli_query($conn, $sql);
    header('location: data.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checklist Toilet</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <h1><a href="dashboard.php">Checklist Toilet</a></h1>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="daftar.php">List Toilet</a></li>
                <li><a href="data.php">Data Toilet</a></li>
            </ul>
        </div>
    </header>
    <div class="section">
        <div class="container">
            <h3>List Toilet</h3>
            <div class="box">
                <form action="" method="post">
                    <table border="0" class="table-form">
                        <tr>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td>
                                <input type="datetime-local" name="tanggal" class="input-control" >
                            </td>
                            </tr>
                            <tr>
                            <td>Toilet_id</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="toilet_id" >
                            </td>
                        </tr>
                        <tr>
                            <td>Kloset</td>
                            <td>:</td>
                            <td>
                            <input type="checkbox" name="kloset" value="1">Bersih
                            <input type="checkbox" name="kloset" value="2">Kotor
                            <input type="checkbox" name="kloset" value="3">Rusak
                            
                            </td>
                        </tr>
                        <tr>
                            <td>Wastafel</td>
                            <td>:</td>
                            <td>    
                            <input type="checkbox" name="wastafel" value="1">Bersih
                            <input type="checkbox" name="wastafel" value="2">Kotor
                            <input type="checkbox" name="wastafel" value="3">Rusak
                              
                            </td>
                        </tr>
                        <tr>
                            <td>Lantai</td>
                            <td>:</td>
                            <td>
                            <input type="checkbox" name="lantai" value="1">Bersih
                            <input type="checkbox" name="lantai" value="2">Kotor
                            <input type="checkbox" name="lantai" value="3">Rusak
                            </td>
                        </tr>
                        <tr>
                            <td>Dinding</td>
                            <td>:</td>
                            <td>
                            <input type="checkbox" name="dinding" value="1">Bersih
                            <input type="checkbox" name="dinding" value="2">Kotor
                            <input type="checkbox" name="dinding" value="3">Rusak
                            </td>
                        </tr>
                        <tr>
                            <td>Kaca</td>
                            <td>:</td>
                            <td>
                            <input type="checkbox" name="kaca" value="1">Bersih
                            <input type="checkbox" name="kaca" value="2">Kotor
                            <input type="checkbox" name="kaca" value="3">Rusak
                            </td>
                        </tr>
                        <tr>
                            <td>Bau</td>
                            <td>:</td>
                            <td>
                            <input type="checkbox" name="sabun" value="1">Ada
                            <input type="checkbox" name="sabun" value="2">Habis
                            <input type="checkbox" name="sabun" value="3">Hilang
                            </td>
                        </tr>
                        <tr>
                            <td>Sabun</td>
                            <td>:</td>
                            <td>
                            <input type="checkbox" name="bau" value="1">Ya
                                <input type="checkbox" name="bau" value="2">Tidak
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" class="btn-daftar" value="Submit">
                            </td>
                        </tr>
                       
                    </table>
                </form>
            </div>
        </div>
    </div>
    <?php require('footer.php'); ?>
</body>

</html>