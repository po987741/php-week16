<?php
    echo $username = $_POST["username"];
    echo $email = $_POST["user_email"];
    echo $password = $_POST["user_password"];

    if(strlen($password)<8){
        echo"<h1><center>";
        echo"Please enter password more than 8 character";
        echo"<a href='register.php'>register</a>";
        header("refresh:4; url='register.php' ");
        echo"</center></h1>";
        exit();
    
    }

?>

<?php
    //check connection
    $con = mysqli_connect('localhost','root','','register');
?>

<?php
    $query = "insert into users(username,user_email,user_password) 
        values('$username','$email','$password')";
    $result = mysqli_query($con,$query);

    if($result){
        echo"<h1></h1><center>";
        echo"สมัครสมาชิกเรียบร้อยแล้วครับ";
        echo"<a href='login.php'>คลิกล็อกอินเข้าระบบ</a>";
        echo"</center></h1>";
    }
?>
