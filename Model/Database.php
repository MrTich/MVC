<?php
class Database
{
	public $connect;
	function __construct()
	{
		$this->connect = new PDO("mysql:host=localhost; dbname=bookstorevn", 'root','');
		$this->connect->query("set names utf8");
	}

	function selectQuery($sql, $a=array() )
	{
		$stm= $this->connect->prepare($sql);
		$stm->execute($a);
		return $stm->fetchAll(PDO::FETCH_ASSOC);
	}
	/**
	 * [updateQuery su dung cho cac cau truy van them-sua-xoa]
	 * @param  [type] $sql [chuoi sql]
	 * @param  array  $a   [mang tham so truyen vao]
	 * @return [integer]      [so dong bi tac dong]
	 */
	function updateQuery($sql, $a=array() )
	{
		$stm= $this->connect->prepare($sql);
		$stm->execute($a);
		return $stm->rowCount();
	}
}