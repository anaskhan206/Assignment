<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1. Leap Year Program</title>
</head>
<body>
    <h1>Leap Year Program</h1>
<?php
$year = 2024;
if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "Leap Year: " . $year;
} else {
    echo "It's not a Leap Year: " . $year;
}  

$year = 2021;
if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "Leap Year: " . $year;
} else {
    EcHo "It's not a Leap Year: " . $year;
}
?>
</body>
</html>