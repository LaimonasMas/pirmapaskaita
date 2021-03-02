<?php

$num = 5;
$location = 'tree';
$location2 = 'krumas';

$format = 'There are %d monkeys in the %s and the %s';

echo sprintf($format, $num, $location, $location2);
echo '<br>';
echo md5('123');
echo '<br>';
echo sha1('123');