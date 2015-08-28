<?
global $MESS;
$strPath2Lang = str_replace("\\", "/", __FILE__);
$strPath2Lang = substr($strPath2Lang, 0, strlen($strPath2Lang)-strlen("/install/index.php"));
include(GetLangFileName($strPath2Lang."/lang/", "/install/index.php"));

if(class_exists("hmweb_medialibraryslider")) return;

Class hmweb_medialibraryslider extends CModule
{
	var $MODULE_ID = "hmweb.medialibraryslider";
	var $MODULE_VERSION;
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME;
	var $MODULE_DESCRIPTION;

	function hmweb_medialibraryslider()
	{
		$this->MODULE_NAME = GetMessage("HMWEB_INSTALL_NAME");
		$this->MODULE_DESCRIPTION = GetMessage("HMWEB_INSTALL_DESCRIPTION");
		$this->PARTNER_NAME = "HMweb";
		$this->PARTNER_URI = "http://hmweb.pw/";

		$arModuleVersion = array();
		$path = str_replace("\\", "/", __FILE__);
		$path = substr($path, 0, strlen($path) - strlen("/index.php"));
		include($path."/version.php");

		if(is_array($arModuleVersion) && array_key_exists("VERSION", $arModuleVersion))
		{
			$this->MODULE_VERSION = $arModuleVersion["VERSION"];
			$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
		}
	}

	function DoInstall()
	{
		if(!file_exists($_SERVER["DOCUMENT_ROOT"]."/bitrix/components/hmweb"))
			mkdir($_SERVER["DOCUMENT_ROOT"]."/bitrix/components/hmweb");

		CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".$this->MODULE_ID."/install/components/hmweb", $_SERVER["DOCUMENT_ROOT"]."/bitrix/components/hmweb", true, true);
		RegisterModule($this->MODULE_ID);
	}

	function DoUninstall()
	{
		DeleteDirFilesEx("/bitrix/components/hmweb/medialibrary.slider");
		UnRegisterModule($this->MODULE_ID);
	}
}
?>