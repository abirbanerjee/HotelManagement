

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
body {  margin        : 0;
  padding       : 0;
  display       : grid;
  place-content : center;
  min-height    : 100vh;
}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
 width: 50%;
 padding: 12px 20px;
 margin: 0 auto;
 display: inline-block;
 border: 1px solid #ccc;
 box-sizing: border-box;
 text-align: center;
}

button {
 background-color: #04AA6D;
 color: white;
 padding: 14px 20px;
 margin: 8px 0;
 border: none;
 cursor: pointer;
 width: 100%;
}

button:hover {
 opacity: 0.8;
}

.cancelbtn {
 width: auto;
 padding: 10px 18px;
 background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 30px 0 30px 0;
}

img.avatar {
  width: 40%;
  border-radius: 20%;
}

.container {
 padding: 16px;
}

span.psw {
 float: right;
 padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 3000px) {
 span.psw {
    display: block;
    float: none;
 }
 .cancelbtn {
    width: 100%;
 }
}
</style>
</head>
<body>
        <div class="wrapper" div style="text-align:center">
            <h2>Login</h2>
            <p>Please fill in your credentials to login.</p>

        <?php
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }
        ?>

        <form action="loginprocess.php" method="POST">
          <img src="image/guest.jpg" alt="Avatar" class="avatar">
            <p>
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </p>
            <p>
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </p>
            <p>
                <input type="submit" class="btn btn-primary" value="Login">
            </p>
            <p>Don't have an account? <a href="guest_register.php">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html>
