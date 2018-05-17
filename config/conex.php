<?php
/*
* Autor: Romell Jaramillo
* email: romelljaramillo@gmail.com
*/
require_once('setting.php');

$db = new mysqli();
@$db->connect(_DB_SERVER_, _DB_USER_, _DB_PASSWD_, _DB_NAME_);

	  if ( $db->connect_errno ) 
	  { 
		  echo "Fallo al conectar a MySQL: ". $db->connect_error; 
		  return;     
	  } 

	  mysqli_set_charset($db, "utf8");
