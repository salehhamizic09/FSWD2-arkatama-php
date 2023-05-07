<?php
// // // Insert ke table categories
insertCategory("alat berat");

function insertCategory($name) {
    include 'latihan_18_php.php';
    // Menginisialisasi nilai waktu saat ini
    $now = date('Y-m-d H:i:s');

    // Query untuk melakukan insert
    $query = "INSERT INTO categories (name, created_at, updated_at) VALUES ('$name', '$now', '$now')";

    // Eksekusi query
    if ($conn->query($query) === true) {
        echo "Category inserted successfully";
    } else {
        echo "Error inserting category: " . $conn->error;
    }
}

// // Insert ke table products
insertProducts(2, "Product 2", "Deskripsi produk 2", 20000, "waiting", 2, 2);

function insertProducts($categoryId, $name, $description, $price, $status, $createdBy, $verifiedBy) {
    include 'latihan_18_php.php';
    // Menginisialisasi nilai waktu saat ini
    $now = date('Y-m-d H:i:s');

    // Query untuk melakukan insert
    $query = "INSERT INTO products (category_id, name, description, price, status, created_at, updated_at, created_by, verified_at, verified_by) 
    VALUES ('$categoryId', '$name', '$description', '$price', '$status', '$now', '$now', '$createdBy', NULL, '$verifiedBy')";

    // Eksekusi query
    if ($conn->query($query) === true) {
        echo "Products inserted successfully";
    } else {
        echo "Error inserting Products: " . $conn->error;
    }
}