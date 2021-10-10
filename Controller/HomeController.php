<?php
class HomeController
{
	function __construct()
	{
	
		$action = getIndex('action', 'index');
		if (method_exists($this, $action))//neu co ham action trong $this (class nay)
		{
			$this->$action();
		}
		else 
		{
			echo "Chua xay dung...";
			exit;
		}

	}

	function index()
	{
		$m = new SachModel();
		$dataLoai = $m->getLoai();
		include 'View/homeIndex.php';
	}

	function F1()
	{
		echo "Ham F1";
		//load model-> lay data
		$m = new ProductModel();
		$data = $m->getData();//lay data
		//echo "<br>Noi dung lay duoc tu model la $data";
		//Dua data ra view
		include 'View/HomeF1.php';
	}

	function F2()
	{
		echo "Ham F2";

	}

	function F3()
	{
		$m= new ProductModel();
		$data = $m->getData3();
		include 'View/HomeF3.php';
	}
}