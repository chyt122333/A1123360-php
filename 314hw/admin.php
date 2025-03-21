
<?php
    session_start();
?>

<html>
    
    <head></head>

    <body>
        <?php
            if (isset($_SESSION["admin"])) {
                echo "Hello ".$_COOKIE["uName"]."<br>";
                echo "<a href='logout.php'>Logout</a>";
            } else {
                echo "illegal user!";
                header("Refresh:2;url='login.php'");
            }
        ?>
    </body>

</html>
