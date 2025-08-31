<?php
header("Access-Control-Allow-Origin:*");
header("Content-Type: application/json");
$name = $_GET["name"];
$email = $_GET["email"];
$mobile = $_GET["mobile"];
$password = $_GET["password"];
$c_password = $_GET["c_password"];
$results = [
  "name_error" => "",
  "email_error" => "",
  "mobile_error" => "",
  "password_error" => "",
  "c_password_error" => "",
  "dberror" => "",
  "success" => ""
];
$error_flag = true;

$page = "Back-end Validation\n";
// echo ($page);

function validation($var_ip, $error_msg)
{
  if (empty($var_ip)) {
    $results[$var_ip . "_error"] = $error_msg;
    $error_flag = false;
    return false;
  } else {
    $results[$var_ip . "_error"] = "";
    return true;
  }
}

validation($name, "Enter Your Name");

if (validation($email, "Enter Your Email")) {
  $emailReg = "/^[a-z0-9._]+@[a-z0-9]+\.[a-z]{2,}$/";
  if (preg_match($emailReg, $email)) {
    $results["email_error"] = "";
  } else {
    $results["email_error"] = "Invalid Email Format";
    $error_flag = false;
  }
}

if (validation($mobile, "Enter Your Mobile")) {
  $mobilereg = "/^[0-9]{10}$/";
  if (preg_match($mobilereg, $mobile)) {
    $results["mobile_error"] = "";
  } else {
    $results["mobile_error"] = "Plese enter 10digit number";
    $error_flag = false;
  }
}

$pass_flag = true;
if (!validation($password, "Plz Enter the password")) {
  $pass_flag = false;
}

if (!validation($c_password, "Plz Enter the c_password")) {
  $pass_flag = false;
}

if ($pass_flag) {
  if ($password != $c_password) {
    $results["c_password_error"] = "invalid Password";
    $error_flag = false;
  } else {
    $results["c_password_error"] = "valid password";
  }
}
if ($error_flag) {
  $results["success"] = "Successfull validation fb";
}

echo json_encode($results);
?>