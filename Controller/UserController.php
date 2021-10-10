<?php
/*
$_SESSION['user_login']: user dang nhap hay chua
$_SESSION['cart']: thong tin gio hang
td01 - 2
td02 - 3
$_SESSION['cart'] = ['td01'=>2, 'td02'=>3]

 */
class UserController
{
	private $cart ;
	function __construct()
	{

		$action = getIndex('action', 'adminlogin');

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

	function adminlogin()
	{
		// var_dump($_POST);
		$u = postIndex('u');
		$p = md5(postIndex('p'));
		$m = new UserModel(); /*Xu ly thong thong tin khach hang,quan tri */
		$data = $m->getAdmin($u, $p);
		// var_dump($data);
		if($data==false)
		{
			include "View/UserAdminLogin.php";
		}
		else
		{
			$_SESSION['admin']=$data;
			header("location:index.php?controller=AdminController");
		}
	}

	function adminlogout()
	{
		unset($_SESSION['admin']);
		header("location:index.php?controller=UserController");
	}

}