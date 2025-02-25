<?php
session_start();
            include('config/dbcon.php');

            if (isset($_POST['login-btn'])) {
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $password = mysqli_real_escape_string($con, $_POST['password']);

                // Securely check the password (consider hashing for real applications)
                $query = "SELECT * FROM users WHERE email ='$email' AND password='$password' LIMIT 1";
                $result = mysqli_query($con, $query);

                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result); // Fetch a single row
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $role_as = $row['role_as'];

                    $_SESSION['auth'] = "$role_as";  
                    $_SESSION['auth_user'] = [
                        'id' => $id,
                        'name' => $name,
                        'email' => $email,
                        'phone' => $phone
                    ];
                    $_SESSION['status'] = "Logged in Successfully";
                    header('Location: index.php');
                    exit();
                } else {
                    $_SESSION['status'] = "Invalid Email or Password";
                    header('Location: login.php');
                    exit();
                }
            } else {
                $_SESSION['status'] = "Access Denied";
                header('Location: login.php');
                exit();
            }
            ?>