<?php
$database_link = DBM::open($config['database']);

$phone_pattern = str_repeat("9", $setting_data['phone_pattern']);
$phone_patternX = str_repeat("X", $setting_data['phone_pattern']);

if(isset($_POST['action'])) {
	if($_POST['action'] == 'update' && isset($_SESSION['registered_user'])) {
		header('Content-Type: application/json');
		$uid = $_SESSION['registered_user'];
		unset($_SESSION['registered_user']);

		// $sql = "UPDATE `bc_users` SET `username_email` = '". DBM::escape(extractPost('storbox_account_id')) ."', `validation_code` = '". DBM::escape(extractPost('validation_code')) ."' WHERE id = {$uid}";
		die(json_encode(array('error' => false)));
		// if(DBM::query($sql, $database_link)) {
		// 	die(json_encode(array('error' => false)));
		// }
		// else {
		// 	die(json_encode(array('error' => true, 'query' => $sql)));
		// }
	}

	else {
		die(json_encode(array('error' => true, 'query' => $sql)));
	}
}

if (isset($_GET['registration_done'])) {

	$notification[] = $language['registration_done'];
}
$url = CONSENT_URL;


	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		header('Content-Type: application/json');
		$count = 1;
		header('Content-Type: application/json');
		foreach( $_POST as $k => $v ) {
			if (strpos($k, 'radio') !== false) {
    			$radioValues[$k] = $v;

					$query = 'SELECT * FROM `bc_info_additional` WHERE `id`='.preg_replace("/[^0-9]/","",$k);
					if($query = DBM::queryData($query, $database_link)) {
						while($row = DBM::fetchObject($query)) {
								if( $row->value !=$v) {
									$error['questionary'] = $language['questionary_incorrect'];
									break;
								}
						}
					}
				}
		}





		$registration_date = date('Y-m-d H:i:s');
		$email = trim(extractPost('email'));
		$remail = trim(extractPost('emailAgain'));	
		$nemid = trim(extractPost('nemid'));
		$accept_in_project = extractPost('accept_in_project')?'Y':'N';
		$similar_projects = extractPost('acceptDedidentifedDataAccessed')?'Y':'N';
		$contact_me = extractPost('contatMeIfProjectExpanded')?'Y':'N';
		$newsletter = extractPost('sendNewsletters')?'Y':'N';
		$phone = extractPost('phone');
		$rphone = extractPost('phoneAgain');
		$isSome = extractPost('isSome');

if($isSome) {

			$sbemail = $email;
			$rsbemail = $remail;
			$sbphone = $phone;
			$rsbphone = $rphone;
		}
		if($setting_data['contactinfo_optional'] == 2) {

			if(!check_email($email)) {$error['email'] = $language['email_format_error'];}

			if( $phone != $rphone && $phone != '' ) {$error['phone'] = $language['phone_again'];}
			if( $email != $remail && $email != '' ) {$error['email'] = $language['phone_again'];}
		}


		if(NEMID_AUTH && $nemid == '') $error['nemid'] = $language['verify_nemid'];

		//check email unique
		if( !isset($error) ) {
			if($phone != '') {

				$unique_query = "SELECT * FROM `bc_users` WHERE `phone` = '".DBM::escape($phone)."'";
				if($result = DBM::queryData($unique_query, $database_link)) {

					$row = DBM::numRows($result);
				}
				if( $row > 0) $error['phone_unique_error'] = $language['unique_phone'];

			}  else $phone = NULL;
		}


		if( !isset($error) ) {
			if($email != '') {

				$unique_query = "SELECT * FROM `bc_users` WHERE `email` = '".DBM::escape($email)."'";

				if($result = DBM::queryData($unique_query, $database_link)) {

					$row = DBM::numRows($result);
				}
				if( $row > 0) $error['email_unique_error'] = $language['email_unique_error'];

			} else $email = NULL;
		}


		if( !isset($error) ) {
			
			
			$insert_query = "INSERT INTO
										`bc_users`
									SET
										`email` = '".DBM::escape($email)."',
										`phone` = '".DBM::escape($phone)."',
										`registration_date` = '".DBM::escape($registration_date)."',
										`nemid` = '". DBM::escape($nemid) ."',
										`accept_in_project` = '".DBM::escape($accept_in_project)."',
										`similar_projects` = '".DBM::escape($similar_projects)."',
										`contact_me` = '".DBM::escape($contact_me)."',
										`newsletter` = '".DBM::escape($newsletter)."'
							";


			if( DBM::query($insert_query, $database_link) ) {
				$insert_user_id = DBM::insertID($database_link);
				$_SESSION['registered_user'] = $insert_user_id;
				$dis = array();
				if(isset($_POST['selectedDiseases']))
					{foreach($_POST['selectedDiseases'] as $v) {
						if(is_numeric($v)) {
							$query = "SELECT * FROM `bc_disease` WHERE `id` = ".$v.";";
							if($query = DBM::queryData($query, $database_link)) {
								while($row = DBM::fetchObject($query)) {
									$query1 = "INSERT INTO
													`bc_user_disease`
														SET
													`user_id` = ". DBM::escape($insert_user_id) .",
													`disease_id` = ". DBM::escape($v) ."
													";
									DBM::query($query1, $database_link);
									$dis[] = $row->title;
								}
							}
							
						}
						else {
							if(strlen(trim($v)) > 3 ) {
								$dis[] = $v;
								$query = "SELECT * from `bc_disease` WHERE `title` = '" . DBM::escape(trim($v)) . "';";
								$insertNew = true;
								if($query = DBM::queryData($query, $database_link)) {
									$rownum = DBM::numRows($query);
									if($rownum>0) {
										$insertNew = false;
										while($row = DBM::fetchObject($query)) {
											$query1 = "INSERT INTO
															`bc_user_disease`
																SET
															`user_id` = ". DBM::escape($insert_user_id) .",
															`disease_id` = ". $row->pk ."
															";
											DBM::query($query1, $database_link);
										}
									}
								}

								if($insertNew) {
									$query = "INSERT INTO
														`bc_disease`
															SET
														`title` = '". DBM::escape(trim($v)) ."',
														`language` = '" . DBM::escape($siteData['language']) . "',
														`active` = 'N';
									";
									if( $query = DBM::query($query,$database_link) ) {
										$disease_id = DBM::insertID($database_link);
										$query1 = "INSERT INTO
														`bc_user_disease`
														SET
														`user_id` = ". DBM::escape($insert_user_id) .",
														`disease_id` = ". DBM::escape($disease_id) ."
														";

										DBM::query($query1, $database_link);
									}
								}
							}
						}


						if(NEMID_AUTH && isset($url)) {
							$data = array(
								'email' => $email,
								'phone' => $phone,
								'registration_date' => $registration_date,
								'nemid' =>  $nemid,
								'accept_in_project' =>  $accept_in_project,
								'similar_projects' =>  $similar_projects,
								'contact_me' =>  $contact_me,
								'newsletter' =>  $newsletter
							);

							// use key 'http' even if you send the request to https://...
							$options = array(
							    'http' => array(
							    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
							    'method'  => 'POST',
							    'content' => http_build_query(array('data' => json_encode($data)))
							    )
							);
							$context  = stream_context_create($options);
							$result = file_get_contents($url, false, $context);
							if ($result === FALSE) { /* Handle error */ }
						}
					}
				}
				
				echo json_encode(array('error' => false, 'message' => 'success'));
			}
			else {
				echo json_encode(array('error' => 'unknown'));
			}


		}
		else {
			
			echo json_encode(array('error' => $error));
		}


		exit;

	}


	//registration info

	$query = "SELECT
					`bc_sections`.`id`,
					`bc_sections`.`name`,
					`bc_sections`.`type`,
					`bc_sections`.`style`,
					`bc_sections`.`slug`
				FROM
					`bc_sections`
				WHERE
					`bc_sections`.`language` = '".$siteData['language']."' AND
					(`bc_sections`.`style` = 2 OR
						(`bc_sections`.`style` IN(3,4,5,6) AND `bc_sections`.`type` = 2)) AND
					`bc_sections`.`active` = 'Y'
				ORDER BY `bc_sections`.`sort`";

	if($query = DBM::queryData($query, $database_link)) {

		while($row = DBM::fetchObject($query)) {

			$additional_info = [];

			$i = 0;
			$content = info_by_id ($siteData['language'], $row->id, $count = 1, $sort_by = " `bc_info`.`start_date` DESC ");

			if($row->type == 21) {
				$additional_query = "
					SELECT * FROM
						`bc_info_additional`
					WHERE
						`info_id` = '".$content[0]['id']."' AND
						`language` = '".$siteData['language']."'";

				if($additional_result = DBM::queryData($additional_query, $database_link)) {

					
					while($additional_row = DBM::fetchObject($additional_result)) {
						$additional_info[$i] = $additional_row;
						$i++;
					}
				}
			}

			if($row->style == 4) {

				$final_page = array('section' => $row,
									'content' => $content,
									'additional' => $additional_info
									);
			}

			$infos[] = array('section' => $row,
							'content' => $content,
							'additional' => $additional_info
							);
		}




		//disease list
		$query = "SELECT * FROM `bc_disease` WHERE `language` = '".$siteData['language']."' AND `active` = 'Y' ORDER BY `title`";

		if($result = DBM::queryData($query, $database_link)) {

			while($row = DBM::fetchObject($result)) {

				$disease[] = $row;
			}

		$smarty->assign('disease', $disease);
		}
	}

	//array for meta tags

	$og_array = array('title' => $get_info_data->title,
					'description' => strip_tags($get_info_data->section_description),
					'photo' => $get_info_data->thumbnail,
					'url' => ''
					);

$smarty->assign('og_array', $og_array);
$smarty->assign('nemid_auth', NEMID_AUTH);
$smarty->assign('phone_pattern', $phone_pattern);
$smarty->assign('phone_patternX', $phone_patternX);
$smarty->assign('error', $error);
$smarty->assign('warning', $warning);
$smarty->assign('notification', $notification);
$smarty->assign('infos', $infos);
$smarty->assign('final_page', $final_page);
$smarty->assign('content_file', 'registration.tpl');

?>
