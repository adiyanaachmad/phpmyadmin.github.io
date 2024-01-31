<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">

        <?php
            include("assets/php/config.php");
            if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);

                $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['id'] = $row['Id'];
                }else{
                    echo "<div class ='message' style ='text-align: center;
                    background: #f9eded;
                    padding: 15px 0px;
                    border: 1px solid #699053;
                    border-radius: 5px;
                    margin-bottom: 10px;
                    color: red;'>
                        <p>Wrong Email or Password</p>
                            </div> <br>";
                    echo "<a href='login.php'><button class='btn'>Go Back</button>";
                }
                if(isset($_SESSION['valid'])){
                    header("location: home.php");
                }
            }else{
        ?>

            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off"  required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off"  required>
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Don't have account? <a href="index.php">Sign Up Now</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>