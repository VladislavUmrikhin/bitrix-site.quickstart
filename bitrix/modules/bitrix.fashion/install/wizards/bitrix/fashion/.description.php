<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if(!defined("WIZARD_DEFAULT_SITE_ID") && !empty($_REQUEST["wizardSiteID"]))
	define("WIZARD_DEFAULT_SITE_ID", $_REQUEST["wizardSiteID"]);

$arWizardDescription = Array(
	"NAME" => GetMessage("PORTAL_WIZARD_NAME"),
	"DESCRIPTION" => GetMessage("PORTAL_WIZARD_DESC"),
	"VERSION" => "1.1.0",
	"START_TYPE" => "WINDOW",
	"WIZARD_TYPE" => "INSTALL",
	"IMAGE" => "/images/ru/solution.png",
	"PARENT" => "wizard_sol",
	"TEMPLATES" => Array(
		Array("SCRIPT" => "wizard_sol")
	),
	"STEPS" => array(),
);
//if(COption::GetOptionString("store", "wizard_installed", "N", false, WIZARD_SITE_ID) == "Y")
//{
	if(defined("WIZARD_DEFAULT_SITE_ID"))
	{
		$arWizardDescription["STEPS"] = Array(
			"SelectTemplateStep",
			"SelectThemeStep",
			"SiteSettingsStep",
			"ShopSettings",
			"PersonType",
			"PaySystem",
			"DataInstallStep",
			"FinishStep"
		);
	}
	else
	{
		$arWizardDescription["STEPS"] = Array(
			"SelectSiteStep",
			"SelectTemplateStep",
			"SelectThemeStep",
			"SiteSettingsStep",
			"ShopSettings",
			"PersonType",
			"PaySystem",
			"DataInstallStep",
			"FinishStep"
		);
	}
/*
}
else
{
	if(defined("WIZARD_DEFAULT_SITE_ID"))
		$arWizardDescription["STEPS"] = Array("SelectTemplateStep", "SelectThemeStep", "SiteSettingsStep", "DataInstallStep" ,"FinishStep");
	else
		$arWizardDescription["STEPS"] = Array("SelectSiteStep", "SelectTemplateStep", "SelectThemeStep", "SiteSettingsStep", "DataInstallStep" ,"FinishStep");
}
*/
?>