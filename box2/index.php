<?php
require __DIR__.'/bootstrap.php';

$uri = explode('/',str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']));

_d($uri);


// ROUTING

if ('' == $uri[0]) {
    (new BananaController)->index();
}
elseif ('create' == $uri[0]) {
    (new BananaController)->create();
}
elseif ('store' == $uri[0]) {
    (new BananaController)->store();
}
elseif ('edit' == $uri[0]) {
    (new BananaController)->edit((int)$uri[1]);
}
elseif ('update' == $uri[0]) {
    (new BananaController)->update((int)$uri[1]);
}
elseif ('delete' == $uri[0]) {
    (new BananaController)->delete((int)$uri[1]);
}
_d($_SESSION);

echo 'DURYS';
