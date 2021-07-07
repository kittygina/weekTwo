<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
</head>
<body>
    <form action = "register.php" method = "POST">
        <h2>Register Here</h2>
        <p>Username: <input type = "text" name = "name" required placeholder = "Enter name here"></p>
        <p>Email address: <input type ="email" name = "email" required placeholder = "Enter email here"></p>
        <p>Password: <input type ="password" name = "password" required placeholder = "Enter password here"></p>
        <input type = "submit" name = "submit" value = "Submit">
    </form>

    <?php
    session_start();
    if (isset($_POST['name']) && isset($_POST['password'])) {
       $username = $_POST['name'];
       $email= $_POST['email'];
       $password= $_POST['password'];

       if ($username == "Regina" and $password == "password") {

           $username = $_SESSION['username'] = $username;
           $password = $_SESSION['password'] = $password;

           header("Location:http://localhost/sideHustlePHP/index.php");

       }else {
            echo "username or password incorrect";
       }

    } 
?>
</body>
</html>