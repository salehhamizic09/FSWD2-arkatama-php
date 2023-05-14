<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['email'])) {
    // Pengguna belum login, redirect ke halaman login
    header("Location: login.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$database = "latihan_18_php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query data from the "users" table
$sql = "SELECT id, avatar, name, email, phone, role FROM users";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Pengguna</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/1babd9929f.js" crossorigin="anonymous"></script>
</head>
<body>
    <h2>Data Pengguna</h2>
    <div class="container">
        <?php
        // Check if there are any rows returned
        if (mysqli_num_rows($result) > 0) {
            // Start creating the table
            echo '<table class="table">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>No</th>'; // Tambahkan kolom nomor
            echo '<th>Aksi</th>';
            echo '<th>Avatar</th>';
            echo '<th>Name</th>';
            echo '<th>Email</th>';
            echo '<th>Phone</th>';
            echo '<th>Role</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            // Inisialisasi nomor
            $nomor = 1;

            // Loop through each row of data
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $nomor . '</td>'; // Tampilkan nomor
                echo '<td><button class="btn btn-primary btn-sm">Detail</button> 
                     <a href="edit_pengguna.php?id=' . $row['id'] . '" class="btn btn-warning btn-sm">Edit</a>
                     <button class="btn btn-danger btn-sm">Hapus</button></td>';
                echo '<td><img src="' . $row['avatar'] . '" alt="Avatar" class="img-thumbnail" style="width: 50px;"></td>';
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['phone'] . '</td>';
                echo '<td>' . $row['role'] . '</td>';
                echo '</tr>';

                // Inkremen nomor
                $nomor++;
            }

            // Close table tags
            echo '</tbody>';
            echo '</table>';
        } else {
            echo "No data found.";
        }

        // Tombol Logout
        echo '<a href="logout.php" class="btn btn-danger">Logout</a>';
        
        // Close the database connection
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>
