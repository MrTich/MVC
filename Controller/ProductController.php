<?php
class ProductController
{
	function __construct()
	{
		$action = getIndex('action', 'index');
		if (method_exists($this, $action))//neu co ham action trong $this (class nay)
		{
			$reflection = new ReflectionMethod($this, $action);
		    if (!$reflection->isPublic()) {
		     //   throw new RuntimeException("The called method is not public.");
		     echo "No nha!";exit;
		    }
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
		$dataSach = $m->getAll();
		include 'View/homeIndex.php';
	}

	function bookcat()
	{
		$catid = getIndex('catid');
		$m = new SachModel();
		$data = $m->getSachLoai($catid);
		//echo "<pre>"; print_r($data);
		//echo "hien thi thong tin sach o ma loai la $catid";
	}

	function bestseller()
	{
		echo "Ham bestseller";
	}

}