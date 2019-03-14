<!DOCTYPE html>
<html lang="en" style="height:100%;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Login</title>
</head>

<body class='bg-light h-100'>
    <div class='pt-5 container card' style='max-width:350px; position: relative; top:50%; transform: translateY(-50%);'>
        <h1 class='text-center' >Register</h1>
        <?php
            if(isset($_POST['submit'])){
                require 'database.php';
                $reg = $user->insertUser($_POST['usern'],md5($_POST['passw']));
                if($reg) {
                    header('location: login.php');
                } else {
                    echo "<div class='alert alert-danger'>Username or password is invalid</div>";
                }
            }
        ?>
        <form action="register.php" method="post">
        <label for="username">Username</label>
        <input type="text" class='form-control mb-2' name="usern" id="username"/>
        <label for="password">Password</label>
        <input type="password" class='form-control mb-2' name="passw" id="password"/>
        <div class='text-center mb-3'>
        <input type="submit" value="Register" name='submit' class='btn btn-outline-success btn-lg'/>
        </div>
        </form>

    </div>
</body>
</html>