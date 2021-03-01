<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="register.css">
</head>

    <body>
    <div class="login-page">
    <div class="form">
        <h1>LOGIN</h1>
        <form class="login-form" action="cheackuser.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="login">
        </form>
        <p class="message">ยังไม่ได้สมัครสมาชิก  <a href="register.php">สมัครสมาชิก</a></p>
    </div>
    </div>


    </body>
</html>