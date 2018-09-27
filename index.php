<?php
$conn = mysqli_connect(
  '127.0.0.1',
  'root',
  '20150285',
  'opentutorials');


  $sql = "SELECT * FROM topic";
  $result = mysqli_query($conn, $sql);
  $list = '';
  while($row = mysqli_fetch_array($result)) {
    //<li><a href ="index.php?id=19">MySQL</a></li>
    $list = $list."<li><a
    href=\"index.php?id={$row['id']}\">{$row['title']}</li>";
  }
  $article = array(
    'title' =>'소프트웨어학부 20150285 최유성',
    'description' =>'라즈베리파이를 이용한 지문인식 키오스크 만들기'
  );
  $update_link = '';
  $delete_link ='';
  if(isset($_GET['id'])) {
  $sql = "SELECT * FROM topic WHERE
  id={$_GET['id']}";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $article['title'] = $row['title'];
  $article['description'] = $row['description'];

  $update_link = '<a href =
  "update.php?id='.$_GET['id'].'">update</a>';
  $delete_link ='
  <form action="process_delete.php" method="post">
    <input type="hidden" name="id" value="'.$_GET['id'].'">
    <input type="submit" value="delete">
  </form>
  ';
}
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
  </head>
    <body>
      <h1><a href = "index.php">WEB</h1>
      <ol>
        <?= $list; ?>
      </ol>
      <a href ="create.php">create</a>
      <?=$update_link?>
      <?=$delete_link?>
      <h2><?=$article['title']?></h2>
      <?=$article['description']?>
  </body>
</html>
