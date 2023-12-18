<?php
$con = mysqli_connect("localhost","root","ashy1234$");
if(!$con){
    echo "couldn't connect to server";
    die();
}
else{
    echo "<h2>Connected successfully";
}
$DB = mysqli_select_db($con,"home_vices");
if (!$DB){
    echo"Couldn't select database";
}
else{
    echo "<h2>Database selected sucessfully</h2>";
} 

$name = $_POST['name'];
$review = $_POST['review'];
$service = $_POST['service'];
$rating = $_POST['rating'];
$date = date("Y-m-d");

$cid_get = mysqli_query($con, "SELECT clientID FROM client WHERE clientName = '$name'");
$cid = null;

if($cid_get->num_rows > 0){
    $ros = $cid_get->fetch_assoc();
    $cid = $ros['clientID'];
}

$sql = mysqli_query($con, "INSERT INTO review (clientID, serviceName, review, rating, date, clientName) VALUES($cid, '$service', '$review', $rating, '$date', '$name')");


$rev_get = mysqli_query($con, "SELECT * FROM review WHERE clientID = $cid");
$rev = null;

if($rev_get->num_rows > 0){
    $res = $rev_get->fetch_assoc();
    $rev = $res['review'];
}


header("Location: review.php");

?>