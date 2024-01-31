<?php
    session_start();

    include("assets/php/config.php");
    if(!isset($_SESSION['valid'])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/editprofile.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Change Profile</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
           <a href="index.php">Home</a>
        </div>

        <div class="right-links">
            <a href="php1/logout.php"><button class="btn">Log Out</button></a>
        </div>
    </div>
    <div class="container">
        <div class="box form-box">

        <?php
            if(isset($_POST['submit'])){
                $username = $_POST['username'];

                $id = $_SESSION['id'];

                $edit_query = mysqli_query($con,"UPDATE users SET Username='$username' WHERE Id=$id ") or die("Error occurred");

                if($edit_query){
                    echo "<div class ='message'>
                            <p>Profile Updated</p>
                            </div> <br>";
                        echo "<a href='home.php'><button class='btn'>Go Home</button>";
                }
            }else{

            $id = $_SESSION['id'];
            $query = mysqli_query($con, "SELECT * FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
            }
        ?>
            <header>Change Profile</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?php echo $res_Uname; ?>" autocomplete="off"  required>
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Update" required>
                </div>
                <!-- <div class="links">
                    Already a member <a href="login.html">Sign In</a>
                </div> -->
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>