<!DOCTYPE html>
<html>
<head>
  <title>Edit Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
    <body>
    <?php
    $id=$_GET['ID'];
    $conn = mysqli_init();
    mysqli_real_connect($conn, 'itflabmysqlserver.mysql.database.azure.com', 'nattapat@itflabmysqlserver', 'Gram25452002++', 'labitf', 3306);
    $res = mysqli_query($conn, "SELECT * FROM guestbook WHERE ID='$id'");
    $row = mysqli_fetch_array($res)
    ?>
    <div class="container">
    <h2>Edit Form</h2>
    <form action = "update.php?ID=<?php echo $row['ID']; ?>" method = "post" id="CommentForm">
        <label for="Username">Username :</label>
          <input type="text" class="form-control" name = "name" id="idName" value="<?php echo "$row[Name]"; ?>"><br>
          <label for="Username">Comment :</label>
          <input type="text" class="form-control" name = "comment" id="idComment" value="<?php echo "$row[Comment]"; ?>"><br>
        <label for="Username">Link :</label>
          <input type="text" class="form-control" name = "link" id="idLink" value="<?php echo "$row[Link]"; ?>"><br><br>
          <button class="btn btn-outline-success" id="commentBtn">Submit</button>
      </form>
    </div>
</body>
