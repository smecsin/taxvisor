<?php

$link = mysqli_connect("db734747840.db.1and1.com", "dbo734747840", "Asdf@1234", "db734747840");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$USER_NAME = mysqli_real_escape_string($link, $_REQUEST['LOGIN_USER_NAME']);
$EMAIL = mysqli_real_escape_string($link, $_REQUEST['EMAIL']);
$PHONE = mysqli_real_escape_string($link, $_REQUEST['PHONE']);
$GST_NO = mysqli_real_escape_string($link, $_REQUEST['GST_NO']);
$PASSWORD = mysqli_real_escape_string($link, $_REQUEST['LOGIN_PASSWORD']);

    $OTP = mt_rand(10000, 99999);
    $msg="Dear+Client,+Your+OTP+verification+coed+is+$OTP";
    $url = "http://198.24.149.4/API/pushsms.aspx?loginID=akashathlete&password=Asdf@1234&mobile=$PHONE&text=$msg&senderid=DEMOOO&route_id=7&Unicode=0";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_exec($ch);

$sql = "INSERT INTO singup(USER_NAME, EMAIL, PHONE, GST_NO, PASSWORD,OTP,STATUS,CREATED_DATE) VALUES ('$USER_NAME','$EMAIL','$PHONE','$GST_NO','$PASSWORD','$OTP','Active',NOW());";

if(mysqli_query($link, $sql)){
  header('Location: https://taxvisor.in/APP/index.php/Otp_verification'.'?ph='.$PHONE);
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>