<?php
session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style media="screen">
    form label {
      display: block;
      margin-top: 8px;
    }
  </style>
</head>
<body>
  <form class="" action="item-add.php" method="post"
  enctype="multipart/form-data">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" placeholder="Name">
    <input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>">

    <label for="description">Description</label>
    <textarea name="description" id="description"></textarea>

    <label for="price">Price</label>
    <input type="text" name="price" id="price" placeholder="Price">

    <label for="categories">Category</label>
		<select name="category_id" id="categories">
      <option value="0">---Choose---</option>
      <?php
        include("confs/config.php");
        $result = mysqli_query($conn, "SELECT id, name from categories");
        while ($row = mysqli_fetch_assoc($result)):
       ?>
       <option value="<?php echo $row['id'] ?>">
         <?php echo $row['name'] ?>
       </option>
     <?php endwhile; ?>
    </select>

    <label for="photo">Photo</label>
    <input type="file" name="photo" id="photo" multiple>
    <br><br>
    <input type="submit"  value="Add New Item">
  </form>
</body>
</html>
