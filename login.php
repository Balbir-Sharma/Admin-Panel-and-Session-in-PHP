<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
    h1{
        text-align: center;
        font-size: 300%;
        margin-top: 2%;
    }
    .container-centre{
margin-left: 30%;
margin-right: 20%;
margin-top: 3%;
}
</style>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<body>
    <h1>Login</h1>
<form action="" method="POST">
    <div class="container-centre">
  <div class="mb-3 ml-5">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="uemail" class="form-control" id="uemail" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="upassword"  id="upassword" class="form-control">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" id="sbmt" class="btn btn-primary">Submit</button>
  </div>
</form>

</body>
</html>



<?php include "config.php"; ?>

<?php


// echo "2";
if(isset($_POST['submit'])){
    $uemail = $_POST['uemail'];
    $upassword = $_POST['upassword'];
    $sql = "SELECT * from `user` where email =  '$uemail' && password = '$upassword'" ;
    // print_r($sql);
   
$result = $conn->query($sql);

if($result)

{
   
   
    if ($result->num_rows > 0)
  
    {
        // Fetch the role data
        $row = $result->fetch_assoc();
        $user_id = $row['id'];
        $user_name = $row['name'];
        $user_email = $row['email'];
        $user_password = $row['password'];
        $role = $row['role'];

        $_SESSION['id'] = $user_id;       // Storing the value in session
        $_SESSION['name'] = $user_name;   // Storing the value in session
        $_SESSION['email'] = $user_email; 
        $_SESSION['role'] = $role;
    if($role==1){
        header("Location:userdirect.php");
    }
    else
    {
        header("Location:admindirect.php"); 
    }    
}
}
}

?>



