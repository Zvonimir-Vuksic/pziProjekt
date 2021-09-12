<?php
    include_once 'header.php';
?>
    <div class="signup-form">
        <h2>Log in</h2>
        <form action="includes/login.inc.php" method="POST">
            <input type="text" name="uid" placeholder="Username / E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Log in</button>
        </form>
    </div>

    <?php
        if(isset($_GET["error"])){
            if($_GET["error"]=="emptyinput"){
                echo "<p>Fill in all the fields</p>";
            }
            if($_GET["error"]=="stmtfailed"){
                echo "<p>Something went wrong</p>";
            }
            if($_GET["error"]=="usernotfound"){
                echo "<p>You need to sign up first!</p>";
            }
            if($_GET["error"]=="wrongpassword"){
                echo "<p>Wrong password</p>";
            }
        }
    ?>
<?php
    include_once 'footer.php'
?>