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
				<li><img src="images/main1_test.jpg" alt="画像テスト"></li><!--<img src="images/main3_.jpg" alt="画像1">-->
				<li><img src="images/main2_.jpg"  alt="画像2"></li>
				<li><img src="images/main1_.jpg"  alt="画像1"></li>
				<li><img src="images/main4_.jpg"  alt="画像1"></li>
				</ul>
			</div>
			<div class="news">
				<div class="news_title">
					<h2>infomaition</h2>
				</div>
				<div class="news_list">
				<ul>
					<br>
					<li><data>2015.10.30</data> 美容室・ヘアサロン検索サイトの情報を更新しました。</li><br>
					<li><data>2015.10.6</data> 美容室・ヘアサロン検索サイトの情報を更新しました。</li><br>
					<li><data>2015.10.5</data> 掲載店舗の募集を再開しました。</li><br>
					<li><data>2015.9.30</data> 美容室・ヘアサロン検索サイトの情報を更新しました。</li><br>
					<li><data>2016.9.20</data> サイトをリニューアルしました。</li><br>
				</ul>
				</div>
			</div>



			<div class="sub_page"><!--sub body-->
				<section id="sub">
					<h1>Beauty Site Ranking とは</h1>
					<p>当サイトでは、巷で話題の美容グッズ、店舗、美容系サイトや女性に人気の通販サイト等の情報を厳選し
					キレイを目指す女性の皆様にご紹介している情報系サイトです。</p>
					<img src="images/sub1.jpg">
					<img src="images/sub2.jpg">
				</section>




				<div id="ranking1">

					<h3>話題のコスメ通販ショップ</h3>

					<section id="shop1">
					<span class="light_blue">No.1</span>
					<h4>&nbsp;＠COSME SHOPPING</h4>
						<figure class="shop1_img">
							<img src="images/cosme1.jpg">
						</figure>
						<p>化粧品のクチコミサイト＠cosmeの姉妹通販サイトです！売れ筋ランキングや＠cosmeの口コミ情報を調べることができます。5400円以上のお買い物で送料無料です。</p>
						<div class="switch"><a href="http://www.cosme.com/">店舗サイトへ</a></div>
					</section>

					<section id="shop2">
						<span class="light_blue">No.2</span>
						<h4>ベルコスメ</h4>
						<figure class="shop2_img">
							<img src="images/cosme2.jpg">
						</figure>
						<p>化粧品のクチコミサイト＠cosmeの姉妹通販サイトです！売れ筋ランキングや＠cosmeの口コミ情報を調べることができます。5400円以上のお買い物で送料無料です。</p>
						<div class="switch"><a href="https://www.bellcosme.com/">店舗サイトへ</a></div>
					</section>

					<section id="shop3">
						<span class="light_blue">No.3</span>
						<h4>コスメリンク</h4>
						<figure class="shop3_img">
							<img src="images/cosme3.jpg">
						</figure>
						<p>化粧品のクチコミサイト＠cosmeの姉妹通販サイトです！売れ筋ランキングや＠cosmeの口コミ情報を調べることができます。5400円以上のお買い物で送料無料です。</p>
						<div class="switch"><a href="http://www.cosmelink.jp/">店舗サイトへ</a></div>
					</section>

				</div>
				<table class="table1">
					<tr>
					<th colspan="2">PICK UP</th>
					</tr>
					<tr>
					<td class="left1">
						<h4>大手百貨店で人気のAYURA ブランド</h4>
						<p>乾燥・肌あれの悩みを徹底ケアし、すこやか肌に整えるAYURAの化粧液です。まずはお試しで始められる14日間のミニボトルセットには、1000円分のポイントプレゼント付きです。</p>
					</td>
					<td class="right1">
						<figure class="pick"><img src="images/pick_up1.jpg"></figure>
						<div class="switch2"><a href="http://www.ayura.co.jp">AYURA の公式サイトへ</a></div>
					</td>
					</tr>
				</table>
				<table class="table1_sp"><!-- スマホ用 -->
					<tr>
					<th colspan="2">PICK UP</th>
					</tr>
					<tr>
					<td class="left1">
						<h4>大手百貨店で人気のAYURA ブランド</h4>
						<p>乾燥・肌あれの悩みを徹底ケアし、すこやか肌に整えるAYURAの化粧液です。まずはお試しで始められる14日間のミニボトルセットには、1000円分のポイントプレゼント付きです。</p>
					</td>
					</tr>
					<tr>
					<td class="right1">
						<figure class="pick"><img src="images/pick_up1.jpg"></figure>
						<div class="switch2"><a href="http://www.ayura.co.jp">AYURA の公式サイトへ</a></div>
					</td>
					</tr>
				</table>
				<!---->

				<div id="ranking2">
					<h3>話題の食品通販ショップ</h3>

					<section id="shop4">
						<span class="light_blue">No.1</span>
						<h4>Natural Healthy Standard</h4>
						<figure class="shop1_img">
							<img src="images/food1.jpg">
						</figure>
						<p>Natural Healthy Standard は人々のココロとカラダの健康を第一に考え、「美味しい、嬉しい、気持ちいい」をコンセプトに、新しいライフスタイルを提案している通販サイトです。</p>
						<div class="switch"><a href="http://www.rakuten.ne.jp/gold/tenderly/">店舗サイトへ</a></div>
					</section>

					<section id="shop5">
						<span class="light_blue">No.2</span>
						<h4>ブラウンビレッジ</h4>
						<figure class="shop2_img">
							<img src="images/food2.jpg">
						</figure>
						<p>全粒粉、玄米、無添加の自然食品をベースに、免疫力を高める医・食・健・美 同源生活づくりを応援している通販サイトです.</p>
						<div class="switch"><a href="http://brownvillage.jp/">店舗サイトへ</a></div>
					</section>

					<section id="shop6">
						<span class="light_blue">No.3</span>
						<h4>tasty+</h4>
						<figure class="shop3_img">
							<img src="images/food3.jpg">
						</figure>
						<p>グリーンスムージーと有機野菜ので身体にも優しい安心安全な有機野菜・無農薬野菜・グリーンスムージーをお取り寄せできます。</p>
						<div class="switch"><a href="http://tasty-plus.co.jp/">店舗サイトへ</a></div>
					</section>
				</div>
				<table class="table1">
					<tr>
					<th colspan="2">PICK UP</th>
					</tr>
					<tr>
					<td class="left1">
						<h4>生活の木のスーパーフードシリーズ</h4>
						<p>ダイエットと美容の味方である栄養や健康成分が詰まった生活の木のスーパーフードシリーズです。有名モデルも食しているチアシードや女性に人気のアサイーの加工食品などラインナップも豊富です。</p>
					</td>
					<td class="right1">
						<figure div="pick1"><img src="images/pick_up2.jpg"></figure>
						<div class="switch2"><a href="https://onlineshop.treeoflife.co.jp/">生活の木の公式サイトへ</a></div>
					</td>
					</tr>
				</table>
				<table class="table1_sp">
					<tr>
					<th colspan="2">PICK UP</th>
					</tr>
					<tr>
					<td class="left1">
						<h4>生活の木のスーパーフードシリーズ</h4>
						<p>ダイエットと美容の味方である栄養や健康成分が詰まった生活の木のスーパーフードシリーズです。有名モデルも食しているチアシードや女性に人気のアサイーの加工食品などラインナップも豊富です。</p>
					</td>
					</tr>
					<tr>
					<td class="right1">
						<figure div="pick1"><img src="images/pick_up2.jpg"></figure>
						<div class="switch2"><a href="https://onlineshop.treeoflife.co.jp/">生活の木の公式サイトへ</a></div>
					</td>
					</tr>
				</table>

				<!---->
				<div id="ranking3">
					<h3>話題のダイエット関連サイト</h3>

					<section id="shop7">
						<span class="light_blue">No.1</span>
						<h4>CREBIQ</h4>
						<figure class="shop1_img">
							<img src="images/dai1.jpg">
						</figure>
						<p>ダイエットとボディメイクに特化した女性専用パーソナルトレーニングジムです。女性の身体を知り尽くしたプロ集団が、科学的根拠に基づき、女性の心と身体をくまなくケアし理想のゴールへ導きます。</p>
						<div class="switch"><a href="http://crebiq.com/">店舗サイトへ</a></div>
					</section>

					<section id="shop8">
						<span class="light_blue">No.2</span>
						<h4>Shapes</h4>
						<figure class="shop2_img">
							<img src="images/dai2.jpg">
						</figure>
						<p>女性専用パーソナルトレーニングジムです。女性のための開発したトレーニングと食事プログラム、女性トレーナーによるマンツーマン指導、完全女性専用の空間によって成果を最大限まで高めます。</p>
						<div class="switch"><a href="http://www.shapes-international.co.jp/">店舗サイトへ</a></div>
					</section>

					<section id="shop9">
						<span class="light_blue">No.3</span>
						<h4>チャチャリート</h4>
						<figure class="shop3_img">
							<img src="images/dai3.jpg">
						</figure>
						<p>六本木のプライベートジム・チャチャリートでは、専属のトレーナーがゲスト１人１人の体や習慣にあわせてあなたのだけのトレーニングメニューを提案してくれます。</p>
						<div class="switch"><a href="https://chacharito.jp/">店舗サイトへ</a></div>
					</section>
				</div>
				<table class="table1">
					<tr>
					<th colspan="2">PICK UP</th>
					</tr>
					<tr>
					<td class="left1">
						<h4>黒い食材のチカラで美ボディを目指す</h4>
						<p>ダイエットと美容の味方である栄養や健康成分が詰ま女性のキレイと健康を守るため、黒しょうが（クラチャイダム）をメインに５つのブラック素材にこだわったパワーを贅沢に配合した大人気のサプリです。</p>
					</td>
					<td class="right1">
						<figure class="pick2"><img src="images/pick_up3.jpg"></figure>
						<div class="switch2"><a href="http://natureseed.jp/">ネイチャーシードの公式サイトへ</a></div>
					</td>
					</tr>
				</table>
				<table class="table1_sp">
					<tr>
					<th colspan="2">PICK UP</th>
					</tr>
					<tr>
					<td class="left1">
						<h4>黒い食材のチカラで美ボディを目指す</h4>
						<p>ダイエットと美容の味方である栄養や健康成分が詰ま女性のキレイと健康を守るため、黒しょうが（クラチャイダム）をメインに５つのブラック素材にこだわったパワーを贅沢に配合した大人気のサプリです。</p>
					</td>
					</tr>
					<tr>
					<td class="right1">
						<figure class="pick2"><img src="images/pick_up3.jpg"></figure>
						<div class="switch2"><a href="http://natureseed.jp/">ネイチャーシードの公式サイトへ</a></div>
					</td>
					</tr>
				</table>

				<!--検索サイト-->

				<div id="search1">
					<h3>ヘアサロン検索サイト</h3>
					<section id="site1">
						<a href="http://www.beauty-park.jp/">
							<img src="images/salon1.jpg">
						</a>
						<h4><a href="http://www.beauty-park.jp/">Beauty Park</a></h4>
						<p>全国の美容室・ヘアサロンが検索可能な情報サイトです。最新の口コミ情報、クーポン情報、店舗ランキング、最新のトレンド等の情報が豊富なのでおススメです。</p>
					</section>

					<section id="site2">
						<a href="https://tiful.jp/hair/">
							<img src="images/salon2.jpg">
						</a>
						<h4><a href="https://tiful.jp/hair/">Tiful</a></h4>
						<p>美容室・美容院・ヘアサロンやネイル・まつげ、リラクゼーションサロンの検索・予約できるサイトです。スタイリストの情報やヘアカタログ等の情報も多数掲載しています。</p>
					</section>

				</div>



				<div id="search2">

					<h3>人気の生活雑貨通販サイト</h3>

					<section id="site3">
						<a href="http://www.felissimo.co.jp/kraso/">
							<img src="images/zakka1.jpg">
						</a>
						<h4><a href="http://www.felissimo.co.jp/kraso/">Kraso</a></h4>
						<p>全国の美容室・ヘアサロンが検索可能な情報サイトです。最新の口コミ情報、クーポン情報、店舗ランキング、最新のトレンド等の情報が豊富なのでおススメです。</p>
					</section>

					<section id="site4">
						<a href="http://www.hushykke.com/">
							<img src="images/zakka2.jpg">
						</a>
						<h4><a href="http://www.hushykke.com/">hushykke</a></h4>
						<p>北欧雑貨、食器、インテリア雑貨、日本や世界中から厳選されたかわいい暮らしの道具や日用品を取り扱っています。</p>
					</section>
				</div>

				<div id="search3">

					<section id="site5">
						<a href="http://www.unico-fan.co.jp/">
							<img src="images/zakka3.jpg">
						</a>
						<h4><a href="http://www.unico-fan.co.jp/">unico</a></h4>
						<p>オリジナル家具、インテリア、ソファ、ラグ等を販売するインテリアショップunico(ウニコ) の通販サイトです。</p>
					</section>


					<section id="site6">
						<a href="http://natulan.jp/index.html">
							<img src="images/zakka4.jpg">
						</a>
						<h4><a href="http://natulan.jp/index.html">ナチュラン</a></h4>
						<p>ナチュラル服を使ったファッションと暮らしのセレクトショップ。人気ブランドのアイテムや最新号のリンネルメゾン掲載のアイテムを数多く取り揃えています。</p>
					</section>
				</div>
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
