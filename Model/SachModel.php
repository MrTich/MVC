<?php
class SachModel extends Database
{
	/**
	 * lay tat cac cuon sach
	 * @return [Array] [cac cuon sach]
	 */
	function getAll()
	{
		return $this->selectQuery('select * from sach' );
	}

/**
 * [get10Random lay n cuon sach ngau nhien]
 * @param  integer $n [so sach can lay]
 * @return [type]     [Array]
 */
	function get10Random($n=10)
	{
		return $this->selectQuery('select * from sach order by rand() limit 0,10');
	}

	function getLoai()
	{
		return $this->selectQuery('select * from loai');
	}

	function searchBook($keyword)
	{
		$sql="select * from sach where tensach like ? or mota like ? ";
		$arr= ["%$keyword%", "%$keyword%"];
		return $this->selectQuery($sql, $arr);
	}

	function getSachLoai($idloai)
	{
		return $this->selectQuery("select * from sach where maloai=?", [$idloai]);
	}

	function getNxb()
	{
		return $this->selectQuery("select * from nhaxb");
	}

	function chitiet($id)
	{
		$data= $this->selectQuery("select * from sach where masach=?", [$id]);
		//print_r($data);
		//if ($data)
		return $data?$data[0]:false;
		//return false;
	}

	function addSach($update_data=array())
	{
		// $masach, $tensach, $mota, $gia, $hinh, $manxb, $maloai
		return $this->updateQuery("insert into sach (masach,tensach,mota,gia,hinh,manxb,maloai) values(?,?,?,?,?,?,?) ", $update_data);
	}
}