<?php
	/**
	* 
	*/
	$hostname = "Localhost";
	$dataname = "topic6";
	$username = "root";
	$password = "";
	if (!($connection = @mysql_connect($hostname, $username, $password)))
	    die("Error: Cannot connect to database !!!");
	if (!(mysql_select_db($dataname, $connection)))
		die("Error: Cannot select database name: $databaseName");
	class ListPost extends CI_Model
	{
		
		public  function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		public function listpost(){
			$query = $this->db->get("post");
			return $query->result_array();
		}
	}
?>