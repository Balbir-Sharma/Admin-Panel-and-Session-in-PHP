<?php session_start() ?>

<?php
if (!isset($_SESSION['id'])) {         // condition Check: if session is not set. 
  header('location: login.php');   // if not set the user is sendback to login page.
}
?>
<?php
if (isset($_SESSION['role']) && $_SESSION['role'] == 0) {
    // header('location: ad.php');
// }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class=" mt-3 text-center">Welcome to the Admin panel</h1>
    
    <div class="container col-12 border rounded mt-3">
 
  <hr>
  <h4> <?php echo $_SESSION['name']; ?> </h4>

  <table class="table table-striped table-bordered table-hover">
    <thead class="table-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> <?php echo $_SESSION['id']; ?></td>
        <td> <?php echo $_SESSION['name']; ?></td>
        <td> <?php echo $_SESSION['email']; ?></td>
        <td><button>Delete</button></td>
      </tr>
    </tbody>
  </table>

  <form action="" method="post">
    <button type="submit" name='signout' class=" btn btn-warning mb-3"> Sign Out</button>
  </form>
</div>
</body>
</html>
<?php

// Destroy the session
session_destroy();
exit(); // exit the script to prevent further execution
}
// <?php
if (isset($_POST['signout'])) {
  session_destroy();            //  destroys session 
  header('location: login.php');
}
?>
