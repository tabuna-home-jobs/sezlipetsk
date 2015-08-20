<?$APPLICATION->IncludeComponent(
	"bitrix:search.suggest.input",
	"top",
	array(
		"NAME" => "q",
		"VALUE" => "",
		"INPUT_SIZE" => 15,
		"DROPDOWN_SIZE" => 10,
	),
	$component, array("HIDE_ICONS" => "Y")
);?>
