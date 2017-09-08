<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->RestartBuffer();
// Список новостей
$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	".default",                            // [bottom, .default, official, table]
	array(        
		// region Основные параметры         
		"IBLOCK_TYPE"   => "news",              // Тип информационного блока (используется только для проверки) : array ( '-' => ' ', 'catalog' => '[catalog] Каталоги', 'news' => '[news] Новости', 'offers' => '[offers] Торговые предложения', 'services' => '[services] Сервисы', 'references' => '[references] Справочники', )
		"IBLOCK_ID"     => "1",  // Код информационного блока : array ( 1 => 'Новости', 2 => 'Одежда', 3 => 'Одежда (предложения)', )
		"NEWS_COUNT"    => $_REQUEST['page'],                // Количество новостей на странице
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
	)
);

die();
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>