<?php

class User_Model extends Model
{
	public function user()
	{
		$result = $db->select("user");
		$resultObjects = array();

		while($row = mysql_fetch_object($result)) $resultObjects[] = $row;

		return $resultObjects;
	}
}