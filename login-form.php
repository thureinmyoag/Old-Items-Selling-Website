<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
		}
		.wrapper {
			background-color: #B5F4E9;
			width: 500px;
			height: 220px;
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
		input[type="text"],input[type ="password"] {
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
		input[type="submit"] {
			border: 1px solid #7C1A34;
			width: 100px;
			height: 40px;
			text-align: center;
			margin-bottom: 20px;
			transition: 0.5s ease;
			border-radius: 5px;
			margin-top: 5px;
		}
		input:hover {
			background: #AAA;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div class="wrapper">

		<h1>Login Form</h1><br>
		<form action="login.php" method="post">
			<article>
				<label for="name">Name</label>
				<!-- <input type="hidden" name="id" > -->
				<input type="text" id="username" name="username"placeholder="Name" required>
			</article>
			<article>
				<label for="password">Password</label>
				<input type="password" id="password" name="password" placeholder="Password" required>
			</article>

			<input type="submit" name="" value="Login">

		</form>
	</div>



</body>
</html>
