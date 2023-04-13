<?php
// task 2 started
echo "<h1>Task 2</h1>";
$conn=mysqli_connect("mysql-server","root","secret","testDb");
if(!$conn){
    die("Connection not eshtablished");
}else{
    date_default_timezone_set("Asia/Calcutta");   
    error_log('[' . date("d/m/Y h:i:sa") . ']' ." " ."\n", 3 ,"./log/db.log");
}
?>
<a href="./log/db.log">View Logs</a>