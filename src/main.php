<?php

namespace Poei\blog;

require __DIR__.'/../vendor/autoload.php';

use Poei\blog\YamlConfigLoader\YamlConfigLoader;

$res = new YamlConfigLoader('conf.yml');
 echo ($res->load());
 var_dump($res->load());


?>