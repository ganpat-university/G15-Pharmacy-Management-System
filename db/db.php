<?php
$db_username = "root";
$db_password = "meet123";
$db_name = "pharma";
$db_host = "localhost";
$db_port = "3307";
$dbh=mysqli_connect($db_host, $db_username, $db_password,$db_name,$db_port);


mysqli_select_db($dbh,$db_name) or die ('You need to set your database connection in vsadmin/db_conn_open.php...</td></tr></table></body></html>');

function isValid($str) {
    return !preg_match('/[^A-Za-z0-9. #,\\-+\/$_&:?=]/', $str, $matches);
}
foreach (@$_GET as $_key=>$_var){
    if(!isValid(@$_GET[$_key])){
        echo "please enter valid input";die;
    }
}
?>