<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<!--[if lt IE 9]>
<script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="shortcut icon" href="images/favicon2.gif">
<link rel="stylesheet" type="text/css" href="css/smartphone.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<link rel="stylesheet" href="css/jquery.simpleSlideShow.css">-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
$(window).load(function() {
 $('.flexslider').flexslider({
 	slideshowSpeed:3000,
	 controlNav:false,
	 directionNav:false
 });
});
</script>
<!--<script src="js/jquery.simpleSlideShow.js"></script>
<script>
$(function() {
  $('.simpleSlideShow').SimpleSlideShow({
    //'height' : 630, // ステージの高さ。デフォルトでは1枚目の画像の高さ。
    //'width'  : 394, // ステージの横幅。デフォルトでは1枚目の画像の横幅。
    'duration' : 2000, // アニメーションにかかる時間。
    'interval' : 2000  // 次のアニメーションまでのインターバル。
  });
});
</script>-->


<script>
$(document).ready(function() {
	 $('.drawer').drawer();
});
</script>

<script>
$(document).ready(function() {
  var pagetop = $('.pagetop');
    $(window).scroll(function () {
       if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
       } else {
            pagetop.fadeOut();
            }
       });
       pagetop.click(function () {
           $('body, html').animate({ scrollTop: 0 }, 500);
              return false;
   });
});
</script>



<title>Bauty Site Ranking</title>

</head>

<body class="drawer drawer--left" id="home">
	<p class="pagetop"><a href="#wrap">▲</a></p>
	<div id="wrapper">
		<aside id="side_menu">
			<?php include( $_SERVER['DOCUMENT_ROOT'] . '/side_menu.html'); ?>
		</aside>
		<!--main-->
		<main>
			<div class="flexslider">
				<ul class="slides">
				<li><img src="images/main3_.jpg" alt="画像1"></li>
				<li><img src="images/main2_.jpg"  alt="画像2"></li>
				<li><img src="images/main1_.jpg"  alt="画像1"></li>
				<li><img src="images/main4_.jpg"  alt="画像1"></li>
				</ul>
			</div>
			
			<footer id="footer_body">
				<div class="f1"><img src="images/footer_logo.png"></div>
				<div class="f2">
					<h3>contents</h3>
					<p><a href="../history/index.html"><i class="fa fa-chevron-circle-right blue" aria-hidden="true"></i>&nbsp;美容と歴史</a></p>
					<p><a href="../html/why.html"><i class="fa fa-chevron-circle-right blue" aria-hidden="true"></i>&nbsp;美容と欲求</a></p>
					<p><a href="../sleep/index.html"><i class="fa fa-chevron-circle-right blue" aria-hidden="true"></i>&nbsp;美容と睡眠</a></p>
					<p><a href="../stress/index.html"><i class="fa fa-chevron-circle-right blue" aria-hidden="true"></i>&nbsp;美容とストレス</a></p>
				</div>

				<div class="f3">
					<h3>special</h3>

					<p><a href="http://beauty-info.mobi/self_beauty_program/"><i class="fa fa-chevron-circle-right blue" aria-hidden="true"></i>&nbsp;Self Beauty Program</a></p>
				</div>


				<div class="f4">
					<h3>掲載店舗募集中</h3>
					<p>美容系、服飾系、ダイエット系、グッズ通販サイト等の情報を募集中。</p>
					<!--<botton>お問い合わせフォーム</botton>-->
				</div>

				<div class="f5">
					<small>copyright &copy; Beauty Site Ranking</small>
				</div>
			</footer>
		</main>
		<!--end main-->

	</div><!-- wrapper end -->

</body>

</html>
