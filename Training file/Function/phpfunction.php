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
?>