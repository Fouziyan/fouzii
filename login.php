<?php
session_start();
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Login Form</title>
           
            <?php include'connect.php' ?>
            <!-- <link rel="stylesheet" href="StyleLogin.css"> -->
      </head>
<?php
if(isset($_POST['submit'])){
    $email = $_POST['nemail'];
    $password = $_POST['npassword'];

    $email_search="select * from user where email = '$email'";
    $query = mysqli_query($conn,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $pass = mysqli_fetch_assoc($query);

        if(md5($password) === $pass["password"])
        {
            ?>
            <script>
                alert("Successful")
            </script>
            <?php
           
        }
        else{
            ?>
    <script>
        alert("invalid password")
    </script>
    <?php
        }
      }
        else{
            ?>
            <script>
                alert("Invalid Email")
            </script>
            <?php
        }
    }

?>
      <body>
     
       <div class="form_bg text-center">
       
    <div class="container">
    
    <div class="row">
    <div class="col-12 col-md-12 col-lg-6 box2 ">
    <form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="backicon d-flex">
      
    <h3>User Login</h3>
    </div>
   
    <br>

    <div class="form-group">
          <i class="fa-solid fa-envelope icon"></i>
        <input class="form-control" type="email" placeholder="Email"  name="nemail" required>
    </div>
    <div class="form-group">
       
        <i class="fa-solid fa-key icon"></i>
        <input class="form-control" type="password" placeholder="Password" name="npassword" required autocomplete="off">
    </div>   
    <div class="form-group">
          <input class=" btn" type="submit" value="Submit" name="submit">
    </div>
    <div class="form-group d-flex">
          <h6>Don't have an account?</h6>
          <a href="#">SignUp</a><br>
          
    </div>  
    <div >
    <button class="footbtn"> <a href="#"> Forgot Password?</a></button>&nbsp;&nbsp;
    <button class="footbtn"> <a href="#"> Change Password</a></button>
    </div>
    </form>
</div>
</div>
</div>
  </div>
</body>
</html>
