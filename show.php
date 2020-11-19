<html>
<head>
    <title>ITF Lab</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
    <body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabmysqlserver.mysql.database.azure.com', 'nattapat@itflabmysqlserver', 'Gram25452002++', 'labitf', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<br>
<div class="container">
    <table class = "table table-bordered table-hover" width="1200" align="center" border="1">
        <thead class="thead-dark">
    <tr>
        <th width="300"> <div align="center">Name</div></th>
        <th width="400"> <div align="center">Comment </div></th>
        <th width="300"> <div align="center">Link </div></th>
        <th width="200"> <div align="center">Action</div></th>
    </tr>
    </thead>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
        <tbody>
                <tr>
            <td><?php echo $Result['name'];?></td>
            <td><?php echo $Result['comment'];?></td>
            <td><?php echo $Result['link'];?></td>
            <td>
                <a href="edit.php?ID=<?php echo $Result['ID']?>" class="btn btn-outline-warning" >Edit</a>
                <a href="del.php?ID=<?php echo $Result['ID']?>" class="btn btn-outline-danger" onclick="return confirm('Confirm data deletion?')">Delete</a>
                </tr>
        </tbody>
<?php
}
?>
    </table>
    <button type="button" class="btn btn-outline-info" onclick ="window.location.href='index.html'">Add</button>
    <a href="reset.php"><button type="button" class="btn btn-outline-danger" onclick="return confirm('Confirm to reset the data?')">Reset</button></a>
<?php
mysqli_close($conn);
?>
    </body>
</html>
