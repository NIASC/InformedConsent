<?php

class DBM {
	
	// Connect
	public static function open($parameters) {
		
		$database_link = mysqli_connect($parameters['host'], $parameters['username'], $parameters['password']);
		
		if (!$database_link) {
			return false;
		}

		$db_selected = mysqli_select_db( $database_link, $parameters['database']);
		
		if (!$db_selected) {
			return false;
		}
		
		mysqli_query($database_link, 'SET CHARACTER SET utf8');
		
		mysqli_query($database_link, "SET NAMES 'utf8'");
		
		return $database_link;
		
	}
	
	// Close
	public static function close($database_link) {
		
		if (!$database_link) {
			return false;
		}
		
		mysqli_close($database_link);
		
		return true;
		
	}
	
	// Query
	public static function query($query, $database_link = '') {
	
		if ($database_link) {
			return mysqli_query($database_link, $query);
		} else {
			global $database_link;
			return mysqli_query($database_link, $query);
		}
		
	}
	
	// Num Rows
	public static function numRows($result) {
	
		return mysqli_num_rows($result);
		
	}
	
	// Fetch Object
	public static function fetchObject($result) {
	
		return mysqli_fetch_object($result);
		
	}
	
	// Fetch Array
	public static function fetchArray($result, $intMode = MYSQLI_ASSOC) {
	
		return mysqli_fetch_array($result, $intMode);
		
	}
	
	// Query Data
	public static function queryData($query, $database_link = '') {
	
		if ($database_link) {
			$result = mysqli_query($database_link, $query);
		} else {
			global $database_link;
			$result = mysqli_query($database_link, $query);
		}
		
		if (mysqli_num_rows($result)) {
			return $result;
		} else {
			return false;
		}
		
	}
	
	// Query Status
	public static function queryStatus($result) {
	
		return mysqli_result_status($result);
		
	}
	
	// Insert ID
	public static function insertID($database_link = '') {
		
		if ($database_link) {
			return mysqli_insert_id($database_link);
		} else {
			global $database_link;
			return mysqli_insert_id($database_link);
		}
		
	}
	
	// Escape
	public static function escape($str) {
		global $database_link;
		return mysqli_real_escape_string($database_link, $str);
		
	}
	
}

?>