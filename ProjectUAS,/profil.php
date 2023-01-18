<?php
session_start();
include 'koneksi.php'
if($_SESSION['status_login'] != true){
    echo '<script>window.location="login.php"</script>';
}

$query = mysqli_query($conn, "SELECT * FROM users WHERE id = '".$_SESSION['id']."'");
$d = mysqli_fetch_object($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checklist Toilet</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <h1><a href="dashboard.php">Checklist Toilet</a></h1>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="daftar.php">List Toilet</a></li>
                <li><a href="data.php">Data Toilet</a></li>
                <li><a href="keluar.php">Keluar</a></li>
            </ul>
        </div>
    </header>
    <div class="section">
        <div class="container">
            <h3>Profil</h3>
            <div class="box">
                <form action="" method="POST">
                    <input type="text" name="username" placeholder="Username" class="input-control"  required>
                    <input type="password" name="pass" placeholder="Password" class="input-control" required>
                    <input type="text" name="nama" placeholder="Nama" class="input-control" required>
                    <input type="email" name="email" placeholder="Email" class="input-control" required>
                    <input type="text" name="status" placeholder="Status" class="input-control" required>
                    <input type="text" name="role" placeholder="Role" class="input-control" required>
                    <input type="submit" name="submit" value="Ubah Profil" class="btn">
                </form>
                
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
           <small>Copyright &copy; 2023 - ChecklistToilet.</small> 
        </div>
    </footer>
</body>

</html>