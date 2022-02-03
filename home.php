<?php
include("confs/config.php");
session_start();
// If the user is not logged in redirect to the login page
if (!isset($_SESSION['loggedin'])) {https://github.com/thureinmyoag/Old-Items-Selling-Website/blob/master/home.php
	header('Location: index.php');
	exit();
}

	$items = mysqli_query($conn, "SELECT * FROM items");
	$cats = mysqli_query($conn,"SELECT * FROM categories");
	if (isset($_GET['cat'])) {
		$cat_id = $_GET['cat'];
		$items = mysqli_query($conn, "SELECT * FROM items WHERE category_id = $cat_id");
	}
	else {
		$items = mysqli_query($conn, "SELECT * FROM items");
	}

	if (isset($_GET['id'])) {
		$user_id = $_GET['id'];
		$items = mysqli_query($conn, "SELECT * FROM items WHERE user_id = $user_id");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>My Website</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<style>

	</style>

	<body>
			<div class="container">
				<header>
					<div><a>OLD-ITEMS SELLING WEBSITE</a></div>
					<div><a><?php echo $_SESSION['name'] ?></a></div>
					<div><a href="logout.php">Logout</a></div>

					</header>
						<nav>
							<div class="category">
								<li><a href="home.php">All Categories</li>
									<?php while($row = mysqli_fetch_assoc($cats)): ?>
										<li>
											<a href="home.php?cat=<?php echo $row['id']?>">
												<?php echo $row['name'] ?>
											</a>
										</li>
									<?php endwhile; ?>
								</div>
							</nav>
							<main>
								<div class="bar">
									<a href="home.php">Home</a>
									<a href="home.php?id=<?php echo $_SESSION['id'] ?>">My Items</a>
									<a href="item-new.php">Add New Item</a>
								</div>

								<div class="items">
									<?php while ($row = mysqli_fetch_assoc($items)): ?>
										<li>
											<img src="photos/<?php echo $row['photo'] ?>" height="100">
											<img src="photos/<?php echo $row['photo1'] ?>" height="100" alt="...">

											<b>
												<?php echo $row['name'] ?>
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
