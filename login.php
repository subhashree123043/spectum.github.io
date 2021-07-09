<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['login'])) {
    header("location:index.php");
}
include("connection.php");

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['pass']);
    $sql = "SELECT * FROM user WHERE mail='$username' and password='$password'";
    $res = mysqli_query($con, $sql) or die("query failled");
    $cnt = mysqli_num_rows($res);
    if ($cnt > 0) {
        while ($row = mysqli_fetch_assoc($res)) {

            $_SESSION['login'] = "yes";
            $_SESSION['username'] = $row['username'];
            $_SESSION['mail'] = $row['mail'];
            $_SESSION['num'] = $row['phno'];
            $_SESSION['dob'] = $row['DOB'];
            $_SESSION['gen'] = $row['gender'];
            $_SESSION['branch'] = $row['branch'];
            $_SESSION['Year'] = $row['year'];
            $_SESSION['dom'] = $row['domain'];







            header('location:index.php');
        }
    } else {


        echo "<script>alert('Please enter correct details')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/log.css">
    <link rel="stylesheet" href="css/log&regResponsive.css">
</head>

<body>
    <div class="log">
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" autocomplete="off">
            <div class="logo-box">
                <!-- <img src="pic/user.png" alt="" class="logo"> -->
                <h3>Login Here</h3>
            </div>
            <div class="inbox">
                <div class="form-input-box">

                    <label> Username</label>
                    <input type="email" name="email">
                </div>
                <div class="form-input-box">
                    <label>Password</label>
                    <input type="password" name="pass">
                </div>

                <div class="form-input-btn">
                    <input type="submit" name="submit" value="Login Here">
                </div>
                <div class="reg">
                    <p>If new user</p><a href="register.php">Register Here</a>
                </div>
            </div>
        </form>

    </div>
</body>

</html>