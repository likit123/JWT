<?php

	require_once 'token_utils.php';

	$en=$_GET['en'];

	$is_jwt_valid = is_token_valid($en);

	if($is_jwt_valid === FALSE) {
		echo 'Can not Access';
	} else {
		$a=json_decode($is_jwt_valid,TRUE);
		echo "id = ".$a["id"]."<br>";
		echo "myName = ".$a["myName"]."<br>";
	}
?>