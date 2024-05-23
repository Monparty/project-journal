<?php
include "connect.php";

$pdo = connectDB();

$sql = "SELECT * FROM journal";

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Process the results as needed

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$pdo = null;
include "journalList.html";
?>