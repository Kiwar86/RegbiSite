<html>
<head>
    <meta http-equiv="content-type" content="text/html"/>
    <meta name="author" content="admin"/>
    <link href="<?php echo base_url()?>css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet" type="text/css" />
	   
       <title>Курсовая</title>
</head>
<body id="body">
<div id="conteinir" class="container" style="border:0px solid #cc0000; " style="padding:0px; margin:0px;">
<div class="row">
<div class="btn-group ">
<div id="avtorizacia" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"style="padding:0px; margin:0px;" >
<img class="img-responsive" src="/image/ab.png">
<div id="avtor">
<?php
	if (!isset($_SESSION['id_sess'])){
?>
<a href="<?php echo base_url().'index.php/main/login'?>" class="btn btn-primary" > Вход</a>
<a href="<?php echo base_url().'index.php/main/reg'?>" class="btn btn-primary" > Регистрация</a>
<?php
	}
    else{
?>
<a href="<?php echo base_url().'index.php/main/vixod'?>" class="btn btn-primary" > Выход</a>
<?php
	}
   // print_r($_SESSION);
?>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 btn btn-warning" ><a href="<?php echo base_url().'index.php/main/news'?>"><p><font size="+1" color="black">Главная</font></p></a></div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 btn btn-warning" ><a href="<?php echo base_url().'index.php/main/video'?>"><p><font size="+1" color="black">Видео-Фото</font></p></a></div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 btn btn-warning" ><a href="<?php echo base_url().'index.php/main/games'?>"><p><font size="+1" color="black">Правила игры</font></p></a></div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 btn btn-warning" ><a href="<?php echo base_url().'index.php/main/inventar'?>"><p><font size="+1" color="black">Инвентарь</font></p></a></div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 btn btn-warning" ><a href="<?php echo base_url().'index.php/main/komanda'?>"><p><font size="+1" color="black">Команды России</font></p></a></div>
<div class="col-lg-2 col-md-2 col-sm-1 col-xs-12 btn btn-warning" ><a href="<?php echo base_url().'index.php/main/communication'?>"><p><font size="+1" color="black">Связаться с нами</font></p></a></div>
</div>




