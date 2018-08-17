<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<link href="<?php echo get_template_directory_uri(); ?>/css/common/allpage.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/common/navi.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/common/lightbox.css" rel="stylesheet">
<?php if ( is_home() || is_front_page() ) : ?>
<!-- トップページ -->
<link href="<?php echo get_template_directory_uri(); ?>/css/common/featherlight.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/top.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/common/wideslider.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/topSlick/slick.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/topSlick/slick-theme.css" rel="stylesheet">
<?php else : ?>
<!-- 下層ページ共通 -->
<link href="<?php echo get_template_directory_uri(); ?>/css/common/page.css" rel="stylesheet">
<?php endif; ?>
<?php if(is_page(array('20807','20826','20858','20860','20862','20866','20870','20875','20879','20882','20884','20886','20835','20888','20890','20892','20896','20838','20840','20846','20848','20850','20852','20855') ) ): ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/big_reform.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet">
<?php endif; ?>
<?php if ( !is_home() || !is_front_page() ) : ?>

<?php if(is_page()): ?>
<?php if(!is_page(array('20807','20826','20858','20860','20862','20866','20870','20875','20879','20882','20884','20886','20835','20888','20890','20892','20896','20838','20840','20846','20848','20850','20852','20855') )):?>
<link href="<?php bloginfo('template_directory'); ?>/css/<?php echo get_post($wp_query->post->ID)->post_name; ?>.css" rel="stylesheet" type="text/css" /><!-- 固定ページcss -->
<?php endif; ?>
<?php else: ?>
<link href="<?php bloginfo('template_directory'); ?>/css/<?php echo esc_html(get_post_type_object(get_post_type())->name); ?>.css" rel="stylesheet" type="text/css" /><!-- 各ページcss -->
<?php endif; ?>
<?php endif; ?>
<!-- お問い合わせフォーム送信完了ページCSS -->
<?php if(is_page(array('21','21173','28818')) ) : ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/contact.css" rel="stylesheet">
<?php endif; ?>
<!-- イベント情報送信完了画面 -->
<?php if(is_page('20511') ) : ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/event.css" rel="stylesheet">
<?php endif; ?>

<!-- お問い合わせ関連 -->
<?php if(is_singular( 'event' )||is_page(array('20511','116','26732') ) ) : ?>

<!-- 郵便番号 -->
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <script type="text/javascript">
$(function(){
  $('#zip').keyup(function(event){
    AjaxZip3.zip2addr(this,'','ken','add');
  })
})
</script><!-- /郵便番号 -->
<?php endif; ?>

<?php if(is_page('28783') ) : ?>
	<link href="<?php echo get_template_directory_uri(); ?>/css/common/form.css" rel="stylesheet">
<?php endif; ?>

<!-- お問い合わせ関連 -->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<title>ハッピーホーム</title>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-8836755-1', 'auto');
  ga('send', 'pageview');

</script>

<?php wp_head(); ?>
</head>

<body <?php body_class();?>>

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<header id="head">
	<h1 class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/head/logo.png" alt="ハッピーホーム" width="312" height="71"></a></h1>
	<p class="tel pc_only"><img src="<?php echo get_template_directory_uri(); ?>/images/head/tel.png" alt="0120-309-171"></p>
	<ul class="contact pc_only">
		<li><a href="<?php bloginfo('url'); ?>/raiten"><img src="<?php echo get_template_directory_uri(); ?>/images/head/btn_yoyaku.png" alt="来店予約" width="134" height="48" class="img_over"></a></li>
		<li><a href="<?php bloginfo('url'); ?>/contact"><img src="<?php echo get_template_directory_uri(); ?>/images/head/btn_contact.png" alt="お問い合わせ" width="134" height="48" class="img_over"></a></li>
	</ul>
	<a href="#" class="toggleMenu slide_btn toggle_menu sp_only"><img src="<?php echo get_template_directory_uri(); ?>/images/head/menu.png" alt="メニュー" width="90" height="90"></a> </header>
<nav class="head_nav">
	<ul class="pc_only">
		<li><a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/gnav/gnav_home.png" alt="Home" width="101" height="70"></a></li>
		<li><a href="<?php bloginfo('url'); ?>/company"><img src="<?php echo get_template_directory_uri(); ?>/images/gnav/gnav_company.png" alt="会社案内" width="147" height="70" class="pc_only"></a>
		<ul>
			<li><a href="<?php bloginfo('url'); ?>/company">会社概要</a></li>
			<li><a href="<?php bloginfo('url'); ?>/media">メディア掲載</a></li>
		</ul>
		</li>
		<li><a href="<?php bloginfo('url'); ?>/seko"><img src="<?php echo get_template_directory_uri(); ?>/images/gnav/gnav_seko.png" alt="施工事例" width="136" height="70" class="pc_only"></a>
		<ul>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/kitchen">キッチン</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/ohuro">お風呂</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/toilet">トイレ</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/senmen">洗面</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/exterior">外構・エクステリア</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/gaiheki">外壁・屋根</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/genkan">玄関</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/living">リビング・内装</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/taishin">耐震</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/other">その他</a></li>

		</ul>
		</li>
		<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/gnav/gnav_reform.png" alt="リフォームメニュー" width="157" height="70" class="pc_only"></a>
		<ul>
			<li><a href="<?php bloginfo('url'); ?>/menu/toilet">ハッピーホームのトイレリフォーム</a></li>
			<li><a href="<?php bloginfo('url'); ?>/menu/kitchen">ハッピーホームのキッチンリフォーム</a></li>
			<li><a href="<?php bloginfo('url'); ?>/menu/kaigo">介護保険リフォームはハッピーホームで！</a></li>
			<li><a href="<?php bloginfo('url'); ?>/other/renovation_recommend">増改築のすすめ</a></li>
			<li><a href="<?php bloginfo('url'); ?>/other/step">リフォームの流れ</a></li>
			<li><a href="<?php bloginfo('url'); ?>/renov">中古住宅×リノベーション</a></li>
			<li><a href="<?php bloginfo('url'); ?>/homeinspection">インスペクション</a></li>
			<li><a href="<?php bloginfo('url'); ?>/renov_compare">建替え VS リノベ</a></li>
		</ul>
		</li>
		<li><a href="<?php bloginfo('url'); ?>/voice"><img src="<?php echo get_template_directory_uri(); ?>/images/gnav/gnav_voice.png" alt="お客様の声" width="147" height="70" class="pc_only"></a></li>
		<li><a href="<?php bloginfo('url'); ?>/faq"><img src="<?php echo get_template_directory_uri(); ?>/images/gnav/gnav_question.png" alt="よくあるご質問" width="146" height="70" class="pc_only"></a></li>
		<li><a href="<?php bloginfo('url'); ?>/fukuyamaminami"><img src="<?php echo get_template_directory_uri(); ?>/images/gnav/gnav_showroom.png" alt="ショールーム" width="147" height="70" class="pc_only"></a></li>
	</ul>
</nav>
<nav class="sp-head-nav">
	<ul class="sp_only">
		<li><a href="<?php bloginfo('url'); ?>/company">会社案内</a>
		<ul>
			<li><a href="<?php bloginfo('url'); ?>/company">会社概要</a></li>
			<li><a href="<?php bloginfo('url'); ?>/media">メディア掲載</a></li>
		</ul>
		</li>
		<li><a href="<?php bloginfo('url'); ?>/seko">施工事例</a>
		<ul>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/kitchen">キッチン</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/ohuro">お風呂</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/toilet">トイレ</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/exterior">外構・エクステリア</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/genkan">玄関</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/gaiheki">外壁</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/rouka">廊下</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/toilet">トイレ</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/senmen">洗面</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/ohuro">お風呂</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/living">リビング・内装</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/kaidan">階段</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/zenmen">全面改装</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/bfree">バリアフリー</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/design">デザインリフォーム</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/kominka">古民家</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/reno">リノベーション</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/zoukaichiku">増改築</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/yane">屋根</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/taishin">耐震</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/siroari">シロアリ</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/other">その他</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/alldenka">オール電化</a></li>
			<li><a href="<?php bloginfo('url'); ?>/seko_cat/sizen">自然素材</a></li>
			<li><a href="<?php bloginfo('url'); ?>/genba">今日の現場</a></li>
		</ul>
		</li>
		<li><a href="#">リフォームメニュー</a>
		<ul>
			<li><a href="<?php bloginfo('url'); ?>/menu/toilet">ハッピーホームのトイレリフォーム</a></li>
			<li><a href="<?php bloginfo('url'); ?>/menu/kitchen">ハッピーホームのキッチンリフォーム</a></li>
			<li><a href="<?php bloginfo('url'); ?>/menu/kaigo">介護保険リフォームはハッピーホームで！</a></li>
			<li><a href="<?php bloginfo('url'); ?>/other/renovation_recommend">増改築のすすめ</a></li>
			<li><a href="<?php bloginfo('url'); ?>/other/step">リフォームの流れ</a></li>
      <li><a href="<?php bloginfo('url'); ?>/renov">中古住宅×リノベーション</a></li>
			<li><a href="<?php bloginfo('url'); ?>/homeinspection">インスペクション</a></li>
			<li><a href="<?php bloginfo('url'); ?>/renov_compare">建替え VS リノベ</a></li>
		</ul>

		</li>
		<li><a href="<?php bloginfo('url'); ?>/voice">お客様の声</a></li>
		<li><a href="<?php bloginfo('url'); ?>/faq">よくあるご質問</a></li>
		<li><a href="<?php bloginfo('url'); ?>/fukuyamaminami">ショールーム</a></li>
	</ul>
</nav>
<main class="mainContents">
