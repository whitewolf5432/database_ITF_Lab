<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabmysqlserver.mysql.database.azure.com', 'nattapat@itflabmysqlserver', 'Gram25452002++', 'labitf', 3306);
$sql="DELETE FROM guestbook";
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
if (mysqli_query($conn, $sql)) {
    header("Location: show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
?>
