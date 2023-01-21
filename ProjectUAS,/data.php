<?php
session_start();
include 'koneksi.php';
if($_SESSION['status_login'] != true){
    echo '<script>window.location="login.php"</script>';
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebersihan Toilet</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <h1><a href="dashboard.php">Kebersihan Toilet</a></h1>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="daftar.php">Daftar Toilet</a></li>
                <li><a href="data.php">Data Toilet</a></li>
            </ul>
        </div>
    </header>
    <div class="section">
        <div class="container">
            <h3>Data Toilet</h3>
            <div class="box">
                <table border="1" cellpadding="10" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Toilet_id</th>
                            <th>Kloset</th>
                            <th>Wastafel</th>
                            <th>Lantai</th>
                            <th>Dinding</th>
                            <th>Sabun</th>
                            <th>Bau</th>
                            <th>Petugas</th>
                            <th>Aksi</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $data = mysqli_query($conn, "SELECT * FROM checklist ORDER BY id DESC");
                        while($row = mysqli_fetch_array($data)){

                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['tanggal']?></td>
                            <td>1</td>
                            <td>Bersih</td>
                            <td>Bersih</td>
                            <td>Bersih</td>
                            <td>Bersih</td>
                            <td>Ada</td>
                            <td>Ya</td>
                            <td>Admin</td>

                            <td><a href="edit.php">Edit</a>  || <a href="hapus.php">Hapus</a>
                        </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php require('footer.php'); ?>
</body>

</html>