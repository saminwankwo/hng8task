<?php

if(isset($_GET['return'])){
    $return = $_GET['return'];
    } else{
    $return = 'index.php';
}
//require_once 'Mail.php';

if($_SERVER['HTTP_HOST'] == "localhost"){

    $hostname ="localhost";
    $username = "plan";
    $password = "stop";
    $dbname ="hngtest";
    
} else {

    $hostname ="localhost";
    $username = "user";
    $password = "AI#3=([YIo}U";
    $dbname ="officepr_management";
}

$conn = new mysqli($hostname, $username, $password, $dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_GET['return'])){
    $return = $_GET['return'];
    } else{
    $return = 'index.php';
}

if (isset($_POST['send'])) {
    
    $frommail = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['cntact']);
    $name = htmlspecialchars($_POST['name']);
    // $sendme = htmlspecialchars($_POST['sendme']);

    // if ($sendme) {
    //     # code...
    // }

    if (filter_var($frommail, FILTER_VALIDATE_EMAIL)) {
        
        $sql = "INSERT INTO emails (frommail, messages, sendername, timesend) VALUES('$frommail', '$message', '$name', NOW())";
        if($conn->query($sql)){
            $_SESSION['success'] = 'Your has been sent sucessfully';
        } else {
            $_SESSION['error'] = $conn->error;
        }
    } else {
        $_SESSION['error'] = 'Please enter a valid email';
    }

    //$insert  = "INSERT INTO emails()values()";

}

header('location:' .$return);
?>