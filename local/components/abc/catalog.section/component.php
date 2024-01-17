<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CModule::IncludeModule("iblock");

$iblockID = 1; // iblocktools || arParams
$sectionID = intval($arParams['SECTION_ID']);

$querySectionItems = CIBlockElement::GetList(
    [],
    [
        'IBLOCK_ID' => $iblockID,
        'SECTION_ID' => $sectionID,
    ],
    false,[],
    [
        'ID', 'NAME'
    ]
);
while($arItem = $querySectionItems->Fetch()){ 
    $arResult[] = $arItem;
}

$this->IncludeComponentTemplate();