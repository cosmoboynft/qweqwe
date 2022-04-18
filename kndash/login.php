<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Area | Account Login</title>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
</head>
<body>

  <?php
  include("ayar.php");
  session_start();
  ob_start();
  if(($_POST["username"]==$user) and ($_POST["password"]==$pass)){
  $_SESSION["login"] = "true";
  $_SESSION["user"] = $user;
  $_SESSION["pass"] = $pass;
  header("Location:users.php");
  }else{
  echo "Kullancı Adı veya Şifre Yanlış.<br>";
  echo "Giriş sayfasına yönlendiriliyorsunuz.";
  header("Refresh: 2; url=index.php");
  }
  ob_end_flush();
  ?>
    </body>
</html>