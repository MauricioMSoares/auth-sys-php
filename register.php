<?php require "includes/header.php"; ?>

<?php require "config.php"; ?>

<?php 
  if (isset($_POST['submit'])) {
    if ($_POST['username'] == '' OR $_POST['email'] == '' OR $_POST['password'] == '') {   
      echo("<script>alert('There are empty fields. Please, fill in the informations')</script>");
    } else {
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      $insert = $conn->prepare("
      INSERT INTO users (username, email, pass)
      VALUES (:username, :email, :pass)
      ");

      $insert->execute([
        ':username' => $username,
        ':email' => $email,
        ':pass' => password_hash($password, PASSWORD_DEFAULT),
      ]);

      header("location: login.php");
    }
  }
?>

<main class="form-signin w-50 m-auto">
  <form method="POST" action="register.php">
   
    <h1 class="h3 mt-5 fw-normal text-center">Please Register</h1>

    <div class="form-floating">
      <input name="username" type="text" class="form-control" id="floatingInput" placeholder="username">
      <label for="floatingInput">Username</label>
    </div>

    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>

    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    <h6 class="mt-3">Already have an account? <a href="login.php">Login</a></h6>

  </form>
</main>
<?php require "includes/footer.php"; ?>
