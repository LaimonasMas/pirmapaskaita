<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$x = (float)($_POST['x'] ?? 0);
$y = (float)($_POST['y'] ?? 0);

$suma = $x + $y;

setcookie('Rezultatas' , $suma);

header('Location: http://localhost/pirmapaskaita/calc.php');
die;
}

if (isset($_COOKIE['Rezultatas'])) {
    $rez = $_COOKIE['Rezultatas'];
setcookie('Rezultatas' , '', time() - 555);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumatorius</title>
</head>

<body>
    <h1>Sumatorius</h1>
    <h3>Rezultatas: <?= $rez ?? '---' ?></h3>
    <form action="http://localhost/pirmapaskaita/calc.php" method="post">
        <input type="text" name="x" id="">
        <input type="text" name="y" id="">
        <button type="submit">Sumuoti</button>

    </form>
</body>

</html>

