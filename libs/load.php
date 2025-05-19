<?php
include_once 'libs/Databaseclass.php';
include_once 'libs/userclass.php';
include_once 'libs/sessionclass.php';
session::start();
function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT'] . "/app/_template/$name.php";
}

function validatepassword($username, $password)
{
    if ($username == "mk@gmail.com" and $password == "pass") {
        return true;
    } else {
        return false;
    }
}


//function signup($user, $pass, $email, $phone)
//{


    /*$servername = "mysql.selfmade.ninja";
    $username = "";
    $password = "";
    $database = "mkmuthu_photogram";*/

    // Create connectionysqli_connect("mysql.selfmade.ninja", "mkmuthu", "", "mkmuthu_photogram");
    //$conn =mysqli_connect("mysql.selfmade.ninja","mkmuthu","","mkmuthu_photogram");
    //$conn=Databaseconn::getconnection();
    
    // Check connection
    //if (!$conn) {
    // die("Connection failed: " . mysqli_connect_error());
    //}
    //Insert data
    
    //$sql = "INSERT INTO `auth` (`username`,`password`, `email`,`phone`)
//VALUES ('$user', '$pass', '$email','$phone')";
   // $result=false;
    //check contidion
   // try {
      //  $conn->query($sql);
       // $result=true;
       
    //} catch (Exception $e) {
       // echo "Error : ".$sql."<br>".$conn->error;
      //  $result=false;
  //  }

    //$conn->close();
   // return $result;
//}
