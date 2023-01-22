<?php
$server = "localhost";
$username= "root";
$password = "";
$dbname = "uniquedeveloper";

$conn =mysqli_connect($server , $username , $password , $dbname);

if(isset($_POST['consubmit'])){
    if(!empty($_POST['contactemail'])&& !empty($_POST['message'])){
        $cemail = $_POST['contactemail'];
        $msg = $_POST['message'];

        $query = "insert into contact_us(email,message) values ('$cemail','$msg')";
        $run = mysqli_query($conn,$query) or die (mysqli_error());

        if($run){
            echo "Your Query has been sent Succesfully!";
        }
        else{
            echo"Try Again";
        }

    }
    else{
        echo" All field Required";
    }
}
?>