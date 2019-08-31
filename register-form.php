<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
		}
		.wrapper {
			background-color: #B5F4E9;
			width: 550px;
			height: 440px;
			margin: 20px auto;
			border: 4px solid #6e71bd;
			text-align: center;
			padding: 20px;
			border-radius: 10px;
		}
		label {
			color: #000;
			display: block;
			margin-bottom: 4px;
			margin-left: 0px;
			font-size: 18px;
		}
		input[type="text"],input[type="email"],input[type="phone"],textarea{
			border: 1px solid #a3a5e8;
			width: 300px;
			padding: 8px 14px;
			margin-bottom: 5px;
			margin-left: 20px;
			border-radius: 4px;
		}
		input[type="password"] {
			border: 1px solid #a3a5e8;
			width: 300px;
			padding: 8px 14px;
			margin-top: -5px;
			margin-left: 20px;
			border-radius: 4px;
		}
		button {
			border: 1px solid #a3a5e8;
			width: 100px;
			height: 40px;
			text-align: center;
			margin-top: 10px;
			transition: 0.5s ease;
			border-radius: 15px;
			color: #000;
		}
		button:hover {
			background: #AAA;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div class="wrapper">

		<h1>Register Form</h1><br>
		<form class="" action="register.php" method="post">
			<label for="name">Name</label>
			<input type="text" name="username" id="name"placeholder="Name" required>

			<label for="email">Email</label>
			<input type="email" name="email" id="email" placeholder="Email" required>

			<label for="phone">Phone</label>
			<input type="phone" name="phone" id="phone" placeholder="Phone" >

			<label for="address">Address</label>
			<textarea name="address" id="address"></textarea>

			<label for="password">Password</label><br>
			<input type="password" name="password" id="password" placeholder="Password" required><br>

			<button type="submit" value="Register" >Register</button>
		</form>

	</div>



</body>
</html>
