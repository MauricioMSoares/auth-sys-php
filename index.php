<?php require "includes/header.php"; ?>

<?php 
    if (isset($_SESSION['username'])) {
        echo "Welcome, " . $_SESSION['username'];
    } else {
        echo "Looks like you're not logged in. Sign up!";
    }
?>
<?php require "includes/footer.php"; ?>
