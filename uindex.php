<?php
include "connect.php";

$pdo = connectDB();

// รับค่าจากฟอร์ม
$date = $_POST['date'];
$day = implode($_POST["day"]);
$mood = $_POST['mood'];
$thoughts = $_POST['thoughts'];
$maExercise = $_POST['maExercise'];
$maMindfulness = $_POST['maMindfulness'];
$maHydration = $_POST['maHydration'];
$maRelationship = $_POST['maRelationship'];
$yesterdayBestPart = $_POST['yesterdayBestPart'];
$dailyAdviceQuote = $_POST['dailyAdviceQuote'];
$todayGratefulFor = $_POST['todayGratefulFor'];
$rmlSellove = $_POST['rmlSellove'];
$rmlConfident = $_POST['rmlConfident'];
$rmlRelationship = $_POST['rmlRelationship'];
$rmlCareer = $_POST['rmlCareer'];
$rmlMindfulness = $_POST['rmlMindfulness'];
$rmlHeath = $_POST['rmlHeath'];
$rmlCreativity = $_POST['rmlCreativity'];
$rmlFinance = $_POST['rmlFinance'];
$howCanImprove = $_POST['howCanImprove'];
$todaySchedule = $_POST['todaySchedule'];
$dctSmallGoals = $_POST['dctSmallGoals'];
$dctBigGoals = $_POST['dctBigGoals'];
$ideasToGoals = $_POST['ideasToGoals'];
$thinkOutside = $_POST['thinkOutside'];

$sql = "INSERT INTO journal (date, day, mood, thoughts, maExercise, maMindfulness, maHydration, maRelationship, yesterdayBestPart, dailyAdviceQuote, todayGratefulFor, rmlSellove, rmlConfident, rmlRelationship, rmlCareer, rmlMindfulness, rmlHeath, rmlCreativity, rmlFinance, howCanImprove, todaySchedule, dctSmallGoals, dctBigGoals, ideasToGoals, thinkOutside) VALUE (:date, :day, :mood, :thoughts, :maExercise, :maMindfulness, :maHydration, :maRelationship, :yesterdayBestPart, :dailyAdviceQuote, :todayGratefulFor, :rmlSellove, :rmlConfident, :rmlRelationship, :rmlCareer, :rmlMindfulness, :rmlHeath, :rmlCreativity, :rmlFinance, :howCanImprove, :todaySchedule, :dctSmallGoals, :dctBigGoals, :ideasToGoals, :thinkOutside)";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(":date", $date);
$stmt->bindParam(":day", $day);
$stmt->bindParam(":mood", $mood);
$stmt->bindParam(":thoughts", $thoughts);
$stmt->bindParam(":maExercise", $maExercise);
$stmt->bindParam(":maMindfulness", $maMindfulness);
$stmt->bindParam(":maHydration", $maHydration);
$stmt->bindParam(":maRelationship", $maRelationship);
$stmt->bindParam(":yesterdayBestPart", $yesterdayBestPart);
$stmt->bindParam(":dailyAdviceQuote", $dailyAdviceQuote);
$stmt->bindParam(":todayGratefulFor", $todayGratefulFor);
$stmt->bindParam(":rmlSellove", $rmlSellove);
$stmt->bindParam(":rmlConfident", $rmlConfident);
$stmt->bindParam(":rmlRelationship", $rmlRelationship);
$stmt->bindParam(":rmlCareer", $rmlCareer);
$stmt->bindParam(":rmlMindfulness", $rmlMindfulness);
$stmt->bindParam(":rmlHeath", $rmlHeath);
$stmt->bindParam(":rmlCreativity", $rmlCreativity);
$stmt->bindParam(":rmlFinance", $rmlFinance);
$stmt->bindParam(":howCanImprove", $howCanImprove);
$stmt->bindParam(":todaySchedule", $todaySchedule);
$stmt->bindParam(":dctSmallGoals", $dctSmallGoals);
$stmt->bindParam(":dctBigGoals", $dctBigGoals);
$stmt->bindParam(":ideasToGoals", $ideasToGoals);
$stmt->bindParam(":thinkOutside", $thinkOutside);

if ($stmt->execute()) {
    echo "<script>
        alert('บันทึกข้อมูลแล้ว');
        window.location.href = 'index.html';
    </script>";
} else {
    echo "เกิดข้อผิดพลาด " . $stmt->errorInfo()[2];
}

$pdo = null;
?>