<?php

/**
 * @Project NUKEVIET 3.0
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2010 VINADES.,JSC. All rights reserved
 * @Createdate Sun, 17 Jul 2011 03:36:01 GMT
 */

if ( ! defined( 'NV_MAINFILE' ) ) die( 'Stop!!!' );

$module_version = array( //
		"name" => "Gia-pha", //
		"modfuncs" => "main,location,anniversary,genealogy,manager,shows,search, exportpdf", //
		"submenu" => "main,manager,genealogy", //
		"is_sysmod" => 0, //
		"virtual" => 1, //
		"version" => "3.0.2", //
		"date" => "Sun, 17 Jul 2011 03:36:02 GMT", //
		"author" => "VINADES (contact@vinades.vn)", //
		"uploads_dir" => array($module_name), //
		"note" => "" //
	);

?>