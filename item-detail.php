<?php
// session_start();
//
// $userid = $_SESSION['id'];
//
// $name = $_SESSION['name'];

include("confs/config.php");



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>

  <?php
  $id = $_GET['id'];
  $items = mysqli_query($conn,"SELECT * FROM items WHERE id = $id");
  ?>
  <div class="main">
    <ul class="items">

      <?php while ($row = mysqli_fetch_assoc($items)): ?>
      <li>
      <img src="photos/<?php echo $row['photo'] ?>" height="100">
      <i>
           <?php echo $row['name'] ?>
      </i>
      <p>$ <?php echo $row['price'] ?></p>

      <b>
           <?php echo $row['description'] ?>

      </b>
      </li>
      <?php
      $user_id = $row['user_id'];
      ?>

    </ul>
    <a href="index.php">Back</a>

  <?php
     $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $user_id;

       ");
      $rows = mysqli_fetch_assoc($result);
    ?>

    <ul class="items">

      <li>
        <i>
          <?php echo $rows['username'] ?>
        </i>
        <p><?php echo $rows['email'] ?></p>

        <b>
          <?php echo $rows['phone'] ?>
        </b>
        <b>
          <?php echo $rows['address'] ?>
        </b>
        <?php endwhile; ?>

      </li>
    </ul>
  </div>
</body>
</html>
