<?php
include "connect.php";

$pdo = connectDB();

$id = $_GET['id'];
$sql = "SELECT * FROM journal WHERE id=$id";

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$pdo = null;
include "eindex.html";
?>