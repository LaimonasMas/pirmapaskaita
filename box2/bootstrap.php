
<?php
session_start();
define('URL', 'http://localhost/pirmapaskaita/box2/'); // <--- konstanta
define('DIR', __DIR__.'/');

define('INSTALL_DIR', '/pirmapaskaita/box2/');


require DIR. 'app/BananaController.php';
require DIR. 'app/Json.php';
require DIR. 'app/Box.php';
require DIR. 'app/Helper.php';




// _d($_SESSION, 'SESIJA--->');

// http://localhost/zuikis/box/

