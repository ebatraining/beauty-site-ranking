<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="keywords" content="美容,ストレス,ストレス発散方法">
<meta name="description" content="美容とストレスの関係・発散方法とは？">
<!--[if lt IE 9]>
<script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="shortcut icon" href="img/favicon2.gif">
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

<title>美容とストレス　|　Bauty Site Ranking</title>

</head>

<body class="drawer drawer--left" id="home">
	<p class="pagetop"><a href="#wrap">▲</a></p>
	<div id="wrapper">
		<aside id="side_menu">
			<div class="banner">
				<div id="smartphone">
					<button type="button" class="drawer-toggle drawer-hamburger">
						<span class="sr-only">toggle navigation</span>
						<span class="drawer-hamburger-icon"></span>
					</button>
          <aside id="side_menu">
      			<?php include( $_SERVER['DOCUMENT_ROOT'] . '/side_menu.html'); ?>
      		</aside>
					</div>
				</div>
				<div id="side_menu_pc"><!-- PC・タブレット向けサイドメニュー -->
				<h1 class="logo">
				<a href="index.html"><img src="img/sitelogo.jpg" alt="BeautySiteRanking"></a>
				</h1>
				<nav id="navigation">
					<h2><img src="img/contents.jpg" alt="contents"></h2>
					<ul>
						<li class="home"><a href="../new/index.html"><i class="fa fa-chevron-circle-right blue" aria-hidden="true"></i>&nbsp;HOME</a></li>
						<li class="history"><a href="../history/index.html"><i class="fa fa-chevron-circle-right blue" aria-hidden="true"></i>&nbsp;美容と歴史</a></li>
						<li class="why"><a href="../html/why.html"><i class="fa fa-chevron-circle-right blue" aria-hidden="true"></i>&nbsp;美容と欲求</a></li>
						<li class="sleep"><a href="../sleep/index.html"><i class="fa fa-chevron-circle-right blue" aria-hidden="true"></i>&nbsp;美容と睡眠</a></li>
						<li class="stress"><a href="#"><i class="fa fa-chevron-circle-right blue" aria-hidden="true"></i>&nbsp;美容とストレス</a></li>
					</ul>
						<h2><img src="img/special.jpg" alt="special"></h2>
					<ul>
						<li>
						<i class="fa fa-chevron-circle-right blue" aria-hidden="true"></i>
						<a class="sbp" href="http://beauty-info.mobi/self_beauty_program/">&nbsp;Self Beauty Program</a>
						</li>
					</ul>
				</nav>
				<div class="snsicon">
					<a href="#" class="facebook-button"><img src="img/facebook.png"></a>
					<a href="https://twitter.com/intent/tweet?button_hashtag=Beautysiteranking" class="twitter-hashtag-button" >
					<img src="img/twitter.png" alt="twitter" class="aligncenter size-full wp-image-7623">
					</a>
					<a href="#" class="gplus-button"><img src="img/gplus.png"></a>
				</div>
			</div>
		</aside>

		<!--main-->
		<main>
			<div id="mainimage">
				<header>
					<img src="./images/mainimage.jpg" alt="美容とストレスメイン画像">
				</header>
			</div>

			<nav>
				<ul id="pankuzu">
					<li>
						<a href="http://beauty-site-ranking.com/new/">
							<i class="fa fa-home" aria-hidden="true"></i>
						</a>
						&nbsp;&gt;&nbsp;
					</li>
					<li>
						<a href="#">美容とストレス</a>
					</li>
				</ul>
			</nav>

			<section>
				<img src="./images/contents1.jpg"　alt="ストレスの影響">
			</section>

			<section>
				<img src="./images/contents2.jpg" alt="逆効果なストレス発散方法">
			</section>

			<img src="./images/arrow.jpg" alt="矢印">

			<img src="./images/contents3-ahahaha.jpg" alt="効果的なストレス発散方法 たくさん笑う">

			<section>
				<div id="contentsbox1">　<!--ココに"../images/contents3-relax.jpg"を入れる-->

					<p class="smile">人間は笑うだけで体に備わっている免疫機能が30%ほどアップします。<br>
					副交感神経が刺激されて血行促進や緊張をほぐすという効果があります。<br>
					ストレスが多い人ほど副交感神経に強く働きますので、<br>
					例え作り笑いだとしても、効果が高く出るのです。</p>

					<p class="relax">モノの匂いを感じる「嗅覚」というのは、<br>
					脳の中の「大脳辺縁系」という部分が担当していることが分かっています。<br>
					この部分は大脳半球の内側を取り囲むように位置しており、	人間の感情や<br>
					本能といった情動や、記憶に関与しています。香りの成分は、セロトニンなどの<br>
					さまざまなホルモンの分泌にも関与していると考えられており、こうした脳への働きかけによって<br>
					気持ちが落ち着いたりすると考えられているのです。<br>
					バスタイムにアロマを利用してもっとリラックスしてみましょう。</p>

				</div>
			</section>

			<section>
				<div id="contentsbox2"> <!--ココに"../images/contents3-tear.jpg"を入れる-->

					<p class="tear">アメリカの研究で、涙から副腎皮質刺激ホルモン
					（ACTH）が 検出された事が判明しました。<br>
					このホルモンはストレス反応として分泌されたホルモンなので、 泣くことで体の外へ涙と共にストレスを排出した事になるのです。
					感動する映画や芸術作品を見て、我慢せずに思いっきり泣いてみましょう！</p>

				</div>
			</section>

			<section>
				<div id="contentsbox3"> <!-- ココに"../images/contents3-food.jpg"を入れる　-->

					<p class="food">ストレスに強い体を作るには食事も大切です。<br>
					身体にストレスが加わると、その刺激に対抗して<br>
					身体を守ろうとする防御反応が生じます。<br>
					それによって、必要になる栄養素・消耗する<br>栄養素があります。<br>
					これらの栄養素をしっかり摂っておくことと、<br>	バランスの良い食事を摂ることで、<br>ストレスに負けない身体づくりをしておくことが<br>大切です。</p>

				</div>
			</section>

			<section>
				<div id="contentsbox4"> <!-- ココに"../images/contents3-sleep.jpg"を入れる　-->

					<p class="sleep">ストレスを感じる状態は、脳が疲れている状態であるとも言えます。<br>
					「嫌なことも寝たら忘れた」と言う人がいるように、睡眠を取ることで、疲れた脳を休ませることができるため、睡眠は非常に効果的なストレス解消法です。<br>
					睡眠が慢性的に不足すると、	ストレスが徐々にたまり、うつ病をはじめとする精神疾病や、不眠症などの睡眠障害を発症することにもつながります。</p>

				</div>
			</section>

			<section>
				<div id="contentsbox5"> <!-- ココに"../images/contents3-exercise.jpg"を入れる -->

					<p class="exercise">ストレスを感じる状態は、脳が疲れている状態で	<br>
					有酸素運動というのは基本的に単純な行為の<br>
					繰り返しを行う運動です。<br>
					ウォーキングしかり、ジョギングしかりです。<br>
					人間はそういった単純な行動を繰り返している間は<br>
					その行為に意識が集中できるため、他のことに関する<br>一切のことを考えなくなります。<br>
					有酸素運動はそのレベルまで没頭できるので、<br>有酸素運動をしている間は日々の不安や悩みは頭から消え、<br>ストレス解消となります。</p>

				</div>
			</section>

			<section>
				<div id="contentsbox6">
						<div class="banner1">
							<a href="http://kouso-fevry.net/lp/" target="_blank">
								<img src="./images/banner1-diet.png" alt="1位 ダイエット">
							</a>
						</div>

						<div class="banner2">
							<a href="http://www.gelnail-oroshitonya.com/" target="_blank">
								<img src="./images/banner2-nail.png" alt="2位 ネイル">
							</a>
						</div>

						<div class="banner3">
							<a href="http://item.rakuten.co.jp/bemore-m/c/0000001822/" target="_blank">
								<img src="./images/banner3-cosmetics.png" alt="3位 コスメ">
							</a>
						</div>

						<div class="banner4">
							<a href="http://beauty.kirali.co.jp/search/?s_area=1103&cat=1" target="_blank">
								<img src="./images/banner4-salon.png" alt="4位　サロン">
							</a>
						</div>

						<div class="clear">
						</div>
				</div>
			</section>

			<footer id="footer_body">
				<div class="f1"><img src="img/footer_logo.png"></div>
				<div class="f2">
					<h3>contents</h3>
					<p><a href="../history/index.html"><i class="fa fa-chevron-circle-right blue" aria-hidden="true"></i>&nbsp;美容と歴史</a></p>
					<p><a href="../html/why.html"><i class="fa fa-chevron-circle-right blue" aria-hidden="true"></i>&nbsp;美容と欲求</a></p>
					<p><a href="../sleep/index.html"><i class="fa fa-chevron-circle-right blue" aria-hidden="true"></i>&nbsp;美容と睡眠</a></p>
					<p><a href="#"><i class="fa fa-chevron-circle-right blue" aria-hidden="true"></i>&nbsp;美容とストレス</a></p>
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
		<!--main end-->

	</div><!-- wrapper end -->

</body>

</html>
