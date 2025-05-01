<?php
//function for GET value from form
$form=["name","email","mobile","message","radio","checkbox"];
$formlength=count($form);
for($i=0;$i<$formlength;$i++){
    if(isset($_GET[$form[$i]])){
        // $form_=$_GET[$form[$i]];
        // echo($form_."<br>");
        if($form[$i]=="checkbox"){
            $form_=$_GET["checkbox"];
            print_r($form_);
        }else{
            $form_=$_GET[$form[$i]];
            echo($form_."<br>");
        }
    }else{
        echo("Enter Your ".$form[$i]."<br>");
    }
}



$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



?>




// $form = ["user_name", "email", "mobile", "message", "radio", "checkbox"];
// $formlength = count($form);
// for ($i = 0; $i < $formlength; $i++) {
//     if (isset($_GET[$form[$i]])) {
//         // $form_=$_GET[$form[$i]];
//         // echo($form_."<br>");
//         if ($form[$i] == "checkbox") {
//             $form_ = $_GET["checkbox"];
//             print_r($form_);
//         } else {
//             $form_ = $_GET[$form[$i]];
//             // echo("$form_ <br>");
//             echo ($form_ . "<br>");
//         }
//     } else {
//         // echo("Enter Your ".$form[$i]."<br>");
//         echo ("$form[$i] Parameter Not Found<br>");
//     }
// }

