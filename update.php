<?php
  $conn = mysqli_init();
  mysqli_real_connect($conn, '1711itf.mysql.database.azure.com', 'oak@1711itf', 'Itf130545', 'itflab', 3306);
  if (mysqli_connect_errno($conn))
  {
      die('Failed to connect to MySQL: '.mysqli_connect_error());
  }
  $edit_id = $_GET['edit_id'];
  $res = mysqli_query($conn, "SELECT * FROM guestbook WHERE id='$edit_id'");
  $row = mysqli_fetch_array($res);
  extract($row);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Update Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <form action="updatedb.php?edit_id=<?php echo $edit_id; ?>" method = "post" id="UpdateForm" class="form-horizontal mt-5">
        <div class="display-3 text-center mb-3">Update Form</div>
        <div class="form-group">
          <label for="name" class="col-sm-3 control-label">Name</label>
          <div class="col-sm-6">
            <input type="text" name="name" id="idname" class="form-control" value="<?php echo $Name; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="comment" class="col-sm-3 control-label">Comment</label>
          <div class="col-sm-6">
            <textarea rows="10" cols="40" name = "comment" id="idComment"><?php echo htmlspecialchars($Comment); ?></textarea>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-12 mt-3">
            <input type="submit" name="upbtn" id="idupbtn" class="btn btn-success" value="แก้ไข">
            <a href="index.php" class="btn btn-danger">ยกเลิก</a>
          </div>
        </div>

      </form>
    </div>
  </body>
</html>
