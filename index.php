<?php
	include ("confs/config.php");

	$items = mysqli_query($conn,"SELECT * FROM items");
	$cats = mysqli_query($conn,"SELECT * FROM categories");


	if (isset($_GET['cat'])) {
		$cat_id = $_GET['cat'];
		$items = mysqli_query($conn, "SELECT * FROM items WHERE category_id = $cat_id");
	}
	else {
		$items = mysqli_query($conn, "SELECT * FROM items");
	}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>My Website</title>
		<style>
/*
		.container {
			display: grid;
			grid-template-columns: repeat(12, 12fr);
			grid-auto-rows: 80px 100% 50px;
		}
		header {
			grid-column: span 12;
			display: flex;
			background-color: #000;
			border-top: 8px solid  #21b79e;
			height: 95%;
		}
		header > div:first-child {
			font-weight: bold;
		}

		header > div:nth-child(2) {
			margin-left: auto;
		}
		header > div {
			margin: 15px 15px;
			font-size: 25px;
		}
		a {
			text-decoration: none;
			color: #fff;
			border-bottom: 1px dotted #000;
		}
		h1 {
			margin: 0 10px;
		}
		nav {
			grid-column: span 2;
			background-color: #B5F4E9;
		}
		main {
			grid-column: span 10;
		}
		footer {
			grid-column: span 12;
			background-color: #004c3f;
		}
		.category li {
			height: 20%;
			font-size: 25px;
			margin-top: 20px;
			list-style-type: square;
		}
		.category li a {
			color: #003251;
		}
		.items li {
			display: block;
			margin: 10px 15px;
			padding: 10px 10px;
			float: left;
			width: 44%;
			border: 3px solid #B5F4E9;
			border-radius: 5px;
			border-right-style: none;
			border-top-style: none;
		}
		.items p {
			font-size: 20px;
		}
		.items a {
			color: #003251;
		}
		footer > p {
			text-align: center;
			color: #fff;
		} */
		</style>
		<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
			<div class="container">
				<header>
            <div><a>OLD-ITEMS SELLING WEBSITE</a></div>
            <div><a href="register-form.php">Register</a></div>
            <div><a href="login-form.php">Login</a></div>
        </header>
				<nav>
					<div class="category">
					<li><a href="index.php">All Categories</a></li>
							<?php while($row = mysqli_fetch_assoc($cats)): ?>

						<li>
							<a href="index.php?cat=<?php echo $row['id']?>">
								<?php echo $row['name'] ?>
							</a>
						</li>

					<?php endwhile; ?>
				</div>
				</nav>
				<main>
					<div class="items">
					<?php while ($row = mysqli_fetch_assoc($items)): ?>
					<li>
					<img src="photos/<?php echo $row['photo'] ?>" height="100">
					<b>
							 [<?php echo $row['name'] ?>]
					</b>
					<p>
							 <?php echo $row['description'] ?>
					</p>
					<a href="item-detail.php?id=<?php echo $row['id'] ?> ">Detail</a>
					</li>
				<?php endwhile; ?>
			</div>
			</main>
				<footer><p><?php echo date("Y");?> All Rights Reserved. Crafted By Thurein Myo Ag.</p></footer>
			</div>
	</body>
</html>
