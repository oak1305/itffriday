<!DOCTYPE html>
<html>
  <head>
    <title>Added</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php

    $conn = mysqli_init();
    mysqli_real_connect($conn, '1711itf.mysql.database.azure.com', 'oak@1711itf', 'Itf130545', 'itflab', 3306);
    if (mysqli_connect_errno($conn))
    {
        die('Failed to connect to MySQL: '.mysqli_connect_error());
    }


    $name = $_POST['name'];
    $comment = $_POST['comment'];


    $sql = "INSERT INTO guestbook (Name, Comment) VALUES ('$name', '$comment')";


    if (mysqli_query($conn, $sql)) {
      ?><div class="display-3 text-center mb-3">Added Successfully</div>
      <div class="text-center"><a href="index.php" class="btn btn-warning">กลับ</a></div><?php
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
    mysqli_close($conn);
    ?>
  </body>
</html>
