<?php
function autoLoadClass($className)
{
	if (is_file("Controller/$className.php"))
		include "Controller/$className.php";
	elseif (is_file("Model/$className.php")) {
		include "Model/$className.php";
	}
	else
	{
		echo "No file!";
		exit;
	}
}
/**
 * [getIndex kiem tra va lay du lieu $index trong $_GET]
 * @param  [type] $index        [key trong $_GET]
 * @param  string $defaultValue [gia tri mac dinh neu khong co key nay ]
 * @return [type]               [description]
 */

function getIndex($index, $defaultValue='')
{
	if (isset($_GET[$index])) return $_GET[$index];
	else return $defaultValue;
	//return isset($_GET[$index])?$_GET[$index]:$defaultValue;
}

function postIndex($index, $defaultValue='')
{
	if (isset($_POST[$index])) return $_POST[$index];
	else return $defaultValue;
	//return isset($_GET[$index])?$_GET[$index]:$defaultValue;
}

function fileIndex($index, $default='')
{
	return isset($_FILES[$index])?$_FILES[$index]:$default;
}
/**
 * Class: ProductController
 * function: 
 */

