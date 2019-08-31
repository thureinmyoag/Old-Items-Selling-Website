<?php

  include("confs/config.php");

	$name = $_POST['name'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$category_id = $_POST['category_id'];
	$photo = $_FILES['photo']['name'];
  $photo1 = $_FILES['photo1']['name'];
  $photo2 = $_FILES['photo2']['name'];
  $user_id = $_POST['id'];

	$tmp = $_FILES['photo']['tmp_name'];
  $tmp1 = $_FILES['photo1']['tmp_name'];
  $tmp2 = $_FILES['photo2']['tmp_name'];

  $type = $_FILES['photo']['type'];
  $type1 = $_FILES['photo1']['type'];
  $type2 = $_FILES['photo2']['type'];


	if ($type == "image/jpeg" || $type == "image/png" || $type == "image/gif") {
		move_uploaded_file($tmp, "photos/$photo");
	}
	if ($type1 == "image/jpeg" || $type1 == "image/png" || $type1 == "image/gif") {
    move_uploaded_file($tmp1, "photos/$photo1");
  }
  if ($type2 == "image/jpeg" || $type2 == "image/png" || $type2 == "image/gif") {
    move_uploaded_file($tmp2, "photos/$photo2");
  }

	$sql = "INSERT INTO items (
	name, description, price, category_id, photo, photo1, photo2, user_id)
	VALUES (
	'$name', '$description', '$price', '$category_id', '$photo', '$photo1', '$photo2', '$user_id'
  )";

	mysqli_query($conn, $sql);
  header("location: home.php");
	echo "$sql";
  ?>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
