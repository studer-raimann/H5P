<?php

use srag\ActiveRecordConfig\ActiveRecordConfig;

/**
 * Class ilH5POption
 */
class ilH5POption extends ActiveRecordConfig {

	const TABLE_NAME = "rep_robj_xhfp_opt_n";
	const PLUGIN_CLASS_NAME = ilH5PPlugin::class;


	/**
	 * @param string $name
	 * @param mixed  $default_value
	 *
	 * @return mixed
	 */
	public static function getOption($name, $default_value = NULL) {
		return self::getJsonValue($name, $default_value);
	}


	/**
	 * @param string $name
	 * @param mixed  $value
	 */
	public static function setOption($name, $value) {
		self::setJsonValue($name, $value);
	}
}
