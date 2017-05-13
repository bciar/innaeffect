<?php

$sql = array();

$sql[] = 'DROP TABLE `'._DB_PREFIX_.'tmcategoryproducts`';

$sql[] = 'DROP TABLE `'._DB_PREFIX_.'tmcategoryproducts_shop`';

foreach ($sql as $query)
	if (Db::getInstance()->execute($query) == false)
		return false;
