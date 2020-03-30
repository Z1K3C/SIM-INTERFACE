<?php
$DSN = "SQL_1";
$USER = 'sa';
$PASS= 'otrogato';
$LINK=odbc_connect($DSN, $USER, $PASS);
$QUERY_01 = odbc_exec($LINK,"SELECT * FROM [AXIS].[dbo].[ROBOT_AXIS]");
$ROW = array();
while($TABLE_01 = odbc_fetch_object($QUERY_01)){
	$ROW[]=$TABLE_01 -> AXIS_N;
}
echo json_encode($ROW);
?>
