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
		</style>
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
