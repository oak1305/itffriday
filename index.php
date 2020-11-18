<html>
  <head>
    <title>All Comments</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
      body {
        background-color: #F0F8FF;
      }
    </style>
  </head>
  <body>
    <?php
    $conn = mysqli_init();
    mysqli_real_connect($conn, '1711itf.mysql.database.azure.com', 'oak@1711itf', 'Itf130545', 'itflab', 3306);
    if (mysqli_connect_errno($conn))
    {
        die('Failed to connect to MySQL: '.mysqli_connect_error());
    }
    $res = mysqli_query($conn, 'SELECT * FROM guestbook');
    ?>
    <div class="container">
    <table class="table table-stripped table-bordered table-hover mt-5">
      <thead class="thead-dark">
        <tr>
          <th width="100"> <div align="center">Name</div></th>
          <th width="350"> <div align="center">Comment </div></th>
          <th width="150"> <div align="center">Action </div></th>
        </tr>
      </thead>
      <?php
      while($Result = mysqli_fetch_array($res))
      {
      ?>
        <tr>
          <td><?php echo $Result['Name'];?></td>
          <td><?php echo $Result['Comment'];?></td>
          <td><div class="text-center"><a href="delete.php?delete_id=<?php echo $Result['ID']; ?>" class="btn btn-danger">ลบ</a> <a href="update.php?edit_id=<?php echo $Result["ID"]; ?>" class="btn btn-warning" >แก้ไข</a></div></td>
        </tr>
      <?php
      }
      ?>
    </table>
    <div class="text-center"><a href="form.html" class="btn btn-success">เพิ่ม +</a></div>
    </div>
    <?php
    mysqli_close($conn);
    ?>
  </body>
</html>
