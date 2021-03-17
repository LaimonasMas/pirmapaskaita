<?php
$dist = null;
define('API', 'https://www.distance24.org/route.json?stops=');

if (!empty($_GET)) {



$city1 = $_GET['c1'];
$city2 = $_GET['c2'];

// serverio vidus
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, API.$city1.'|'.$city2);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$answer = curl_exec($curl); // siunciame uzklausa, tada laukiame...... atsakyma irasome i $answer

curl_close($curl);

$answer = json_decode($answer);

_d($answer); 
_d($answer->stops[0]->wikipedia); 


$dist = $answer->distance;

$image1 = $answer->stops[0]->wikipedia->image ?? '';
$image2 = $answer->stops[1]->wikipedia->image ?? '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h2, initial-scale=1.0">
    <title>API DISTANCE-24</title>
</head>

<body>

<form action="" method="get">

Miestas 1 <input type="text" name="c1" id="">
Miestas 2 <input type="text" name="c2" id="">
<button type="submit">Atstumas</button>

</form>
<?php if (null != $dist) : ?>
    <h2>Atstumas <?= $dist ?> km</h2>
    <img style="width:400px" src="<?= $answer->stops[0]->wikipedia->image ?>" alt="">
    <img style="width:400px" src="<?= $answer->stops[1]->wikipedia->image ?>" alt="">
<?php endif ?>
</body>

</html>