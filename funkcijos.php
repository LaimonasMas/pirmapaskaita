<?php


$trecias = 0;

function sudeti($vienas, $du)
{

    global $trecias; // bloga praktika

    // print_r($GLOBALS['trecias']); cia super senoviskas dalykas

    // $trecias++;

    $rezultatas = $vienas + $du + $trecias;
    return $rezultatas;
}
echo '<br>';
// echo sudeti(2, 8, 10, 10);

$m = [4, 16];
// echo sudeti(...$m);




function vidurkis($a1, $a2, ...$skaiciai)
{
    _dc($skaiciai);
    $sudetis = 0;
    foreach ($skaiciai as $val) {
        $sudetis += $val;
    }
    $vidurkis = $sudetis / count($skaiciai);
    return $vidurkis;
}
echo vidurkis(1, 2, 3, 4, 5, 12, 13, 14, 15, 16, 17, 18, 19, 20);


echo '<br><br>';


function foo()
{
    static $index = 0;
    $index++;
    // echo $index;
}
foo();
foo();
foo();
echo '<br><br>';



function recursive($num)
{
    echo $num, '<br>';
    if ($num < 5) {
        recursive($num + 1);
    }
    // echo "$num blabla<br>";
}

recursive(1);

$f = function ($a, $b) {
    return $a[0] <=> $b[0];
};


function aaa($a, $b)
{
    return $a[0] <=> $b[0];
}

$masyvas = [
    ['a', 'd'],
    ['v', 'e'],
    ['a', 'c'],
    ['s', 'r'],
];


// usort($masyvas, 'aaa');
usort($masyvas, function ($a, $b) {
    return $a[0] <=> $b[0];
});


_dc($masyvas);

echo '<br><br>';




$result = 0;
$one = function () {
    var_dump($result);
};


$two = function () use ($result) {
    var_dump($result);
};


$three = function () use (&$result) {
    var_dump($result);
};

$result++;

$one();    // NULL: $result nepasiekiamas
$two();    // int(0): $result nukopijuojamas
$three();    // int(1)


echo '<br><br>';



$func = function ($limit = NULL) use (&$func) { 
    static $current = 10; 
     
    // tikrinam eigą
    if ($current <= 0) { 
        //išeinam 
        return FALSE;
    } 
     
    // spausdinam reikšmę.
    echo "$current<br>"; 
     
    $current--; 
     
    $func(); 
 }; 
  //  Kviečiam funkciją
 $func();