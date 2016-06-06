<?php
$username = "dave";
$password = "blackhat";
$nonsense = "supercalifragilisticexpialidocious";

if (isset($_COOKIE['PrivatePageLogin'])) {
   if ($_COOKIE['PrivatePageLogin'] == md5($password.$nonsense)) {
?>

<html>
<head>
  <title>David Martinez Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../dist/css/custom.css" >

  <script src="../dist/ajax/jquery.min.js"></script>
  <script src="../dist/js/bootstrap.min.js"></script>
</head>
<body>

<a href = "https://www.youtube.com/watch?v=8ZcmTl_1ER8"  target = "_blank">
 <button type="button" class="btn btn-primary btn-md"> Choose Wisely. </button>

</a>

<p></p>

<a href = "https://www.youtube.com/watch?v=tqicgFjSD8U"  target = "_blank">
 <button type="button" class="btn btn-primary btn-md"> Choose Wisely. </button>
 
  </a>
 <!-- -->

</body>
</html>


<?php
      exit;
   } else {
      echo "Stop Now! While You Still have a Chance";
      exit;
   }
}

if (isset($_GET['p']) && $_GET['p'] == "login") {
   if ($_POST['user'] != $username) {
      echo "Oh Baby a Triple";
      exit;
   } else if ($_POST['keypass'] != $password) {
      echo "Oh Baby a Triple";
      exit;
   } else if ($_POST['user'] == $username && $_POST['keypass'] == $password) {
      setcookie('PrivatePageLogin', md5($_POST['keypass'].$nonsense));
      header("Location: $_SERVER[PHP_SELF]");
   } else {
      echo "Oh Baby a Triple";
   }
}
?>
<style type="text/css">

div.content{
font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 20pt;
}

-->
</style>
<div class="content">
<center>
<img src = "LogoLogin.jpg" height = "200">
<p></p>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>?p=login" method="post">
<label>USER NAME<input type="text" name="user" id="user" /> </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label>PASSWORD <input type="password" name="keypass" id="keypass" /> </label>
<input type="submit" id="submit" value="Login" />
</form>
</center>
</div>
