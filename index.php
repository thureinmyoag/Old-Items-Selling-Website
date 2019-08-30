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

		<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>

			<div class="container">
				<header>
            <h1> My Website </h1>
						<div class="login-bar">
							<li><a href="register-form.php">Register</li>
							<li><a href="login-form.php">Login</li>
						</div>
        </header>
			</div>

			<div class="container">
				<section>
					<nav>
						<ul class="category">
							<li><a href="index.php">All Categories</a></li>
								<?php while($row = mysqli_fetch_assoc($cats)): ?>
							<li>
								<a href="index.php?cat=<?php echo $row['id']?>">
									<?php echo $row['name'] ?>
								</a>
							</li>
						<?php endwhile; ?>
						</ul>
					</nav>

				<div class="bar">
					<ul class="item-bar">
						<li><a href="#">Home</a></li>
						<li><a href="#">All Items</a></li>
					</ul>
				</div>

				<div class="main">
					<ul class="items">
						<?php while ($row = mysqli_fetch_assoc($items)): ?>
						<li>
						<img src="photos/<?php echo $row['photo'] ?>" height="100">
						<i>
								 <?php echo $row['name'] ?>
						</i>
						<b>
								 <?php echo $row['description'] ?>
						</b>
						<a href="item-detail.php?id=<?php echo $row['id'] ?> ">Buy</a>
						</li>
					<?php endwhile; ?>
					</ul>
				</div>

				</section>
				</div>

			<div class="row">
				<footer class="col-md-12"></footer>
			</div>
		</div>
	</body>
</html>
