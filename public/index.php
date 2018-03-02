<?php

use Poei\blog\App;

require_once __DIR__ . '/../vendor/autoload.php';

$app = new App();
$render = new Template();

try {
    $app->run();
} catch (\Exception $exception) {
    $render->view('error404');
}
