<?php

namespace Poei\blog\YamlConfigLoader;

/**
 * @package Poei\blog\YamlConfigLoader
 * YamlConfigLoaderInterface allow one to fetch Yaml dat aconfiguration from a file to a php array
 */
interface YamlConfigLoaderInterface
{
	/**
	 * Load data from a file to a php Array
	 */
	public function load();
}


