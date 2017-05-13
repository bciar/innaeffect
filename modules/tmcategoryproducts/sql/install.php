<?php

$sql = array();

$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'tmcategoryproducts` (
    `id_tab` int(11) NOT NULL AUTO_INCREMENT,
	`category` int(11) NOT NULL,
	`num` int(11) NOT NULL,
	`mode` int(11) NOT NULL,
	`status` int(11) NOT NULL,
	`use_carousel` int(11) NOT NULL,
    PRIMARY KEY  (`id_tab`)
) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'tmcategoryproducts_shop` (
    `id_tab` int(11) NOT NULL,
	`id_shop` int(11) NOT NULL,
    PRIMARY KEY  (`id_tab`)
) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

foreach ($sql as $query)
	if (Db::getInstance()->execute($query) == false)
		return false;
