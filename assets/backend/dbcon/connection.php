<?php

$host = "localhost"; /* Host name */
$user = "pranav"; /* User */
$password = "PranavBh#1"; /* Password */
$dbname1 = "userform"; /* Database name 1 */

$con = mysqli_connect($host, $user, $password, $dbname1);
$con1 = mysqli_connect($host, $user, $password, $dbname1);
session_start();
if ($con) {
} else {
         echo "Unable to Connect Database";
}
if ($con1) {
} else {
         echo "Unable to Connect Database";
}
?>
