<?php session_start(); ?>
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