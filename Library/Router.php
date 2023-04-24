<?php

/**
 * Router
 */
$url = explode("/", $_REQUEST['page']);
$page = strtolower($url[0]);
if ($page == "" || $page == "HomePage") {
	$page = "HomePage";
} else {
	if(!file_exists(DIR_PAGES . "{$page}.php")){
		$page = "404";
	}
}
require_once(DIR_PAGES . "{$page}.php");