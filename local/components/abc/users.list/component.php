<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$queryAdminUsers = CUser::GetList(
    '','',
	[
        'GROUPS_ID' => 1,
    ],
	[
        'FIELDS' => ['LOGIN', 'EMAIL', 'NAME', 'LAST_NAME']        
    ]
);
while($arUser = $queryAdminUsers->Fetch()){ 
    $arResult[] = $arUser;
}

$this->IncludeComponentTemplate();