<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}
CModule::IncludeModule("support");

	$arResult['rs'] = CTicket::GetList(
		$by="s_id",
		$order="asc",
		array('OWNER' => $USER->GetEmail()),
		$isFiltered,
		"Y",
		"Y",
		"Y",
		false,
		Array("SELECT" => array("*" ))
	);


$mumMess = 1;
$textMessage = "";
$rsUser = CUser::GetByID($USER->GetID());
$arUser = $rsUser->Fetch();
$files = [];
while (isset($_POST["MESSAGE_" . $mumMess])) {
	$textMessage .= $_POST["MESSAGE_" . $mumMess];
	$mumMess += 1;
}

foreach ($_FILES as $key => $file) {
	if ($file["tmp_name"] != "") {
		$files[] = [
			"name" => $file["name"],
			"type" => $file["type"],
			"tmp_name" => $file["tmp_name"],
			"error" => "0",
			"size" => $file["size"],
			"MODULE_ID" => "support",
		];
	}
}
if ($textMessage != "") {
	$arFields = array(
		'SITE_ID' => SITE_ID,
		'TITLE' => $_POST['formname'],
		'MESSAGE' => $textMessage,
		'HIDDEN' => 'N',
		'FILES' => $files,
	);


	$ID = CTicket::SetTicket($arFields, $ID, "Y", $NOTIFY = "Y");
	$arResult["MESSAGE_SEND"] = "OK";
	$_POST = [];
}




$this->IncludeComponentTemplate();
