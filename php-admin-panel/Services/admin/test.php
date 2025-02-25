<?php
session_start();
include('config/dbcon.php');


if(isset($_POST['login-btn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email ='$email' AND password='$paaword' LIMIT 1";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0){
        foreach($result as $row){
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
        }

        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = [
            'id' => $id,
            'name' => $name,
            'email' => $email,
            'phone' => $phone
        ];
        $_SESSION['status'] = "Logged in Successfully";
        header('Location: index.php');
    }
    else{
        $_SESSION['status'] = "Invalid Email or Password";
        header('Location: login.php');
    }
}
else{
    $_SESSION['status'] = "Access Denied";
    header('Location: login.php');
}



?>





<?php
                        if (isset($_SESSION['auth_status'])) {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Hey!</strong> <?php echo $_SESSION['auth_status']; ?>
                                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                            unset($_SESSION['auth_status']); // Clear the message after displaying
                        }
                        ?>