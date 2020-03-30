<?php
$DSN = "SQL_1";
$USER = "sa";
$PASS = "otrogato";
$LINK = odbc_connect($DSN,$USER,$PASS);
$QUERY = odbc_exec($LINK, " SELECT * FROM 
                            [AXIS].[dbo].[ROBOT_AXIS]");
$ROW = array();

while($TABLE = odbc_fetch_object($QUERY)){
    $ROW[] = $TABLE -> AXIS_N;
}
echo json_encode($ROW);
odbc_close($LINK);
?>