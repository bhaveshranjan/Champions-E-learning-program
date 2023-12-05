<?php
$server = "localhost";
$username= "root";
$password = "";
$dbname = "uniquedeveloper";

$conn =mysqli_connect($server , $username , $password , $dbname);

if(isset($_POST['submit'])){
    if(!empty($_POST['username'])&& !empty($_POST['email'])&& !empty($_POST['password'])){
        if ($_POST['password']=$_POST['password2'])
        {
        
        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "insert into login(username,password,email) values ('$name','$password','$email')";
        $run = mysqli_query($conn,$query) or die (mysqli_error());

        if($run){
            echo "Registration completed";
        }
        else{
            echo"Try Again";
        }

    }
    else{
        echo" All field Required or Enter same password in Password and Confirm Password";
    }
}
}
?>
