<?php
$conn = mysqli_connect(
  "127.0.0.1",
  "root",
  "20150285",
  "opentutorials"
);

mysqli_query($conn, "
  INSERT INTO topic
    (title, description, created)
    VALUES(
      'MYSQL',
      'MySQL is ...',
      NOW()
      )
  ");
 ?>
