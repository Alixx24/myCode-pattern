<?php


// اتصال به دیتابیس
$host = 'localhost';
$dbname = 'php_project';
$username = 'root';
$password = '';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// دریافت اطلاعات پست‌ها
$query = $db->query("SELECT id, name, created_at FROM categories");
$categories = $query->fetchAll(PDO::FETCH_ASSOC);

// تبدیل اطلاعات به JSON و چاپ
echo json_encode($categories);
