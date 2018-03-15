<?php
//
//  update_info.php
//  web-api backend
//
//  Created by eugenerdx on 28.03.16.
//  Copyright © 2016 Evgeny Ulyankin. All rights reserved.
//
    
    require($_SERVER['DOCUMENT_ROOT'] . '/webapi/db_manager/db_manager.php');

    $connection = DatabaseManager::getInstance()->connect();

    $user_id = $_POST['user_id'] ?? '';

    foreach (array('first_name','last_name','photo','about','number_of_peoples','price','position_latitude','position_longtitude','vk_token','udid','timestamp','start_event') as $column)
    {
        $changed_column = $_POST[$column] ?? '';
        if (!empty($changed_column) && !empty($user_id)) 
        { 
            $sql = "UPDATE user_info SET $column='$_POST[$column]' WHERE user_id = '$user_id'";
            DatabaseManager::getInstance()->query($sql);
        }
    }
?>