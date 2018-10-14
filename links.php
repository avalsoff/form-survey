<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<style>
  body {
    margin: 0;
    padding: 0;
  }

  .container {
    width: 1200px;
    margin: 0 auto;
  }

  table {
    width: 100%;
    border-collapse: collapse;
  }

  td,
  th {
    border: 1px solid #aaa;
  }
</style>
<?php
  require 'functions.php';
  $link = mysqli_connect('localhost', 'root', '', 'db_test');  
  $sql = 'SELECT * FROM forms';
  $result = mysqli_query($link, $sql);
?>

<body>
  <div class="container">
    <h1 style="text-align: center">Отправленные формы</h1>
    <table style="text-align: center">
      <tr>
        <th>ID</th>
        <th>Наименование организации</th>
        <th>Дата</th>
      </tr>
      <?php 
      while ($row = mysqli_fetch_array($result)) { ?>
        <tr>
          <td><a href="<?php echo url() . $FOLDER_NAME . 'single.php?id=' . $row['id'] ?>"><?php echo $row['id'] ?></a></td>
          <td><a href="<?php echo url() . $FOLDER_NAME . 'single.php?id=' . $row['id'] ?>"><?php echo $row['org_name'] ?></a></td>
          <td><?php echo $row['submit_date'] ?></td>
        </tr>
      <?php }
      mysqli_free_result($result);
      mysqli_close($link);
      ?>
    </table>
  </div>
</body>

</html>