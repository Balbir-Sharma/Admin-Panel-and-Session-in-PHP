<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
.container-centre{
    margin-left: 30%;

}
.h2{
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 400%;
}
</style>
<body>
    <h2 class="h2" >User Details</h2>
    <div class="container-centre">
    <form action="insert.php" method="POST">

    <form action="create" method="POST" class="row g-3">

    <div class="col-md-6">
    <label for="name" class="form-label">Name : </label>
    <input type="text" name="name" class="name" id="inputname"><br>
  </div><br>
  <div class="col-md-6">
    <label for="email" class="form-label">Email : </label>
    <input type="email" name="email" class="email" id="inputEmail"><br>
  </div><br>
  <div class="col-md-6">
    <label for="password" class="form-label">Password : </label>
    <input type="password" name="password" class="password" id="inputPassword"><br>
  </div>
  <br>
  <div class="col-md-6">
    <label for="phone" class="form-label">Phone : </label>
    <input type="number" name="phone" class="phone" id="inputPhone">
  </div> <br>
  <div class="col-6">
    <label for="address" class="form-label">Address : </label>
    <input type="text" name="address" class="address" id="inputAddress"><br>
  </div>
  <br>
  <div class="col-md-6">
    <label for="city" class="form-label">City : </label>
    <input type="text" name="city" class="city" id="inputCity"><br>
  </div><br>
  <div class="col-md-12">
    <label for="role" class="form-label">Role : </label>
    <select name="role" id="inputrole" class="role" >Select Your role : 
    <option value="admin">Admin</option>
    <option value="user">User</option>
    </select>
</div>
 
  <div class="col-6">
    <button type="submit"  id="submit" name ="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
</div>
 <a href="login.php" > <button class="btn btn-primary" >Already Registered</button></a>
  </div>

</form>
</div>
</body>
</html>