<?php
AddEventHandler("esol.importexportexcel", "OnEndImport", "OnEndImport");

function OnEndImport($pid, $arEventData)
{
	file_put_contents(realpath(dirname(__FILE__).'/../..').'/upload/1C/OK.txt', "");
	unlink ("/upload/1C/Izmeneniy.csv",[realpath(dirname(__FILE__).'/../..')] );
}



?>
