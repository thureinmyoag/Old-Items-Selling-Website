<?php
include("confs/config.php");
session_start();
// echo $_SESSION['id'];
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}

	// $items = mysqli_query($conn,"SELECT * FROM items");
	// if (isset($_GET['id'])) {
	// 	$user_id = $_GET['id'];
	// 	$items = mysqli_query($conn, "SELECT * FROM items WHERE user_id = $user_id");
	// }

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

		<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>

			<div class="container">

				<header>
            <h1> My Website </h1>
						<div class="login-bar">
							<li><?php echo $_SESSION['name'] ?></li>
              <li><a href="logout.php">Logout</a></li>

						</div>
        </header>
			</div>

			<div class="container">
				<section>
					<nav>
						<ul class="category">
							<li><a href="home.php">All Categories</li>
								<?php while($row = mysqli_fetch_assoc($cats)): ?>
							<li>
								<a href="home.php?cat=<?php echo $row['id']?>">
									<?php echo $row['name'] ?>
								</a>
							</li>
						<?php endwhile; ?>
						</ul>
					</nav>

				<div class="bar">
					<ul class="item-bar">
						<li><a href="home.php">Home</a></li>
						<li><a href="home.php?id=<?php echo $_SESSION['id'] ?>">My Items</a></li>
						<!-- <li><a href="#">All Items</a></li> -->
						<li><a href="item-new.php">Add New Item</a></li>
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
						<a href="item-detail.php?id=<?php echo $row['id'] ?> ">Detail</a>
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
