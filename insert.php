<?php include 'config.php'; ?>

<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    
    $email = $_POST['email'];

    $password = $_POST['password'];

    $phone = $_POST['phone'];

    $address = $_POST['address'];
    
    $city = $_POST['city'];

    $role = $_POST['role'];
    if( $_POST['role']=="admin"){
      $a =0;
    }
    else
    {$a =1;}

    $sql = "INSERT INTO `user` (`name`, `email`,`password`,`phone`,`address`,`city`,`role`) values
 ('$name', '$email', '$password', $phone, '$address', '$city', '$a')";

    $result = $conn->query($sql);

    if ($result == TRUE)
     {
      echo "<script>alert('There are no fields to generate a report');</script>";
      header("Location:login.php");
      
 
      //echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }
?>
