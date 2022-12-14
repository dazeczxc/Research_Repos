<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "id17851781_bupc";

	$db = new mysqli($host, $username, $password, $database);

    if($db->connect_error){
        echo 'Not Connected';
    }else{

    }
    ?>
    
    
    
