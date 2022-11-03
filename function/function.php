<?php
ini_set('display_errors', 1);
error_reporting(E_ALL&~E_NOTICE&~E_STRICT);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require 'vendor/autoload.php';

function sendmail($from, $to, $cc, $bcc, $subject, $body, $debug = false)
{
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
    $mail->isSMTP(); //Send using SMTP
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
    $mail->SMTPAuth = true; //Enable SMTP authentication
    $mail->Username = 'meetprajapati20@gnu.ac.in'; //SMTP username
    $mail->Password = 'gnu15102020'; //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
    $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->SetFrom($from);
    $mail->AddAddress($to);
    $mail->Subject = $subject;
    $mail->IsHTML(true);
    $mail->Body = $body;
    if ($cc != "") {$mail->AddCC($cc);}
    if ($bcc != "") {$mail->addBCC($bcc);}
    if (!$mail->Send() && $debug) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else{
        return 1;
    }
}

function sql($sql, $con = "")
{
// echo $sql;
    global $dbh;
    if (!$con) {$con = $dbh;}
    if ($con && $sql != "") {
        $result = mysqli_query($con, $sql) or print($sql . "<br>" . mysqli_error($con));
    }
    if (is_object($result)) {
        $arr_table_result = mysql_fetch_full_result_array($result);
        mysqli_free_result($result);
    }
    return $arr_table_result;
}
function mysql_fetch_full_result_array($result)
{
    $table_result = array();
    $r = 0;

    while ($row = mysqli_fetch_assoc($result)) {
        $arr_row = array();
        $c = 0;
        foreach ($row as $k => $v) {
            $arr_row[$k] = $v;
        }
        $table_result[$r] = $arr_row;
        $r++;
    }
    return $table_result;
}
function mysql_query_custom($query, $con = "")
{
    global $dbh;
    if (!$con) {$con = $dbh;}
    // log the query somewhere for debugging purpose
    return mysqli_query($dbh, $query) or die("Error: " . $query . "<br>" . $dbh->error);
}

function insert($table, $cols, $data)
{
    global $dbh;
    $q = "INSERT INTO " . $table . "(" . implode(",", $cols) . ") VALUES('" . implode("','", $data) . "');";
    return mysql_query_custom($q);
}

function update($table, $where, $data, $cols)
{
    global $dbh;
    $sets = array();
    foreach ($data as $k => $v) {
        $sets[$k] = $cols[$k] . "='" . $v . "'";
    }
    $q = "UPDATE `" . $table . "` SET " . implode(", ", $sets) . " WHERE $where";
    $data = "";
    return mysql_query_custom($q);
}
function delete($table, $whr)
{
    global $dbh;
    $q = "delete from " . $table . " where $whr";
    return mysql_query_custom($q);
}
function get($_param)
{
    $_rq = $_REQUEST;

    if ($_param == "brandid" && $_GET["id"] != "") {
        $_rq["brandid"] = $_GET["id"];
    }
    if ($_param == "brandid" && $_GET["brand"] != "") {
        $_rq["brandid"] = $_GET["brand"];
    }
    $ret = trim(@$_rq[$_param]);

    return queryclean($ret, $_param);
}
function queryclean($var, $param = '')
{

    $acceptable_string_values = str_split("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789 -_?!.,|@:/=&$");

    if (is_array($var)) {
        foreach ($var as $i => $v) {
            $var[queryclean($i)] = queryclean($v);
        }
    } else {
        if (is_numeric($var)) {
            return $var;
        } elseif (is_string($var)) {
            $aux = str_split($var);
            return implode(array_intersect($aux, $acceptable_string_values));
        }
    }
}


// Custome Function

?>