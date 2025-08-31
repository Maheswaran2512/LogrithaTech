<?php
header("Access-Control-Allow-Origin:*");
header("Content-Type: application/json");
$name = $_GET["name"];
$email = $_GET["email"];
$mobile = $_GET["mobile"];
$password = $_GET["password"];
$c_password = $_GET["c_password"];
$error_flag = true;

$page = "Back-end Validation\n";
echo ($page);

function validation($var_ip, $error_msg)
{
  if (empty($var_ip)) {
    echo ($error_msg);
    return false;
  } else {
    echo ($var_ip . "\n");
    return true;
  }
}

validation($name, "Enter Your Name");

if (validation($email, "Enter Your Email")) {
  $emailReg = "/^[a-z0-9._]+@[a-z0-9]+\.[a-z]{2,}$/";
  if (preg_match($emailReg, $email)) {
    echo ($email . "\n");
  } else {
    echo "Invalid Email Format";
  }
}

if (validation($mobile, "Enter Your Mobile")) {
  $mobilereg = "/^[0-9]{10}$/";
  if (preg_match($mobilereg, $mobile)) {
    echo ($mobile . "\n");
  } else {
    echo "Plese enter 10digit number";
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
    echo "invalid Password";
  } else {
    echo "valid password";
  }
}
?>