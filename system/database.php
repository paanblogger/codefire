<?php
class Database
{
	public function __construct()
	{
		global $config;
		$this->connection = mysql_pconnect($config['db_host'], $config['db_username'], $config['db_password']) or die('MySQL Error: '. mysql_error());
		mysql_select_db($config['db_name'], $this->connection);
	}
	public function select($table , $where = 0)
	{
		$query = "SELECT * FROM ".$table;
		if(isset($where) && is_array($where))
		{
			$query.= " WHERE ";
			$field = array_keys($where);
			$value = array_values($where);
			$count = 0;
			foreach($where as $row)
			{
				if($count != 0)
					$query.= " AND ".$field[$count]." = ".$value[$count];
				else
					$query.= $field[$count]." = ".$value[$count];
				$count++;
			}
		}
		$result = mysql_query($query);
		if($result)
			return $result;
		else
			return false;
	}
	public function insert($table , $data)
	{
		$key = array_keys($data);
		$value = array_values($data);
		$count = 0;
		foreach($data as $row)
		{
			$data[$key[$count]] = addslashes($value[$count]);
			$count++;
		}
		$key = array_keys($data);
		$value = array_values($data);
		$query = "INSERT INTO ".$table." (".implode(', ', $key).") VALUES ('".implode('\',\'', $value)."')";
		$result = mysql_query($query);
		if ($result)
			return true;
		else
			return false;
	}
	public function update($table , $data , $where)
	{
		$query = "UPDATE ".$table." SET ";
		$key = array_keys($data);
		$value = array_values($data);
		$count = 0;
		foreach($data as $row)
		{
			$query.= $key[$count]." = ".$value[$count]." , ";
			$count++;
		}
		$query.= "WHERE ";
		$key = array_keys($where);
		$value = array_values($where);
		$count = 0;
		foreach($where as $row)
		{
			if($count != 0)
				$query.= " AND ".$key[$count]." = ".$value[$count];
			else
				$query.= $key[$count]." = ".$value[$count];
			$count++;
		}
		//return $query;
		$result = mysql_query($query);
	}
	public function delete($field , $value , $table)
	{
		$query = "DELETE FROM ".$table." WHERE ".$field." = '".$value."'";
		$result = mysql_query($query);
		if ($result)
			return true;
		else
			return false;
	}
}
?>