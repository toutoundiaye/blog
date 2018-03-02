<?php

namespace Poei\blog\tests;

require __DIR__.'/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use  Poei\blog\YamlConfigLoader\YamlConfigLoader;

class YamlConfigLoaderTest extends TestCase
{
	public function testConfigIsLoaded()
	{
		$loader = new YamlConfigLoader('conf.yml');
		$actual = $loader->load();
		$expected = ["symfony"=>["PHP"=>5]];
		$message = 'Conf loaded is equals to the file contents';
		$this->assertEquals($expected, $actual, $message);
	}
}
