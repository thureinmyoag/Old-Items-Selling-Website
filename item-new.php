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
  <link rel="stylesheet" href="css/style.css">
  <style media="screen">
    form label {
      display: block;
      margin-top: 8px;
    }
    .wrapper {
      background-color: #B5F4E9;
      width: 380px;
      display: flex;
      align-items: stretch;
      margin: 20px auto;
      border: 4px solid #6e71bd;
      text-align: center;
      padding: 20px;
      border-radius: 10px;
    }
    input[type="submit"] {
      border: 1px solid #6e71bd;
      width: 100px;
      height: 40px;
      text-align: center;
      margin-top: -10px;
      transition: 0.5s ease;
      border-radius: 5px;
    }
    label,select{
      color: #000;
      display: inline-block;
      margin-bottom: 4px;
      margin-right:5px;
      font-size: 18px;
    }
    input[type="text"],textarea,input[type="file"] {
      border: 1px solid #a3a5e8;
      width: 300px;
      padding: 8px 14px;
      margin-bottom: 10px;
      margin-left: 20px;
      border-radius: 4px;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <!-- <main> -->
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
        <input type="file" name="photo" id="photo">
        <input type="file" name="photo1" id="photo">
        <input type="file" name="photo2" id="photo">
        <br><br>
        <input type="submit"  value="Add New Item">
      </form>
    <!-- </main> -->

  </div>

</body>
</html>
