<?php

if (isset($_POST['submit'])) {
    //print_r('firstname: ' . $_POST['firstname']);
    //print_r('<br>');
    //print_r('lastname: ' . $_POST['lastname']);
    //print_r('<br>');
    //print_r('email: ' . $_POST['email']);
    //print_r('<br>');
    //print_r('number: ' . $_POST['number']);
    //print_r('<br>');
    //print_r('password: ' . $_POST['password']);
    //print_r('<br>');
    //print_r('confirmPassword: ' . $_POST['confirmPassword']);
    //print_r('<br>');
    //print_r('gender: ' . $_POST['gender']);
    //print_r('<br>');

    include_once('conexao.php');

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $gender = $_POST['gender'];


    $result = mysqli_query($con, "INSERT INTO cadastro(name, username, email, number, password, confirmPassword, gender) 
    VALUES ('$name','$username','$email','$number','$password','$confirmPassword','$gender')");
}
?>
