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

$filter = Array
(
	"GROUPS_ID"           => Array(1)
);
$rsUsers = CUser::GetList($filter);

while($rsUsers->NavNext(true, "f_")) {
	$rsUser = CUser::GetByID($f_ID);
	$arUser[] = $rsUser->Fetch();

}

$admiEmail = $arUser['EMAIL'];

//Текущий пользователь
$currUser = $USER->GetEmail();

//Формируем сообщение
$mezz = "<div style='text-align: left;'>".nl2br($textMessage)."</div>";
/* получатели */
$to= $currUser;

/* тема/subject */
$subject = "Вы отправили ".$_POST['formname']." с сайта www.sezlipetsk.ru";

$subject2 = "Пользователь отправил ".$_POST['formname']." с сайта www.sezlipetsk.ru";
/* сообщение */
$message = $mezz;

/* Для отправки HTML-почты вы можете установить шапку Content-type. */
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";


/* и теперь отправим автору это сообщение */
mail($to, $subject, $message, $headers);

//Отправим админу такоеже письмо
mail($admiEmail, $subject2, $message, $headers);

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
