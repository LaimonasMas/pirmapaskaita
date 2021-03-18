<?php

define('TIME', 15); // kesinimo laikas sekundem
define('API','https://api.exchangeratesapi.io/latest');

// vienkartinis scenarijus pradedant veikima
if (!file_exists(__DIR__.'/data.json')) {
    file_put_contents(__DIR__.'/data.json', 
        json_encode([
            'time' => time()-TIME-1, 
            'data' => (object)[]
            ])
    );
}


$cache = json_decode(file_get_contents(__DIR__.'/data.json'));

// Scenarijus skaitymas is API
if ($cache->time < time()-TIME) {

    $type = 'API';
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, API);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $answer = curl_exec($curl); // siunciame uzklausa. laukiame........ atsakyma irasome i $answer
    curl_close($curl);
    $answer = json_decode($answer);
    file_put_contents(__DIR__.'/data.json', 
    json_encode([
        'time' => time(), 
        'data' => $answer
        ])
    );

}
// Scenarijus skaitymas is cache
else {
    $type = 'CACHE';
    $answer = $cache->data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURRENCY</title>
</head>
<body>
<h1 style="color:red">Result from: <?= $type ?> </h1>
<h2>CAD: <?= $answer->rates->CAD ?> </h2>
</body>
</html>