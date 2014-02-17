<?php

/**
 * @author loopByte
 * @copyright 2014
 */

	$mysqli = new mysqli("127.0.0.1", "simplecms", "simplecms", "cms");
	
	if($mysqli->connect_errno){
		exit($mysqli->connect_error);
	}