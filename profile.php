<?php
    include_once 'header.php';
?>

    <div class="profile content-wrapper" >
        <?php
            echo "<p> Welcome to your profile page ";
            echo $_SESSION['useruid'];
            echo "</p>";
        ?>
    </div>

<?php
    include_once 'footer.php'
?>