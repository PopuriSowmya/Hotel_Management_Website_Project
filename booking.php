<?php

$link = mysqli_connect("localhost", "root", "", "trail");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$FullName = mysqli_real_escape_string($link, $_REQUEST['FullName']);
$Address = mysqli_real_escape_string($link, $_REQUEST['Address']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$PhoneNumber = mysqli_real_escape_string($link, $_REQUEST['PhoneNumber']);
$NoOfPersons = mysqli_real_escape_string($link, $_REQUEST['NoOfPersons']);
$StayDuration = mysqli_real_escape_string($link, $_REQUEST['StayDuration']);
$SelectBedType = mysqli_real_escape_string($link, $_REQUEST['SelectBedType']?? "");
$SelectAcomodation = mysqli_real_escape_string($link, $_REQUEST['SelectAcomodation']?? "");
$AdditionalAcomodation = mysqli_real_escape_string($link, $_REQUEST['AdditionalAcomodation']?? "");
$Checkindate = mysqli_real_escape_string($link, $_REQUEST['Checkindate']);
$checkoutdate = mysqli_real_escape_string($link, $_REQUEST['checkoutdate']);
$payoption = mysqli_real_escape_string($link, $_REQUEST['payoption']?? "");
$paygateway = mysqli_real_escape_string($link, $_REQUEST['paygateway']?? "");
 
 echo $FullName;
 
// Attempt insert query execution
$sql = "INSERT INTO hotel VALUES ('$FullName', '$Address', '$email', '$PhoneNumber', '$NoOfPersons', '$StayDuration', '$SelectBedType', '$SelectAcomodation', '$AdditionalAcomodation', '$Checkindate', '$checkoutdate', '$payoption', '$paygateway')";
if(mysqli_query($link, $sql)){
    echo " Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>