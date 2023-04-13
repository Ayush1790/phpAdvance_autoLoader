<?php
$conn=mysqli_connect("mysql-server","root","secret","testDb");
date_default_timezone_set("Asia/Calcutta");
error_log('[' . date("d/m/Y h:i:sa") . ']' ." " ."\n", 3 ,"./log/db.log");
session_start();