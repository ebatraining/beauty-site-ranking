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




<title>美容と欲望　beauty and the desire</title>

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
				<li><img src="images/top.png" alt="画像1"></li>
				<li><img src="images/top.png"  alt="画像2"></li>
				<li><img src="images/top.png"  alt="画像1"></li>
				<li><img src="images/top.png"  alt="画像1"></li>
				</ul>
			</div>





      <h1 class="midashi1">人はなぜ「美しさ」に惹かれるのか</h1>
          <img class="why" src="images/why.png">
          <p class="komidashi">人はなぜ美を求めるのでしょうか？綺麗になるためにお洒落な服や髪を染めてみたり、化粧をしたり。美しさを追求するのは、
            女子の永遠の課題と言っても過言ではありません。 いったい、その欲求はどこから湧き上がるんでしょうか。</p>


      <h2>&#9312;魅力的な異性獲得</h2>
          <img class="isei" src="images/love.png">
          <p class="text">優秀な遺伝子を残したいという本能</p>


      <div class="marusan">
      <h2>&#9314;承認欲求</h2>
          <img class="syounin" src="images/white.png">
          <p class="text">好感度や社会的依地位のため清潔感は大事</p>
      </div>


      <div class="maruni">
      <h2>&#9313;自己満足</h2>
          <img class="zikoman" src="images/zikomanzoku.png">
          <p class="text">自己のモチベーションアップ</p>
      </div>


      <div class="maruyon">
      <h2>&#9315;健康のため</h2>
          <img class="run" src="images/run.png">
          <p class="text">美しいとは健康であること</p>
      </div>


      <div class="marugo">
      <h2>&#9316;本能的な美意識</h2>
          <img class="beauty" src="images/beauty.png">
          <p class="text">先天的な本能と後天的な芸術感覚</p>
      </div>


      <h1 class="midashi2">美しさを求める理由と欲求</h1>

          <section>
              <h3>&#9312;赤ちゃんが可愛い理由</h3>
                  <img class="baby" src="images/baby.png">
                  <p class="text2">人間の赤ちゃんは、他の動物と違い、親への依存が大変高いです。生きるために、世話をしてくれる人の存在は必要不可欠。そこで、可愛さが、世話をされ保護をしてもらうための
                    大変重要な鍵となります。つまり、可愛ければ可愛いほど、生き残る確立もあがるということ。では、何がそんなに可愛いのでしょうか。赤ちゃんの可愛さは、生き残るための生物の仕組みにあったわけです。
                    全て計算の上。侮れません。</p>
            </section>


                <div>
                  <img class="icon" src="images/icon.png">
                </div>


            <section>
                  <div>
                  <img class="miro" src="images/miro.png">
                  </div>

                  <div class="balance">
                  <h3>&#9313;「美しい」と感じるバランス</h3>
                        <p class="text3">数学的に解明された最も安定した美しといわれる比率は、おおよそ１：１．６１８となります。古代エジプトのピラミッドやギリシャのパルテノン神殿、ミロのビーナス彫刻にも使用されている
                        比率です。この比は現代でも名刺サイズに使用されたりＴＶ画面やパソコン画面の規格にも採用されています。黄金比はもちろん人の顔や身体のバランス
                        にも大きく関わっており、万人が美しいと感じるバランスになります。</p>
                  </div>
            </section>


            <div>
              <img class="icon" src="images/icon.png">
            </div>


            <section>
                <h3>左右対称を求める本能</h3>
                    <p class="text4">人は恋人を探すとき、相手の体が左右対称かどうかで身体的な美しさを評価している事が研究で分かっています。左右対称のプロポー
                        ションは生物として健全であることを示し、左右の小さなずれが健康状態の悪さや 生存能力、子孫繁栄能力の低さにも関連し、発育不良や環境的、遺伝的なストレスの
                        受けやすさを示しているのです。左右対称の美しさは生物学上、本能的に求めている自然な欲求なのです。</p>
                      <img class="tenbin" src="images/tenbin.png">

            </section>























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
