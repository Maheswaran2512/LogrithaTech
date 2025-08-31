<?php

header("Access-Control-Allow-Origin:*");
header('Content-Type: application/json');

$name = "";
$email = "";
$mobile = "";
$c_password = "";
$error_flag = true;
$results = [];
$results["name_error"] = "";
$results["email_error"] = "";
$results["mobile_error"] = "";
$results["password_error"] = "";

// name Validation
if (isset($_GET["name"])) {
    if (trim($_GET["name"]) != "") {
        $name = htmlspecialchars($_GET["name"]);
        $results["name_error"] = "";
    } else {
        $results["name_error"] = "Name Value Not Found";
        $error_flag = false;
    }
} else {
    $results["name_error"] = "Name Parameter Not Found";
    $error_flag = false;
}

// email Validation
if (isset($_GET["email"])) {
    if (trim($_GET["email"]) != "") {
        $email = htmlspecialchars($_GET["email"]);
        if (!preg_match('/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/', $email)) {
            $results["email_error"] = "Invalid Email Format";
            $error_flag = false;
        } else {
            $results["email_error"] = "";
        }
    } else {
        $results["email_error"] = "Email Value Not Found";
        $error_flag = false;
    }
} else {
    $results["email_error"] = "Email Parameter Not Found";
    $error_flag = false;
}

// mobile Validation
if (isset($_GET["mobile"])) {
    if (trim($_GET["mobile"]) != "") {
        $mobile = $_GET["mobile"];
        if (!preg_match('/^[0-9]{10}$/', $mobile)) {
            $results["mobile_error"] = "Invalid Mobile Number (must be 10 digits)";
            $error_flag = false;
        } else {
            $results["mobile_error"] = "";
        }
    } else {
        $results["mobile_error"] = "Mobile Value Not Found";
        $error_flag = false;
    }
} else {
    $results["mobile_error"] = "Mobile Parameter Not Found";
    $error_flag = false;
}

// password Validation
if (isset($_GET["password"])) {
    if (trim($_GET["password"]) != "") {
        $c_password = $_GET["password"];
        if (strlen($c_password) < 8) {
            $results["password_error"] = "Password must be at least 8 characters";
            $error_flag = false;
        } else {
            $results["password_error"] = "";
        }
    } else {
        $results["password_error"] = "Password Value Not Found";
        $error_flag = false;
    }
} else {
    $results["password_error"] = "Password Parameter Not Found";
    $error_flag = false;
}

$results["success"] = $error_flag;

if ($error_flag) {
    $results["message"] = "Validation successful";
} else {
    $results["message"] = "Validation failed";
}

echo $results;

?>