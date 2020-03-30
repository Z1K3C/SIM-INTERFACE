<?php
$DSN = "SQL_1";
$USER = "sa";
$PASS = "otrogato";
$LINK = odbc_connect($DSN,$USER,$PASS);

$J1 = $_GET["phpj1"];
$J2 = $_GET["phpj2"];
$J3 = $_GET["phpj3"];
$J4 = $_GET["phpj4"];
$J5 = $_GET["phpj5"];

$QUERY = odbc_exec($LINK, " UPDATE [AXIS].[dbo].[ROBOT_AXIS]
                            SET [AXIS_N] = '$J1'
                            WHERE [ID] = 1
                            UPDATE [AXIS].[dbo].[ROBOT_AXIS]
                            SET [AXIS_N] = '$J2'
                            WHERE [ID] = 2
                            UPDATE [AXIS].[dbo].[ROBOT_AXIS]
                            SET [AXIS_N] = '$J3'
                            WHERE [ID] = 3
                            UPDATE [AXIS].[dbo].[ROBOT_AXIS]
                            SET [AXIS_N] = '$J4'
                            WHERE [ID] = 4
                            UPDATE [AXIS].[dbo].[ROBOT_AXIS]
                            SET [AXIS_N] = '$J5'
                            WHERE [ID] = 5");
odbc_close($LINK);
?>