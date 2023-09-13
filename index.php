<?php
    include("connect.php");
?>        
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SignUp page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
<body class="bg-black ">
    <div class="container  justify-content-center align-items-center bg-dark w-25" >
    <form class="container d-flex flex-column " name="form" action="index.php" method="POST">
        <h1 class="text-light d-flex justify-content-center mb-5">Sign Up Page</h1>
        <div class="form-floating col-lg-10 mb-3 ms-2" >
            <input type="text" class="form-control" id="floatingText" placeholder="Name" name="name" required>
            <label for="floatingText">Name</label>
        </div>
        <div class="form-floating col-lg-10 mb-3 ms-2">
            <input type="tel" class="form-control" id="floatingtel" placeholder="Number" name="mobile" required>
            <label for="floatingNumber">Mobile Number</label>
        </div>
        <div class="form-floating col-lg-10 mb-3 ms-2">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating col-lg-10 mb-3 ms-2">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating col-lg-12 mb-4 ms-2">
            <input type="text" class="form-control" id="floatingText" placeholder="Address" name="address" required>
            <label for="floatingText" >Address</label>
        </div>
        <div class="container d-flex flex-column mb-3">
            <button type="submit" class="btn btn-success mb-2" name="submit">Sign Up</button>            
            <a href="login.php" class=" text-decoration-none ">Already Registered, Login</a>
    </div>   
</form>
</div>
<?php
if(isset($_POST['submit'])){
    $name = $_POST['name']; 
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    
    $check="SELECT * FROM user WHERE email='$email'";
    $mail=mysqli_query($conn,$check);
    $result=mysqli_num_rows($mail);

    if($result==0){
        $sql="INSERT INTO user(name,email,password,address,mobile) VALUES ('$name','$email','$password','$address','$mobile')";
        $res=mysqli_query($conn,$sql);
        if($res){
           echo '<script>
           window.location.href="login.php";
           alert("Registered Successfully !!!!");
           </script>';
        }
    }
    else{
        echo '<script>
       window.location.href="index.php";
       alert("User already exist !!!!");
       </script>';
    }
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>        
</html>