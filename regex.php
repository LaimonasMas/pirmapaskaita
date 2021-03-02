alio
<?php

$text = 'dklfs UUO-888 ngd dfg df gdf b gf TZZ-121 fgb666';

$text3 = 'HEL00';

$text2 = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';

preg_match_all('/([A-Z]{3})-(\d{3})/', $text, $match);

preg_match('/\d/', $text2, $match2);


if (preg_match('/^([A-Z]{3})-(\d{3})$/', $text3 )){
    echo 'Teisingas';
}
else {
    echo 'Pusgalvis';
}


echo '<pre>';

echo $text2;

print_r($match);

print_r($match2);

echo '<pre>';
echo $match2[0];
