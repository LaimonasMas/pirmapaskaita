<?php


$host = '127.0.0.1';
$db   = 'forest';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}



// ***SKAITYMAS

echo '<h1>Viskas</h1>';

$sql = "SELECT name, height, id FROM trees"; // <--- sql formavimas (ko prasai is DB)

$stmt = $pdo->query($sql); // <--- sql perdavimas i duomenu baze. Gaunu statementa $stmt

while ($row = $stmt->fetch())
{
    echo 'Medis: ' . $row['name'] . ', ' . 'Aukstis: ' . $row['height'] . 'm, ' . 'id: ' . $row['id'] . '<br>';
}



echo '<h1>Lapuociai ir aukstesni uz 10m</h1>';

$sql = 
"SELECT name, height, id 
FROM trees
WHERE type = 2 AND height > 10"; // <--- sql formavimas (ko prasai is DB)

$stmt = $pdo->query($sql); // <--- sql perdavimas i duomenu baze. Gaunu statementa $stmt

while ($row = $stmt->fetch())
{
    echo 'Medis: ' . $row['name'] . ', ' . 'Aukstis: ' . $row['height'] . 'm, ' . 'id: ' . $row['id'] . '<br>';
}


echo '<h1>Viskas pagal auksti nuo didziausio iki maziausio</h1>';

$sql = "SELECT name, height, id FROM trees ORDER BY height DESC"; // <--- sql formavimas (ko prasai is DB)

$stmt = $pdo->query($sql); // <--- sql perdavimas i duomenu baze. Gaunu statementa $stmt

while ($row = $stmt->fetch())
{
    echo 'Medis: ' . $row['name'] . ', ' . 'Aukstis: ' . $row['height'] . 'm, ' . 'id: ' . $row['id'] . '<br>';
}


echo '<h1>Lapuociai pagal auksti mazejancia tvarka</h1>';

$sql = "SELECT name, height, id FROM trees WHERE type = 2 ORDER BY height DESC"; // <--- sql formavimas (ko prasai is DB)

$stmt = $pdo->query($sql); // <--- sql perdavimas i duomenu baze. Gaunu statementa $stmt

while ($row = $stmt->fetch())
{
    echo 'Medis: ' . $row['name'] . ', ' . 'Aukstis: ' . $row['height'] . 'm, ' . 'id: ' . $row['id'] . '<br>';
}


// *************TRYNIMAS***************//
$sql = "DELETE FROM trees WHERE name='Kastonas'";
$pdo->query($sql);


// **********IRASYMAS I DB*************//
$sql = "INSERT INTO trees (name, height, type)
VALUES ('Kastonas', '7.99', 2)";
$pdo->query($sql);


//********REDAGAVIMAS*****************//
$sql = "UPDATE trees SET height=88.88 WHERE name='Kastonas'";
$pdo->query($sql);


