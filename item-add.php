<?php

  // if(isset($_POST['submit'])) {
  //   $countphotos = count($_FILES['photo']['name']);
  //
  //   for ($i=0; $i < $countphotos; $i++) {
  //     $photoname
  //   }
  // }

  include("confs/config.php");

	$name = $_POST['name'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$category_id = $_POST['category_id'];
	$photo = $_FILES['photo']['name'];
  $user_id = $_POST['id'];
	$tmp = $_FILES['photo']['tmp_name'];
  $type = $_FILES['photo']['type'];

	if ($type == "image/jpeg" || $type == "image/png" || $type == "image/gif") {
		move_uploaded_file($tmp, "photos/$photo");
	}

	$sql = "INSERT INTO items (
	name, description, price, category_id, photo, user_id)
	VALUES (
	'$name', '$description', '$price', '$category_id', '$photo', '$user_id'
  )";

	mysqli_query($conn, $sql);

  header("location: home.php");

	echo "$sql";
  ?>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
