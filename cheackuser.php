<?php
    include("auth.php");
    include("db.php");
?>

<?php
   // echo $_POST['username'];
    //echo $_POST['password'];
?>

<?php
    //$host = "localhost";
    //$user = "root";
    //$pass = "";
    //$db = "register";
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE username='$username' and user_password='$password' ";
    
    $result = mysqli_query($con,$sql);

    $row = mysqli_fetch_array($result);
    
    if($row){
        $_SESSION['id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        echo"<center>";
            echo"เข้าสู่ระบบ";
            echo"<a href='./member/index.php'>เข้าสู่ Dashboard</a>";
            header("refresh:3 ./member/index.php");
        echo"</center>";
    }
    else{
        echo"<center>";
            echo"<p style='color:red'>ชื่อผู้ใช้ หรือรหัสผ่านไม่ถูก แค่นี้จำไม่ได้ รอแปป.....</p>";
            header("refresh:3 login.php");
        echo"</center>";
        
    }
?>