<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['num1']) && isset($_POST['num2'] ) && isset($_POST['dzial']))
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$dzial=$_POST['dzial'];

switch($dzial) {
    case 'dod':
        $wynik= $num1 + $num2;
        break;
    case'od':
        $wynik= $num1 - $num2;
        break;
    case'dz':
        $wynik= $num1 / $num2;
        break;
    case'mn':
        $wynik= $num1 * $num2;
        break;
}
echo $wynik;
?>
</body>
</html>