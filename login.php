<?php
    include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="bg-black">
<div class="container  justify-content-center align-items-center bg-dark w-25 " >
<form class="container d-flex flex-column " name="form" action="login.php" action="GET">
                <h1 class="text-light d-flex justify-content-center mb-5">Login In Page</h1>                
                <div class="form-floating col-lg-10 mb-3 ms-2">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating col-lg-10 mb-3 ms-2">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="container d-flex flex-column mb-3">
                    <button type="submit" class="btn btn-success mb-2" name="submit">Login</button>
                    <a href="index.php" class=" text-decoration-none">New User, Register Here </a>
                </div>
            </form>
</div>
<?php
if(isset($_GET['submit'])){
    $email=$_GET["email"];
    $password=$_GET["password"];
    $sql = "SELECT * FROM `user` WHERE email='$email' AND password='$password'";
    $res=mysqli_query($conn,$sql);
    $rowcount= mysqli_num_rows($res) ;
    if($rowcount==1){
        echo '<script>
        window.location.href="login.php";
        alert("Successfully Sign In");
        </script>';
    }
    else{
        echo '<script>
        window.location.href="login.php";
        alert("Enter the wrong field");
        </script>';
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>