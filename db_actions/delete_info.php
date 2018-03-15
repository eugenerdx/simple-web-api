<?php
//
//  delete_info.php
//  web-api backend
//
//  Created by eugenerdx on 28.03.16.
//  Copyright © 2016 Evgeny Ulyankin. All rights reserved.
//

    require($_SERVER['DOCUMENT_ROOT'] . '/webapi/db_manager/db_manager.php');

	$connection = DatabaseManager::getInstance()->connect();

	$user_id = $_POST['user_id'] ?? '';
	
	$sql = $sql = "DELETE FROM user_info WHERE user_id = '$user_id'";

	if (!empty($user_id))
	{
		DatabaseManager::getInstance()->query($sql);
	}
?>
