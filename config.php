<?php

$conn = mysqli_connect('localhost', 'root', '', 'jobs');

if(!$conn){
    echo "Connection Error: " . mysqli_connect_error();
}
echo"";

if(isset($_POST['register'])){
    $F_Name = $_POST['F_Name'];
    $L_Name = $_POST['L_Name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $sql = "INSERT INTO registered(F_Name, L_Name, Email, Password) VALUES ('$F_Name','$L_Name','$Email','$Password')";

    if(mysqli_query($conn, $sql)){
        header("Location: login.php");
    } else {
        echo "ERROR: $sql." . mysqli_error($conn);
    }
}

session_start();
if(isset($_POST['login'])){
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    $query = "SELECT * FROM registered WHERE `Email`='$email' AND `Password`='$password'";
    $result = mysqli_query($conn, $query);
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("Location: index.php");
    } else {
        echo "Invali Inputs";
    }
}

if(isset($_POST['submit'])){
    $CName = $_POST['CName'];
    $Position = $_POST['Position'];
    $CTC = $_POST['CTC'];
    $skills = $_POST['skills'];
    $jobDescription = $_POST['jobDescription'];

    $query = "INSERT INTO jobs(CName, Position, CTC, Skills, jobDescription) VALUES ('$CName', '$Position', '$CTC', '$skills', '$jobDescription')";
    
    if(mysqli_query($conn, $query)){
        echo " ";
    } else {
        echo "ERROR: $sql." . mysqli_error($conn);
    }
}

if(isset($_POST['apply'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $grad = $_POST['grad'];
    $skills = $_POST['skills'];
    $exp = $_POST['exp'];
    $CName = $_POST['CName'];

    $query = "INSERT INTO `appliedcandidates`(`name`, `email`, `grad`, `skills`, `Experience`, `appliedFor`) VALUES ('$name', '$email', '$grad', '$skills', '$exp', '$CName')";
    // var_dump($query);
    // die();
    if(mysqli_query($conn, $query)){
        echo "Applied Successfully!.";
    } else {
        echo "ERROR: $sql." . mysqli_error($conn);
    }
}

?>