<!DOCTYPE html>
<html lang="ko">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>해싱 디해싱</title>
  </head>

  <body>

    <?php
  /* echo "test123";
  echo "<br>";
  echo password_hash("test123", PASSWORD_DEFAULT);
  echo password_hash("test123", PASSWORD_BCRYPT); */

  $input = "test123";
  $hashedPwdInDb = password_hash("test123", PASSWORD_DEFAULT);

  echo password_verify($input, $hashedPwdInDb)
  ?>
  </body>

</html>