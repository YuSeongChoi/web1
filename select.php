<?php
$conn = mysqli_connect(
  '127.0.0.1',
  'root',
  '20150285',
  'opentutorials');

  $sql = "SELECT * FROM topic";
  $result =  mysqli_query($conn, $sql);

  while($row = mysqli_fetch_array($result)) {
    echo '<h2>'.$row['title'].'</h2>';
    echo $row['description'];
  }
?>
