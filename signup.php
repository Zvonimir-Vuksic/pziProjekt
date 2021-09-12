<?php
    include_once 'header.php';
?>
    <div class="signup-form">
        <h2>Sign Up</h2>
        <form action="includes/signup.inc.php" method="POST">
            <input type="text" name="name" placeholder="Full name">
            <input type="text" name="email" placeholder="E-mail">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdRepeat" placeholder="Repeat password">
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>

    <?php
        if(isset($_GET["error"])){
            if($_GET["error"]=="emptyinput"){
                echo "<p>Fill in all the fields</p>";
            }
            if($_GET["error"]=="invaliduid"){
                echo "<p>Choose another username</p>";
            }
            if($_GET["error"]=="invaliemail"){
                echo "<p>Choose a valid email</p>";
            }
            if($_GET["error"]=="pwdmissmatch"){
                echo "<p>Password missmatch</p>";
            }
            if($_GET["error"]=="uidtaken"){
                echo "<p>That username is already taken</p>";
            }
            if($_GET["error"]=="stmtfailed"){
                echo "<p>Something went wrong</p>";
            }
            if($_GET["error"]=="none"){
                echo "<p>You have signed up!</p>";
            }
        }
    ?>
<?php
    include_once 'footer.php'
?>