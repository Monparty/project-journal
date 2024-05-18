<?php
include "connect.php";

$pdo = connectDB();

// รับค่าจากฟอร์ม
$date = $_POST['date'];

$sql = "INSERT INTO journal (date) VALUE (:date)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(":date", $date);

if ($stmt->execute()) {
    echo "บันทึกแล้ว";
} else {
    echo "เกิดข้อผิดพลาด " . $stmt->errorInfo()[2];
}

$pdo = null;
?>