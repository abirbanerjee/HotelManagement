<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
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
<title>Guest registration</title>
</head>
<body>
	<form class="form form--hidden" action="guestadded.php" method="POST">
		<div class="imgcontainer">
<img src="image/registration.jpg" alt="Avatar" class="avatar">
	 </div>
		<p>
			<input type="text" name="first_name" class="form__input" autofocus
				placeholder="First Name">
		</p>
		<p>
			<input type="text" name="last_name" class="form__input" autofocus
				placeholder="Last Name">
		</p>
		<p>
			<input type="text" name="contact_number" class="form__input" autofocus
				placeholder="Contact Number">
		</p>
		<p>
			<input type="text" name="email_id" class="form__input" autofocus
				placeholder="Email ID">
		</p>
		<p>
			<input type="text" name="username" class="form__input" autofocus
				placeholder="Username">
		</p>
		<p>
			<input type="password" name="password" class="form__input" autofocus
				placeholder="Password">
		</p>
		<p>
			<input type="password" name="password1" class="form__input" autofocus
				placeholder="Confirm Password">
		</p>
		<p>
				<input type="submit" class="btn btn-primary" value="Go to Address details">
		</p>
		<p><a href="login.php" id="linkLogin">Already have an
				account? Sign in</a></p>
	</form>
	</div>
</body>
</html>
