<?php
    session_start();
?>

<h1>Login Result</h1>

<?php

    $defaultuName="user";
    $defaultuPwd="123";

    $defaultaName="admin";
    $defaultaPwd="1234";

    $uName=$_POST["uName"];
    $uPwd=$_POST["uPwd"];

    if ($defaultuName==$uName && $defaultuPwd==$uPwd) {
        echo "Login Success";
        $_SESSION["user"]=1;
        $cookiedate=strtotime("+30 seconds", time());
        setcookie("uName", $defaultuName,$cookiedate);
        header("Location:user.php");
    } else if ($defaultaName==$uName && $defaultaPwd==$uPwd) {
        echo "Admin Login Success";
        $_SESSION["admin"]=1;
        $cookiedate=strtotime("+30 seconds", time());
        setcookie("uName", $defaultaName,$cookiedate);
        header("Location:admin.php");
    } else {
        echo "Login failed, will send you back to login again in three seconds.";
        header("Refresh:3;url='login.php'");
    }

?>