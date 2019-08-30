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
			display: inline-block;
			margin-bottom: 4px;
			margin-right:5px;
			font-size: 18px;
		}
		input[type="text"],input[type="email"],input[type="phone"],textarea{
			border: 1px solid #a3a5e8;
			width: 300px;
			padding: 8px 14px;
			margin-bottom: 20px;
			margin-left: 20px;
			border-radius: 4px;
		}
		input[type="password"] {
			border: 1px solid #a3a5e8;
			width: 300px;
			padding: 8px 14px;
			margin-bottom: 20px;
			margin-left: 20px;
			border-radius: 4px;
		}

		#password {
			margin-left: -5px;

		}
		button {
			border: 1px solid #7C1A34;
			width: 100px;
			height: 40px;
			text-align: center;
			margin-bottom: 20px;
			transition: 0.5s ease;
			border-radius: 5px;
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
			<!-- <article> -->
				<label for="name">Name</label>
				<input type="text" name="username" id="name"placeholder="Name" required>
			<!-- </article> -->
			<!-- <article> -->
				<label for="email">Email</label>
				<input type="email" name="email" id="email" placeholder="Email" required>
			<!-- </article> -->
			<!-- <article> -->
				<label for="phone">Phone</label>
				<input type="phone" name="phone" id="phone" placeholder="Phone" >
			<!-- </article> -->
			<!-- <article> -->
				<label for="address">Address</label>
				<textarea name="address" id="address"></textarea>
			<!-- </article> -->
			<!-- <article> -->
				<label for="password">Password</label>
				<input type="password" name="password" id="password" placeholder="Password" required>
			<!-- </article> -->
			<input type="submit" name="" value="Register">
		</form>

		<!-- <button id="btn">Register</button> -->
	</div>



</body>
</html>
