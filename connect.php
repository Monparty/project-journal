<?php
    function connectDB() {
        $dsv = "mysql:host=localhost;dbname=journal_db;charset=utf8";
        $username = "root";
        $password = "";

        try {
            $pdo = new PDO($dsv, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed : " . $e->getMessage();
            exit;
        }
    }
?>