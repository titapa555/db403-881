<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dices Roller</title>
</head>
<body>
<?php
function dicesRoller($score = false) {
    $d1 = rand(1, 6);
    $d2 = rand(1, 6);
    $sum =$d1 +$d2;
    $mid = $score ? "$d1 +$d2 => " : '';
    return '2 Dices roll => '.$mid.'ผลรวมคือ '.$sum;
}  

echo  '<h1>without score</h1>';
echo dicesRoller();
echo  '<h1>wit score</h1>';
echo dicesRoller(true);
?>
</body>
</html>