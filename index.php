<?php 
  $link = mysqli_connect('localhost', 'root', '', 'db_test');
  $sql = "CREATE TABLE IF NOT EXISTS forms(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    org_name VARCHAR(210) NOT NULL,
    submit_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    form_data TEXT NOT NULL
  )";
  mysqli_query($link, $sql);
  $orgName = $_POST['0'];
  $formData = serialize($_POST);
  $sql = "INSERT INTO forms (org_name, form_data) VALUES ('$orgName', '$formData')";
  mysqli_query($link, $sql);
  mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Спасибо</title>
</head>
<body>
  <div style="text-align:center">
    <h1>Форма успешно отправлена!</h1>
    <h3>Спасибо за ваши ответы.</h3>
  </div>
</body>
</html>