<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle(" ");
CJSCore::Init(array('ajax'));
?> 
<script>
    function load(id, elements) {
        var numpage = Number(BX('link').getAttribute('num'));
        BX.adjust(BX('link'), {attrs: {'num': numpage+Number(elements)}});
        BX.ajax.insertToNode('/ajax/elements.php?page='+numpage,id);
    }
</script>
<div id="news"></div>
<a href="#" onclick="load('news',2);" id='link' num="2">загрузить</a>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>