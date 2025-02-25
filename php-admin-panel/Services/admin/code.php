<?php
session_start();
include('authentication.php');
include('config/dbcon.php');

if(isset($_POST['logout-btn'])){
        // session_destroy();
        unset($_SESSION['auth']);
        unset($_SESSION['auth_user']);


        $_SESSION['status'] = "Logged out Succssesfully";
        header('Location: login.php');
        exit(0);
}


if(isset($_POST['check_emailbtn'])){
    $email = $_POST['email'];

    $checkemail = "SELECT email FROM users WHERE email='$email' ";
    $checkemailquery = mysqli_query($con, $checkemail);

    if (mysqli_num_rows($checkemailquery) > 0) {
        echo "Email id alredy taken";
    } 
    else {
        echo "It is Available";
    }   
}




if (isset($_POST['addUser'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];


    if ($password == $confirmpassword) {

        $checkemail = "SELECT email FROM users WHERE email='$email' ";
        $checkemailquery = mysqli_query($con, $checkemail);

        if (mysqli_num_rows($checkemailquery) > 0) {
            // Taken - Already exists......
            $_SESSION['status'] = "Email id is already taken.......";
            header("Location: registered.php");
            exit;
        } else {
            // Available
            $query = "INSERT INTO users (name,phone,email,password) VALUES ('$name','$phone','$email','$password')";
            $result = mysqli_query($con, $query);

            if ($result) {
                $_SESSION['status'] = "User added Successfully";
                header("Location: registered.php");
            } else {
                $_SESSION['status'] = "user regisration failed";
                header("Location: registered.php");
            }
        }

    } 
    else {
        $_SESSION['status'] = "Password and Confirm Password does not match";
        header("Location: registered.php");
    }
}


if (isset($_POST['updateUser'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];

    $query = "UPDATE users SET name='$name', phone='$phone', email='$email', password='$password', role_as='$role_as' WHERE id=$id ";
    $result = mysqli_query($con, $query);

    if ($result) {
        $_SESSION['status'] = "User updated Successfully";
        header("Location: registered.php");
    } else {
        $_SESSION['status'] = "user updating failed";
        header("Location: registered.php");
    }
}

if (isset($_POST['DeleteUserbtn'])) {
    $id = $_POST['dlt_id'];

    $query = "DELETE FROM users WHERE id='$id' ";
    $result = mysqli_query($con, $query);

    if ($result) {
        $_SESSION['status'] = "User Deleted Successfully";
        header("Location: registered.php");
    } else {
        $_SESSION['status'] = "user deleting failed";
        header("Location: registered.php");
    }
}