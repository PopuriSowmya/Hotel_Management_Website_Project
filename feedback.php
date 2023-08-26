<?php

$link = mysqli_connect("localhost", "root", "", "trail");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$FullName = mysqli_real_escape_string($link, $_REQUEST['FullName']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$PhoneNumber = mysqli_real_escape_string($link, $_REQUEST['PhoneNumber']);
$subject = mysqli_real_escape_string($link, $_REQUEST['subject']);
 echo $FullName;
// Attempt insert query execution
$sql = "INSERT INTO feedback VALUES ('$FullName', '$email', '$PhoneNumber', '$subject')";
if(mysqli_query($link, $sql)){
    echo " Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>