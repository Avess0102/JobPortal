<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
<style>
/* body {
  background-color: lightblue;
} */
</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="register">
        <div class="container">
            <form method="POST" action="register.php">
                <h1 class="h3 mb-3 fw-normal">Register</h1>

                <div class="form-floating p-1">
                    <input type="text" class="form-control" id="floatingInput" placeholder="First Name" name="F_Name">
                    <label for="floatingInput">First Name</label>
                </div>
                <div class="form-floating p-1">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Last Name" name="L_Name">
                    <label for="floatingInput">Last Name</label>
                </div>
                <div class="form-floating p-1">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="Email">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating p-1">
                    <input type="password" class="form-control" name="Password" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating p-1">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Confirm Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary m-1" name="register" type="submit">Register</button>
                <p class="mt-3 mb-3 text-muted">&copy; 2021</p>
            </form>
        </div>
    </div>
</body>
</html> 