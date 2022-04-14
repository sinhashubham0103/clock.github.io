<?php
$connect = sqlsrv_connect(“shubhamsinha.database.windows.net”, “shubham”, “Vnitcse@104”); 
$user_info = “INSERT INTO students 
(roll,name,marks) VALUES ('$_POST[roll]', '$_POST[name]','$_POST[username]')”; 
echo “Your information was added to the database.”;
sqlsrv_close($connect); 
?>
