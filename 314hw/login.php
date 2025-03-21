<?php
    if (isset($_COOKIE["uName"])) {
        echo "Welcome back, ".$_COOKIE["uName"];
    }
?>

<h1>Please login to use the system</h1>

<form action="logincheck.php" method="post">

    Please input your username: <input type="text" name="uName"><br><br>
    Please input your password: <input type="password" name="uPwd"><br><br>
    <input type="submit"><br>
    
</form>