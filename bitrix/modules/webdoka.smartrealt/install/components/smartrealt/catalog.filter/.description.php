<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("R_COMPONENT_NAME"),
	"DESCRIPTION" => GetMessage("R_COMPONENT_DESCRIPTION"),
	"ICON" => "/images/filter.gif",
	"PATH" => array(
		"ID" => "service",
		"CHILD" => array(
			"ID" => "webdoka.smartrealt",
			"NAME" => GetMessage("R_SMARTREALT_CATALOG"),
            "SORT" => 30,
            "CHILD" => array(
                "ID" => "smartrealt_cmpx",
            ),
		),
	),
);
?>