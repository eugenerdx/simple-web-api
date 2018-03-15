<?php
//
//  add_user.php
//  web-api backend
//
//  Created by eugenerdx on 28.03.16.
//  Copyright © 2016 Evgeny Ulyankin. All rights reserved.
//

    require($_SERVER['DOCUMENT_ROOT'] . '/webapi/db_manager/db_manager.php');

	$connection = DatabaseManager::getInstance()->connect();

	$user_id = $_POST['user_id'] ?? '';
	$first_name = $_POST['first_name'] ?? '';
	$last_name = $_POST['last_name'] ?? '';
	$photo = $_POST['photo'] ?? '';
	$about = $_POST['about'] ?? '';
	$number_of_peoples = $_POST['number_of_peoples'] ?? '';
	$price = $_POST['price'] ?? '';
	$position_latitude = $_POST['position_latitude'] ?? '';
	$position_longtitude = $_POST['position_longtitude'] ?? '';
	$vk_token = $_POST['vk_token'] ?? '';
	$udid = $_POST['udid'] ?? '';
	$timestamp = $_POST['timestamp'] ?? '';
	$start_event = $_POST['start_event'] ?? '';

	$sql = "INSERT INTO user_info (user_id, first_name, last_name, photo, about, number_of_peoples, price, position_latitude, position_longtitude, vk_token, udid, timestamp, start_event) VALUES ('$user_id','$first_name', '$last_name', '$photo', '$about', '$number_of_peoples', '$price', '$position_latitude', '$position_longtitude', '$vk_token', '$udid', '$timestamp', '$start_event')";

	if (!empty($user_id))
	{
		DatabaseManager::getInstance()->query($sql);
	}
?>
