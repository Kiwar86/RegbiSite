<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:0px solid #cc0000;padding:0px; margin:0px;">
<!-- Карусель -->
<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
<!-- Индикаторы для карусели -->
<ol class="carousel-indicators">
<!-- Перейти к 0 слайду карусели с помощью соответствующего индекса data-slide-to="0" -->
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<!-- Перейти к 1 слайду карусели с помощью соответствующего индекса data-slide-to="1" -->
<li data-target="#myCarousel" data-slide-to="1"></li>
<!-- Перейти к 2 слайду карусели с помощью соответствующего индекса data-slide-to="2" -->
<li data-target="#myCarousel" data-slide-to="2"></li>
</ol>
<!-- Слайды карусели -->
<div class="carousel-inner" style="height: 250px;width: 1170px;">
<!-- Слайды создаются с помощью контейнера с классом item, внутри которого помещается содержимое слайда -->
<div class="active item">
<img src="<?php	echo base_url();
?>image/futer/1.png" style="min-width: 50%;">
<div class="carousel-caption">
</div>
</div>
<!-- Слайд №2 -->
<div class="item">
<img src="<?php	echo base_url();
?>image/futer/2.png" style="min-width: 10%;">
<div class="carousel-caption">
</div>
</div>
<!-- Слайд №3 -->
<div class="item">
<img src="<?php	echo base_url();
?>image/futer/3.png" style="min-width: 50%;">
<div class="carousel-caption">
</div>
</div>
 
<!-- сюда добавляем еще код слайдера-->
 
</div>
<!-- Навигация для карусели -->
<!-- Кнопка, осуществляющая переход на предыдущий слайд с помощью атрибута data-slide="prev" -->
<a class="carousel-control left" href="#myCarousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
</a>
<!-- Кнопка, осуществляющая переход на следующий слайд с помощью атрибута data-slide="next" -->
<a class="carousel-control right" href="#myCarousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>
</div>
</div>
<script src="<?php
	echo base_url();
?>js/jquery-3.0.0.min.js"></script>
<script src="<?php
	echo base_url();
?>js/bootstrap.js"></script>
<script src="<?php
	echo base_url();
?>js/go_top.js"></script>
</body>
</html>