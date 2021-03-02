<?php

if (!empty($_POST)) {
    _d($_POST);
    // atlikti veiksmus ir uzsisaugoti info is posto
    header('Location: http://localhost/zuikis/m.php'); //<--- rezultatai yra cia
    header('Bla: bla bla');
    die; // nera daugiau info
}

?>
<a href="?kabinetas=nr52&valdininkas=Jonas">Buhalterija Jonas</a>
<a href="?kabinetas=nr53&valdininkas=Petras">Finansitai Petras</a>
<a href="?kabinetas=nr53&valdininkas=Ona">Finansitai Ona</a>

<a href="?">Black</a>
<a href="?color=1">Red</a>

<?php

_d($_GET);
_d($_POST);

if (isset($_GET['kabinetas']) && isset($_GET['valdininkas'])) {

    if ($_GET['kabinetas'] == 'nr52') {
        echo '<h1>Buhalterija</h1>';
        echo '<p>darbuotojas:' . $_GET['valdininkas'] . '</p>';
    } elseif ($_GET['kabinetas'] == 'nr53') {
        echo '<h1>Vyr. Finansitai</h1>';
        echo '<p>darbuotojas:' . $_GET['valdininkas'] . '</p>';
    } else {
        echo '<h1>Kitur</h1>';
    }
} else {
    echo '<h1>Niekur</h1>';
}


?>
<form action="" method="post">

    <input type="text" name="kabinetas">
    <input type="text" name="valdininkas">
    <button type="submit">SPAUSTI</button>

</form>