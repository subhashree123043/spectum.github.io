<?php
$msg = "";
if (isset($_POST['submit'])) {
    include("connection.php");
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $mail = mysqli_real_escape_string($con, $_POST['email']);
    $phno = mysqli_real_escape_string($con, $_POST['phno']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $gen = mysqli_real_escape_string($con, $_POST['gen']);
    $branch = mysqli_real_escape_string($con, $_POST['branch']);
    $year = mysqli_real_escape_string($con, $_POST['year']);
    $domain = mysqli_real_escape_string($con, $_POST['domain']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $cfpass = mysqli_real_escape_string($con, $_POST['cfpass']);

    $sql = "SELECT mail FROM user WHERE mail='{$mail}'";

    $res = mysqli_query($con, $sql) or die("Query failed");

    if (mysqli_num_rows($res) > 0) {
        echo "<p style='color:red;text-align:center;margin:10px 0;'> User Already Exist </p>";
    } else if ($pass == $cfpass) {
        $sql1 = "INSERT INTO user(username,mail,phno,DOB,gender,branch,year,	domain,password) VALUES('{$name}','{$mail}',{$phno},'{$dob}','{$gen}','{$branch}','{$year}','$domain','{$pass}')";
        $res1 = mysqli_query($con, $sql1);
        if ($res1) {
            header("location:login.php");
        }
    } else {
        $msg = "**password not matched";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/log.css">
    <link rel="stylesheet" href="css/log&regResponsive.css">
</head>

<body>
    <div class="register">
        <form action="<?php $_SERVER['PHP_SELF']; ?> " autocomplete="off" id="form" method="POST">
            <div class="logo-box">
                <!-- <img src="pic/user.png" alt="" class="logo"> -->
                <h3>Register Here</h3>
            </div>
            <div class="inbox2">
                <div class="reg-input-box">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Like subhashree panda " id="name" required>

                </div>
                <div class="reg-input-box">
                    <label>email</label>
                    <input type="email" name="email" placeholder="Like subha123@gmail.com" id="mail" required>

                </div>
                <div class="reg-input-box">
                    <label>Mobile</label>
                    <input type="text" name="phno" pattern="[6-9]{1}[0-9]{9}" id="num" placeholder="Like 6723543214" required>

                </div>
                <div class="reg-input-box">
                    <label>DOB</label>
                    <input type="date" name="dob" id="dob" required>

                </div>
                <div class="reg-input-box">
                    <label>Gender</label>
                    <select name="gen" id="Gender">
                        <option disabled>Select gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>

                    </select>
                </div>
                <div class="reg-input-box">
                    <label>Branch</label>
                    <input type="text" name="branch" placeholder="Like MCA,Compute sc....." id="bnc" required>

                </div>
                <div class="reg-input-box">
                    <label>Year</label>
                    <input type="text" name="year" placeholder="Like 1st ,2nd , 3rd, 4th year" id="year" required>

                </div>
                <div class="reg-input-box">
                    <label>Domain</label>
                    <select name="domain" id="dom">
                        <option disabled>Select Domain</option>
                        <option>web developement</option>
                        <option>python developer</option>
                        <option>Java developer</option>
                        <option>Android developer</option>
                    </select>
                </div>
                <div class="reg-input-box">
                    <label>Password</label>
                    <input type="password" name="pass" id="pass" placeholder="password most be 8 character" required>

                </div>
                <div class="form-input-box" id="conf">
                    <label>Confirm Password</label>
                    <input type="password" name="cfpass" id="confpass" required>
                    <?php echo "<span class='perror'>{$msg}</span>"; ?>
                </div>
                <div class="reg-input-btn">
                    <input type="submit" name="submit" value="submit">
                </div>
                <div class="reg">
                    <p>If already registred</p><a href="login.php">Login Here</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>