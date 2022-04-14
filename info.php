<?php
$connect = sqlsrv_connect(“shubhamsinha.database.windows.net”, “shubham”, “Vnitcse@104”); 
$user_info = “INSERT INTO students 
(roll,name,marks) VALUES ('$_POST[roll]', '$_POST[name]','$_POST[marks]')”; 
$rs = sqlsrv_query($connect, $user_info);
if($rs)
{
	echo "Contact Records Inserted";
}
sqlsrv_close($connect); 
?>
