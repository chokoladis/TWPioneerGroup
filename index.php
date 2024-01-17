<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>
<?$APPLICATION->ShowPanel()?>

<?
// задание 3
$APPLICATION->IncludeComponent(
	"abc:users.list",
	"",
	[]
);

echo '<br>---<br>';

// задание 4
$APPLICATION->IncludeComponent(
	"abc:catalog.section", 
	".default", 
	array(
		"SECTION_ID" => "2",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);
?>
<!-- Задание 5 -->
<form action="/handler.php" method="POST">
	<input type="email" name="EMAIL" require>
	<textarea name="TEXT" cols="30" rows="10" require></textarea>
	<input type="submit" value="send">
</form>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>