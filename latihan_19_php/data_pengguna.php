<?php
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
// echo "Connected successfully";

// Query data from the "users" table
$sql = "SELECT avatar, name, email, phone, role FROM users";
$result = mysqli_query($conn, $sql);

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    // Start creating the table
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Avatar</th>';
    echo '<th>Name</th>';
    echo '<th>Email</th>';
    echo '<th>Phone</th>';
    echo '<th>Role</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Loop through each row of data
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td><img src="' . $row['avatar'] . '" alt="Avatar" class="img-thumbnail" style="width: 50px;"></td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['phone'] . '</td>';
        echo '<td>' . $row['role'] . '</td>';
        echo '</tr>';
    }

    // Close table tags
    echo '</tbody>';
    echo '</table>';
} else {
    echo "No data found.";
}

// Close the database connection
mysqli_close($conn);
?>


