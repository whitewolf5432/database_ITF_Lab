<?php
$id=$_POST['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'mydatabasetotestwebsite.mysql.database.azure.com', 'nattapat@mydatabasetotestwebsite', 'Gram25452002++', 'website', 3306);
$name=$_POST['name'];
$comment=$_POST['comment'];
$link=$_POST['link'];
$sql="UPDATE guestbook SET name='$name', comment='$comment', link='$link' WHERE ID='$id'";
if (mysqli_query($conn, $sql)) {
    header("Location: show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
?>
