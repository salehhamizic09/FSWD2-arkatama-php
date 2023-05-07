<?php

function joinCategoriesProducts() {
    include 'latihan_18_php.php'; // Koneksi ke database
    $query = "SELECT products.*, categories.name AS category_name 
              FROM products
              INNER JOIN categories ON products.category_id = categories.id";
    $result = $conn->query($query); // Eksekusi query
    if ($result->num_rows > 0) { // Cek apakah query berhasil dieksekusi dan ada datanya
        echo "<table border='1'>"; // Membuat tabel untuk menampilkan data
        echo "<tr><th>Product ID</th><th>Product Name</th><th>Product Description</th><th>Product 
        Price</th><th>Product Status</th><th>Product Category</th></tr>"; // Menampilkan header tabel
        while ($row = $result->fetch_assoc()) { // Looping untuk membaca data setiap baris hasil query
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["description"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "<td>" . $row["status"] . "</td>";
            echo "<td>" . $row["category_name"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Data not found.";
    }
    
}

// Panggil fungsi untuk menampilkan hasil join
joinCategoriesProducts();

