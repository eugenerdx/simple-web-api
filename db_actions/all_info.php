<?php
//
//  all_users.php
//  web-api backend
//
//  Created by eugenerdx on 28.03.16.
//  Copyright © 2016 Evgeny Ulyankin. All rights reserved.
//

    require($_SERVER['DOCUMENT_ROOT'] . '/webapi/db_manager/db_manager.php');
    
	$connection = DatabaseManager::getInstance()->connect();
	$result_set = DatabaseManager::getInstance()->query('SELECT * FROM user_info');

	$records = array();

	while($record = mysqli_fetch_assoc($result_set))
	{
		$records[] = $record;		
	}
	
	echo json_encode($records);
?>
