<?php
/*
$_SESSION['user_login']: user dang nhap hay chua
$_SESSION['cart']: thong tin gio hang
td01 - 2
td02 - 3
$_SESSION['cart'] = ['td01'=>2, 'td02'=>3]

 */
class CartController
{
	private $cart ;
	function __construct()
	{
		//$this->cart = isset($_SESSION['cart'])?$_SESSION['cart']:[];

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
		//print_r($this->cart);
		$tam = isset($_SESSION['cart'])?$_SESSION['cart']:[];
		//print_r($tam);
		$data=[];
		$m = new SachModel();
		foreach ($tam as $id => $sl) 
		{
			$sach= $m->chitiet($id);//lay chi tiet 1 sp
			if (!$sach) continue;
			$sach['soluong']= $sl;
			$data[]= $sach;

		}

		//print_r($data);
	include "View/CartIndex.php";
	}

	function add()
	{
		$id = getIndex('id');
		$sl = getIndex('sl', 1);
		$tam = isset($_SESSION['cart'])?$_SESSION['cart']:[];
		if (isset($tam[$id]))
		{
			$tam[$id] =  $tam[$id] + $sl;
		}
		else $tam[$id]=$sl;

		$_SESSION['cart']= $tam;
		//header('location:index.php?controller=CartController');
		header('location:cart.html');
	}

	function delete()
	{
		$tam = isset($_SESSION['cart'])?$_SESSION['cart']:[];
		$id = getIndex('id');
		unset($tam[$id]);
		$_SESSION['cart']= $tam;
		header('location:index.php?controller=CartController');

	}

	function update()
	{

	}

}