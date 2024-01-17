<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

foreach($arResult as $arUser){
    ?><br>user fields - <?=$arUser['LOGIN'].' - '.$arUser['EMAIL'].' - '.$arUser['NAME'].' - '.$arUser['LAST_NAME']?><?
}