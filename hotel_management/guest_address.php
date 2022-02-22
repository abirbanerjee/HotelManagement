<?php
$gid = trim($_GET["id"]);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
  .imgcontainer {
  	text-align: center;
  	margin: 50px 0 50px 0;
  }

  img.avatar {
  	width: 50%;
  	border-radius: 20%;
  }

  .container {
  	padding: 16px;
  }
  body {  margin        : 0;
     padding       : 0;
     display       : grid;
     place-content : center;
     min-height    : 100vh;
   }
   input[type=text], input[type=password] {
     width: 50%;
     padding: 12px 20px;
     margin: 0 auto;
     display: inline-block;
     border: 1px solid #ccc;
     box-sizing: border-box;
     text-align: center;
   }
  form {border: 3px solid #f1f1f1;}
  </style>
  <title>Guest address</title>
<title>Enter your address</title>
</head>
<body>
<form action="addprocess.php"  id="createaddress" method="post">
  <div class="imgcontainer">
<img src="image/registration.jpg" alt="Avatar" class="avatar">
 </div>
			<h3 class="form__title">Please Add Address Details</h3>
            <p>
                <input type="text" name="gid" value=<?php echo $gid ?>>
            </p>
            <p>
                <input type="text" name="address_line1" class="form__input" autofocus placeholder="Address Line 1">
            </p>
            <p>
                <input type="text" name="city" class="form__input" autofocus placeholder="City">
            </p>
            <p>
                <input type="text" name="state" class="form__input" autofocus placeholder="State">
            </p>
            <p>
                <input type="text" name="country" class="form__input" autofocus placeholder="Country">
            </p>
            <p>
                <input type="text" name="pin_code" class="form__input" autofocus placeholder="Pincode">
            </p>
            <p>
                <input type="text" name="address_proof_id" class="form__input" autofocus placeholder="Address Proof ID">
            </p>
            <p>
                    <input type="submit" class="btn btn-primary" value="Register">
            </p>
</form>

</body>
</html>
