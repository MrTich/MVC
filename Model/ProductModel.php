<?php
class ProductModel
{
	function getData()
	{
		return "Noi dung data";
	}

	function getData2($x)
	{
		return $x*$x;
	}

	function getData3()
	{
		$o = new PDO('mysql:host=localhost; dbname=bookstore_vn', 'root','');
		$o->query('set names utf8');
		$stm= $o->query('select * from sach');
		return $stm->fetchAll(PDO::FETCH_ASSOC);
	}
}