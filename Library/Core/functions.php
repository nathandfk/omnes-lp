<?php

function site_title () {
	echo "LP";
}

function set_style (string $id, string $link) {
	return "<link id='$id' href='$link' rel='stylesheet'>";
}

function set_script (string $id, string $link, bool $defer) {
	$defer = $defer ? "defer" : "";
	return "<script src='$link' id='$id' $defer></script>";
}


// function api(){
//     $link = "https://swapi.dev/api/people/?format=json";
//     $data = file_get_contents($link);
//     $obj = json_decode($data);
//     return $obj;
// }

// function selectAPI($array){
// 	$datas = [];
// 	foreach ($array as $value) {
// 		$link = $value."?format=json";
// 		$data = file_get_contents($link);
// 		$obj = json_decode($data);
// 		array_push($datas, $obj);
// 	}
//     return $datas;
// }