<?php

namespace Poei\blog\YamlConfigLoader;

use  Poei\blog\YamlConfigLoader\YamlConfigLoaderInterface;

/**
 * Import YAML config from a file
 */
class YamlConfigLoader implements YamlConfigLoaderInterface
{
	private $fileName;
	const pathFile = __DIR__.'/../../config/';

	public function __construct($fileName)
	{
		$this->fileName = $fileName;
	}

	/**
	 * Parse a YAML from file
	 * @return array
	 */
	public function load()
	{
		return \yaml_parse_file(self::pathFile.$this->fileName);
	}

}


?>