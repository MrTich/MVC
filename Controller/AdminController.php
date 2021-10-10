<?php

/*
$_SESSION['user_login']: user dang nhap hay chua
$_SESSION['cart']: thong tin gio hang
td01 - 2
td02 - 3
$_SESSION['cart'] = ['td01'=>2, 'td02'=>3]

 */
class AdminController
{
	private $cart ;
	public $insert;
	function __construct()
	{
		/*Kiem tra dang nhap admin hay la chua */
		if(!isset($_SESSION['admin']))
        {
			/*Neu chua login dua toi trang dang nhap admin */
			header("location:index.php?controller=UserController&action=adminlogin");
            exit;
        }

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
		$dataNxb = $m->getNxb();
		include "View/AdminIndex.php";
	}

	function categoryInsert()
	{		
		$tensach = postIndex('new_tensach');
		$masach = postIndex('new_masach');
		$tenloai = postIndex('new_tenloai');
		$maloai = postIndex('new_maloai');
		$nhaxb = postIndex('new_nhaxb');
		$manxb = postIndex('new_manxb');
		$mota = postIndex('new_mota');
		$gia = intval(postIndex('new_gia'));

		
		
		// var_dump($_POST);
		// var_dump($_FILES);

		if (isset($_FILES['new_hinh']))
		{
			$snguon = $_FILES['new_hinh']['tmp_name'];
			$sdich = "assets/images/book/".$_FILES['new_hinh']['name'];
			if ($_FILES['new_hinh']['error']==0 && !is_file($sdich))
			{
				move_uploaded_file($snguon, $sdich );		
			}
		
		}
		
		$hinh = fileIndex('new_hinh')['name'];
		$data_array = [ $masach, $tensach, $mota, $gia, $hinh, $manxb, $maloai];
		// var_dump($data_array);
		$m=new SachModel();
		// $result = $m->addSach($data_array);
		// echo $result;
		$m->addSach($data_array);
		// $this->index();
		header("location:index.php?controller=AdminController");
	}

}