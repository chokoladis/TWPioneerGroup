<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

foreach($arResult as $arItem){
    ?><b>product<br>id - <?=$arItem['ID']?><br>name - <?=$arItem['NAME']?></b><?
}