<?php
$host = "localhost"; /* Host name */
$user = "sageuni_registration_form"; /* User */
$password = "sageuni_registration_form"; /* Password */
$dbname = "sageuni_registration_form"; /* Database name */

$conn = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}?>