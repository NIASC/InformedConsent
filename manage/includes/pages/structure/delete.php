<?php

// Grab ID
$pk = (int) extractGet('pk');

if (!($pk > 0)) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}




// select Current Section
$query = "SELECT `id`
				FROM
			`bc_sections`
				WHERE
			`bc_sections`.`pk` = " . $pk;

$res = DBM::queryData($query, $database_link);

$section_data = DBM::fetchObject($res);




// Delete Current Section
$query = "DELETE
				FROM
			`bc_sections`
				WHERE
			`bc_sections`.`id` = " . $section_data->id;

$result = DBM::query($query, $database_link);

header('location: ?page=' . $current_page_id . '&language=' . $content_language);

die();

?>
