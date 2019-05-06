<?php
// db.inc.php
$hostName = "localhost:/usr/cis/var/triton.sock";

$databaseName = "atamba1db";
$username = "atamba1";
$password = "Cosc*etem";

// Show an error and stop the script
function showerror()
{
if (mysql_error())
die("Error " . mysql_errno() . " : " . mysql_error());
else
die ("Could not connect to the DBMS");
}
?>