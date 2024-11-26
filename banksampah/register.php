<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="login.css" />
</head>

<body class="halamanlogin">
    <div class="containerlogin">
        <div class="gambar">
            <h2 style="color: #276561;">BANK<br>SAMPAH</h2>
            <img src="login.png" alt="gambar" style="width: 200px; height: 200px;">
            <p style="color:#276561 ;text-align: center;">
                Starts for free and get<br>attractive offers
            </p>
        </div>
        <div class="login">
            <h3 style="color: white;">Get's started</h3>
            <p style="color: white; font-size: 10px;">
                Already have an account?
                <a href="login.php" style="color: white; text-decoration: none;"><b>Log in</b></a>
            </p>
            <div class="google">
                <button type="button" class="btngoogle">
                    <img src="google.png" alt="" style="margin-top: 6px;">
                    <b style="margin-top: 11px;">Sign in with Google</b>
                </button>
            </div>
            <div class="facebook">
                <button type="button" class="btnfb">
                    <img src="fb.png" alt="" style="margin-top: 6px;">
                    <b style="margin-top: 11px;"> Sign in with Facebook</b>
                </button>
            </div>
            <div class="garis1">
                <hr>
            </div>
            <div class="or">or</div>
            <div class="garis2">
                <hr>
            </div>
            <div class="input">
                <input style="margin-top: 20px;" type="text" name="Username" placeholder="Username" required>
                <input type="password" name="Password" placeholder="Password" required>
                <input type="password" name="confirm-Password" placeholder="Confirm Password" required>
            </div>
            <div class="ingat">
                <input type="checkbox" name="ingat" style=" margin-top: 10px ; position: absolute;">
            </div>
            <div>
                <label style="color: white ;font-family: nunito sans;font-size: 9px; position: absolute; margin-left: 25px;margin-top: 11px;">
                    I agree to platforms <b>Terms of servive</b> and <b>Privacy Police</b>
                </label>
            </div>
            <a href="login.php"> <button class="btn-login2">Sign up!</button></a>
        </div>
    </div>
</body>

</html>