<?php
class UserModel extends Database
{

	function getAdmin($u, $p)
	{
		$data= $this->selectQuery("select * from quantri where username=? and matkhau=?", [$u, $p]);
		//if ($data)
		return $data?$data[0]:false;
		//return false;
	}
}