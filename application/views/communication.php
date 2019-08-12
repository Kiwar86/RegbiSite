<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html"/>
    <meta name="author" content="admin"/>
   <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
   <link href="css/style.css" rel="stylesheet" type="text/css" />

	<title>Связаться с нами</title>
</head>
<body>
<?php
    include("application/views/header.php");
?>
<div style="padding:0px; margin-left: 20%;">
<form method="post" action="<?php echo base_url()."index.php/main/milotpr" ?>">

  <!--Тег задает заголовок для групповых элементов-->
  <legend><h2>Оставьте сообщение:</h2></legend>
  Ваше имя: 
  <br />
  <!--Устанавливает однострочное текстовое поле ввода:-->
  <input type="text" name="name">
  <br />
  <!--Используется для полей ввода, которые должны содержать адрес электронной почты.-->
  E-mail:
  <br />
  <input type="text" name="email">
  <br />
  Номер телефона:
  <br />
  <input type="text" name="phone">
  <br />
  Сообщение:
  <!--Тег разрешает многострочный ввод текста.-->
  <br />
  <textarea rows="10" cols="45" name="message2"></textarea>
  <br />
  <!--Устанавливает кнопку для отправки данных формы в обработчик формы.-->
  <input type="submit" value="Отправить сообщение">
  <br />
  <br />

</form>
</div>

<?php
    include("application/views/futer.php");
?>

</body>
</html>