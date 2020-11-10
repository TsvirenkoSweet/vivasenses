<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Vivasensess</title>
	<meta name="robots" content="noindex, nofollow">
	<meta name="description" content="">
	<meta property="og:image" content="img/images/test.jpg">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="img/favicon/site.webmanifest">
	<link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#b146c4">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="css/main.min.css">
</head>

<body>
	<!-- Гальп скомпилит проект по такому пути http://localhost:3000/home.html только если не меняли порт вручную-->
	<!-- ------------- -->
	<!-- Рабочая папка dev. Работаем внутри home.html, home.js, в scss набросал заготовки с разбивкой на компоненты,
		тут выбирайте любой или создавайте свой по удобству-->
	<!-- ------------- -->
	<!-- пример использования свг иконки из спрайта
		внутри href указываем путь, где после sprite.svg указывает id
		который состоит из префикса viva (его в таске указали) и имени svg иконки ./img/svg/sprite.svg#viva_icon-up-->
	<div id="fullpage">
		<header class=" main_header slide fullpage_section" data-anchor="header">
			<div class="main_header-nav-burger nav-mobile icon_use">
				Menu
				<svg class="icon-header icon_burger"><use xlink:href="./img/svg/sprite.svg#viva_burger"></use></svg>
			</div>
			<div class="main_header-nav_wrapper">
				<div class="main_header-nav">
					<div class="main_header-nav-left">
						<div class="main_header-nav-left_item main_header-nav-logo icon_use">
							<svg class="icon icon_logo">
								<use xlink:href="./img/svg/sprite.svg#viva_main-logo"></use>
							</svg>
						</div>
						

					</div>
					<div class="main_header-nav-right">
						<div class="main_header-nav-active-btns">
							<div class="main_header-nav-contact nav-toggle-list">
								<div class="nav-toggle-list_name">+38 073 713 11 77</div>
								<div class="nav-toggle-list_arr-down">
									<svg class="icon-arr_down">
										<use xlink:href="./img/svg/sprite.svg#viva_arr_down-black"></use>
									</svg>
								</div>
							</div>
							<div class="main_header-nav-shopping-cart icon_use">
								<svg class="icon-header icon-shoppingcart">
									<use xlink:href="./img/svg/sprite.svg#viva_main-basket"></use>
								</svg>
							</div>
						</div>
						<div class="main_header-nav-langs nav-toggle-list">
							<div class="nav-toggle-list_name"><span class="lang-full">English</span><span class="lang-short">Ua</span></div>
							<div class="nav-toggle-list_arr-down">
								<svg class="icon-arr_down">
									<use xlink:href="./img/svg/sprite.svg#viva_arr_down-black"></use>
								</svg>
							</div>
						</div>
						<div class="main_header-nav-burger icon_use">
							<svg class="icon-header icon_burger">
								<use xlink:href="./img/svg/sprite.svg#viva_burger"></use>
							</svg>
						</div>
					</div>
				</div>
			</div>
			<div class="container main_header-content">
				<div class="main_header-heading">
					<h1>био пасты</h1>
					<h2>образ жизни здорового человека</h2>
				</div>
				<div class="main_header-subheading">
					<div>

						<div class="main_header-subinfo">Швейцарская лаборатория</div>
						<div class="btn-group">
							<button class="btn btn-green">Получить консультацию</button>
							<button class="btn btn-gray">Пройти диагностику</button>
						</div>
					</div>

					<div class="main_header-stamp icon_use">
						<svg class="icon icon_stamp">
							<use xlink:href="./img/svg/sprite.svg#viva_stamp"></use>
						</svg>
					</div>
				</div>
			</div>
		</header>
		
		<!-- how hork -->
		<section class="section slide fullpage_section  section-green section-how" data-anchor="work">
			<div class=" container section-how_inner">
				<div class="section-how_intro">
					<h2 class="section-heading">
						как работают био пасты vivassense
					</h2>
					<div class="section-how_product-description">
						Серия биопаст разработанна командой ученых и фармацевтов мира для укрепления
						и восстановления жизненных сил организма.
					</div>
				</div>
				
				<div class="section-how_advantages">
					<div class="section-how_advantages-item">
						<div class="section-how_advantages-icon_wrapper">
							<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_heart"></use></svg>
						</div>
						<div class="section-how_advantages-text">Каждый продукт в своей основе
							имеет 9 витаминов, 9 минеральных
							веществ и 15 аминокислот.
							То что необходимо человеку в сутки</div>
					</div>
					<div class="section-how_advantages-item">
						<div class="section-how_advantages-icon_wrapper">
							<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_molecule"></use></svg>
						</div>
						<div class="section-how_advantages-text">
							Пастообразная консистенция,
							благодаря которой происходит
							моментальное всасывание
							и усвоение продукта
						</div>
					</div>
					<div class="section-how_advantages-item">
						<div class="section-how_advantages-icon_wrapper">
							<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_quad"></use></svg>
						</div>
						<div class="section-how_advantages-text">
							Природное восстановление
							здоровья организма
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- cardio protect -->
		<section class="section slide fullpage_section  section-protect" data-anchor="protect">
			<div class="section-protect_inner">
				<div class="section-protect_item" id="bl3-img1" data-frame="5" data-id="bl3-img1"
				style="background-image: url('./img/images/bl3-adv1.jpg'); background-position: 58% 50%;"
				>
					<div class="item-gallery_intro hide-bl">
						<div class="item-gallery_intro-num">№<span>1</span></div>
						<div class="item-gallery_intro-heading">Iodo Protect</div>
						<div class="item-gallery_intro-icon">
							<div class="ref" style="background-image: url('./img/images/sprite1.png');"></div>
						</div>
					</div>
					<div class="item-gallery_overlay"></div>
					<div class="hover_overlay"></div>
				</div>
				<div class="section-protect_item" id="bl3-img2" data-frame="4" data-id="bl3-img2"
					 style="background-image: url('./img/images/bl3-adv2.jpg'); background-position: 50% 50%;">
					<div class="item-gallery_intro hide-bl">
						<div class="item-gallery_intro-num">№<span>2</span></div>
						<div class="item-gallery_intro-heading">Worms Protect</div>
						<div class="item-gallery_intro-icon">
							<div class="ref" style="background-image: url('./img/images/sprite2.png');"></div>
						</div>
					</div>
					<div class="item-gallery_overlay"></div>
					<div class="hover_overlay"></div>
				</div>
				<div class="section-protect_item" id="bl3-img3" data-frame="5" data-id="bl3-img3"
					 style="background-image: url('./img/images/bl3-adv3.jpg'); background-position: 43% 50%;">
					<div class="item-gallery_intro hide-bl">
						<div class="item-gallery_intro-num">№<span>3</span></div>
						<div class="item-gallery_intro-heading">Man`s Health</div>
						<div class="item-gallery_intro-icon">
							<div class="ref" style="background-image: url('./img/images/sprite3.png');"></div>
						</div>
					</div>
					<div class="item-gallery_overlay"></div>
					<div class="hover_overlay"></div>
				</div>
				<div class="section-protect_item" id="bl3-img4" data-frame="5" data-id="bl3-img4"
					 style="background-image: url('./img/images/bl3-adv4.jpg'); background-position: 32% 50%;">
					<div class="item-gallery_intro hide-bl">
						<div class="item-gallery_intro-num">№<span>4</span></div>
						<div class="item-gallery_intro-heading">Woman`s Health</div>
						<div class="item-gallery_intro-icon">
							<div class="ref" style="background-image: url('./img/images/sprite4.png');"></div>
						</div>
					</div>
					<div class="item-gallery_overlay"></div>
					<div class="hover_overlay"></div>
				</div>
				<div class="section-protect_item" id="bl3-img5" data-frame="9" data-id="bl3-img5"
					 style="background-image: url('./img/images/bl3-adv5.jpg'); background-position: 70% 50%;">
					<div class="item-gallery_intro hide-bl">
						<div class="item-gallery_intro-num">№<span>5</span></div>
						<div class="item-gallery_intro-heading">Gepato Protect</div>
						<div class="item-gallery_intro-icon">
							<div class="ref" style="background-image: url('./img/images/sprite5.png');"></div>
						</div>
					</div>
					<div class="item-gallery_overlay"></div>
					<div class="hover_overlay"></div>
				</div>
				<div class="section-protect_item" id="bl3-img6" data-frame="4" data-id="bl3-img6"
					 style="background-image: url('./img/images/bl3-adv6.jpg'); background-position: 54% 50%;">
					<div class="item-gallery_intro hide-bl">
						<div class="item-gallery_intro-num">№<span>6</span></div>
						<div class="item-gallery_intro-heading">Man`s desire</div>
						<div class="item-gallery_intro-icon">
							<div class="ref" style="background-image: url('./img/images/sprite6.png');"></div>
						</div>
					</div>
					<div class="item-gallery_overlay"></div>
					<div class="hover_overlay"></div>
				</div>
				<div class="section-protect_item" id="bl3-img7" data-frame="9" data-id="bl3-img7"
					 style="background-image: url('./img/images/bl3-adv7.jpg'); background-position: 15% 50%;">
					<div class="item-gallery_intro hide-bl">
						<div class="item-gallery_intro-num">№<span>7</span></div>
						<div class="item-gallery_intro-heading">Cardio Protect</div>
						<div class="item-gallery_intro-icon">
							<div class="ref" style="background-image: url('./img/images/sprite7.png');"></div>
						</div>
					</div>
					<div class="item-gallery_overlay"></div>
					<div class="hover_overlay"></div>
				</div>
				<div class="section-protect_item" id="bl3-img8" data-frame="10" data-id="bl3-img8"
					 style="background-image: url('./img/images/bl3-adv8.jpg'); background-position: 42% 50%;">
					<div class="item-gallery_intro hide-bl">
						<div class="item-gallery_intro-num">№<span>8</span></div>
						<div class="item-gallery_intro-heading">Endo protect</div>
						<div class="item-gallery_intro-icon">
							<div class="ref" style="background-image: url('./img/images/sprite8.png');"></div>
						</div>
					</div>
					<div class="item-gallery_overlay"></div>
					<div class="hover_overlay"></div>
				</div>
				<div class="section-protect_item" id="bl3-img9" data-frame="9" data-id="bl3-img9"
					 style="background-image: url('./img/images/bl3-adv9.jpg'); background-position: 42% 50%;">
					<div class="item-gallery_intro hide-bl">
						<div class="item-gallery_intro-num">№<span>9</span></div>
						<div class="item-gallery_intro-heading">Immuno Protect</div>
						<div class="item-gallery_intro-icon">
							<div class="ref" style="background-image: url('./img/images/sprite9.png');"></div>
						</div>
					</div>
					<div class="item-gallery_overlay"></div>
					<div class="hover_overlay"></div>
				</div>
			</div>
			<div class="slider-protect-navigation"></div>
		</section>
		<!-- choose your product -->
		<section class="section slide fullpage_section  section-green section-choose" data-anchor="choose">
			<div class=" container section-choose_inner">
				<div class="section-choose_intro">
					<h2 class="section-heading">
						выбери свой продукт здоровья
					</h2>
					<a href="http://vivassense.com/product-cat.html"> <button class="btn btn-white">Смотреть все продукты</button></a>
				</div>
				<div class="photo-product">
					<img src="./img/images/bl4.png" alt="" class="section-photo hide-pic section-choose_photo">
				</div>
			</div>
		</section>
		<!-- for children -->
		<section class="section slide fullpage_section  section-kids" data-anchor="kids">
			<div class="container section-kids_inner">
				<div class="section-kids_pic icon_use ">
					<img src="./img/images/bl5-img2.png" class="section-photo hide-pic section-kids_pic-item kids-product_photo">
					<img src="./img/images/bl5-img1.png" class="section-photo hide-pic section-kids_pic-item kids-product_symb">
				</div>
				<div class="section-kids_intro">
					<h2 class="section-heading">
						Био-пасты для детей
					</h2>
					<div class="remark">от 3-х лет</div>
					<a href="http://vivassense.com/product-cat.html#young"> <button class="btn btn-white">Смотреть все продукты</button></a>
				</div>
			</div>
		</section>
		<!-- diagnostics -->
		<section class="section  slide fullpage_section section-diagn" data-anchor="diagn">
			<div class="container section-diagn_inner">
				<div class="section-diagn_intro">
					<h2 class="section-heading">
						Пройти диагностику или терапию организма
					</h2>
					<div class="btn-group">
						<button class="btn btn-green">Найти специалиста</button>
						<button class="btn btn-gray">Пройти диагностику</button>
					</div>
				</div>
				<div class="section-diagn_pic icon_use">
					<img src="./img/images/bl6-img.png" class="section-photo hide-pic section-kids_diagn-item">
				</div>
				
			</div>
		</section>
		<!-- footer-nav -->
		<section class="section slide fullpage_section  footer-gallery" data-anchor="gallery">
			<div class="footer-gallery_tablecell">
				<div class="footer-gallery_item quality_one" data-quality="one">
					<a href="#"><div class="footer-gallery_heading">Блог</div></a>
	
					<div class="footer-gallery_photo footer-gallery_photo-one"
						style="background-image: url('./img/images/bl7-im1.png');"></div>
				</div>
				<div class="footer-gallery_item quality_two" data-quality="two">
					<a href="#"><div class="footer-gallery_heading">Блог</div></a>
	
					<div class="footer-gallery_photo footer-gallery_photo-two"
						style="background-image: url('./img/images/bl7-im2.png');"></div>
				</div>
				<div class="footer-gallery_item quality_three" data-quality="three">
					<a href="#"><div class="footer-gallery_heading">документы</div></a>
					<div class="footer-gallery_photo"></div>
				</div>
				<div class="footer-gallery_item quality_four" data-quality="four">
					<a href="#"><div class="footer-gallery_heading">исследования</div></a>
					<div class="footer-gallery_photo footer-gallery_photo-four"
						style="background-image: url('./img/images/bl7-im3.png');"></div>
				</div>
				<div class="footer-gallery_item quality_five" data-quality="five">
					<a href="#"><div class="footer-gallery_heading">
						<div class="footer-gallery_icon">
							<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_heart"></use></svg>
						</div>
						<div>блог</div></div></a>
					<div class="footer-gallery_photo"></div>
				</div>
				<div class="footer-gallery_item quality_six" data-quality="six">
					<a href="#"><div class="footer-gallery_heading">
						
						О нас</div></a>
					<div class="footer-gallery_photo footer-gallery_photo-six"
						style="background-image: url('./img/images/bl7-im4.png');"></div>
				</div>
				<div class="footer-gallery_item quality_seven" data-quality="seven">
					<a href="#"><div class="footer-gallery_heading"></div></a>
					<div class="footer-gallery_photo"></div>
				</div>
			</div>
			<div class="footer-gallery-nav">

			</div>
			<footer class="main-footer">
				<div class="container main-footer_inner">
					<nav class="main-footer_nav">
						<ul class="main-footer_nav-wrapper">
							<li class="main-footer_nav-item"><a href="#">Все продукты</a></li>
							<li class="main-footer_nav-item"><a href="#">диагностические кабинеты</a></li>
							<li class="main-footer_nav-item"><a href="#">документы</a></li>
							<li class="main-footer_nav-item"><a href="#">связаться с нами</a></li>
						</ul>
					</nav>
					<div class="main-footer_contacts">
						<div class="footer-contacts_line-1">
							<div class="footer-contacts_phone">+38 073 713 11 77</div>
							<div class="footer-contacts_media-item icon_use">
								<svg class="icon-media icon-insta"><use xlink:href="./img/svg/sprite.svg#viva_insta"></use></svg>
							</div>
							<div class="footer-contacts_media-item icon_use">
								<svg class="icon-media icon-insta"><use xlink:href="./img/svg/sprite.svg#viva_fb"></use></svg>
							</div>
						</div>
						<div class="footer-contacts_line-2">
							<div class="footer-contacts_address">г. Киев, ул. Васильковская 37, эт. 3, оф. 309</div>
						</div>

					</div>
				</div>
			</footer>

		</section>
		<!-- footer -->
		</div>
		<!-- menu -->
		<div class="menu_wrapper">
			<div class="menu_shadow-overlay close-trigger"></div>
			<div class="menu_outer ">
				<div class="container">
					<nav class="menu_inner">
						<ul>
							<li class="menu-item">
								<svg class="icon-close-nav menu_close close-trigger"><use xlink:href="./img/svg/sprite.svg#viva_esc"></use></svg>
							</li>
							<li class="menu-item">
								<a href="http://vivassense.com/product-cat.html" >продукция</a>
							</li>
							<li class="menu-item">
								<a href="http://vivassense.com/product-cat.html" >где купить</a>
							</li>
							<li class="menu-item">
								<a href="http://vivassense.com/product-cat.html" >диагностика</a>
							</li>
							<li class="menu-item">
								<a href="http://vivassense.com/product-cat.html" >наши специалисты</a>
							</li>
							<li class="menu-item">
								<a href="http://vivassense.com/product-cat.html" >о нас</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!-- move to top btn -->
		<div class="footer-contacts_line-3">
			<svg class="icon-up"><use xlink:href="./img/svg/sprite.svg#viva_icon-up"></use></svg>
		</div>

		<!-- popups -->
		<div class="popup-product_wrapper">
			<div class="popup-product" id="popup-bl3-img1">
				<!-- popup nav -->
				<div class="main_header-nav_wrapper">
					<div class="main_header-nav">
						<div class="main_header-nav-left">
							<div class="main_header-nav-left_item main_header-nav-logo icon_use">
								<svg class="icon-close-nav popup_close"><use xlink:href="./img/svg/sprite.svg#viva_esc"></use></svg>
							</div>
							
	
						</div>
						<div class="main_header-nav-right">
							<div class="main_header-nav-active-btns">
								<div class="main_header-nav-contact nav-toggle-list">
									<div class="nav-toggle-list_name">093 388 88 88</div>
									<div class="nav-toggle-list_arr-down">
										<svg class="icon-arr_down">
											<use xlink:href="./img/svg/sprite.svg#viva_arr_down-black"></use>
										</svg>
									</div>
								</div>
								<div class="main_header-nav-shopping-cart icon_use">
									<svg class="icon-header icon-shoppingcart">
										<use xlink:href="./img/svg/sprite.svg#viva_main-basket"></use>
									</svg>
								</div>
							</div>
							<div class="main_header-nav-langs nav-toggle-list">
								<div class="nav-toggle-list_name"><span class="lang-full">English</span><span class="lang-short">Ua</span></div>
								<div class="nav-toggle-list_arr-down">
									<svg class="icon-arr_down">
										<use xlink:href="./img/svg/sprite.svg#viva_arr_down-black"></use>
									</svg>
								</div>
							</div>
							<div class="main_header-nav-burger icon_use">
								<svg class="icon-header icon_burger">
									<use xlink:href="./img/svg/sprite.svg#viva_burger"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
				
				<!-- content container -->
				<div class="popup-product_content">
					
					<div class="popup-product_main-content">
						<div class="popup-product_main-header">
							<div class="popup-product_main-icon">
								<img src="./img/viva_one.svg" alt="" class="heart_popup">
							</div>
							<span>Food Supplement Биопаста Vivassense №1 IodoProtect</span>
						</div>
						<div class="popup-product_img-overlay" style="background-image: url('img/images/tb1.png');"></div>
						<div class="popup-content_inner">
							<div class="popup-product_main-subheader">
								Почувствовать силу, бодрость, энергию и быть в хорошем настроении теперь намного проще, благодаря инновационному биологическому
								питанию от компании Vivassense.
								Продукт Food Supplement Биопаста Vivassense No1 IodoProtect содержит натуральные вещества, которые быстро всасываются в кишечнике и помогают нормализовать функционирование организма. </br>
								БИОПАСТА IODOPROTECT ПОМОГАЕТ В РЕШЕНИИ ТАКИХ ПРОБЛЕМ:
								нарушения памяти и концентрации внимания; лишний вес; усталость, апатия; постоянные стресс; нарушение эмоциональной сферы; выпадение волос; ломкость ногтей; нарушение гормонального фона, в том числе и половых гормонах.
							</div>
							<div class="popup-product_main-description_outer">
								<sidebar class="popup-product_sidebar-nav">
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img1">
										<img src="./img/viva_one.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img2">
										<img src="./img/viva_two.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img3">
										<img src="./img/viva_three.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img4">
										<img src="./img/viva_four.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img5">
										<img src="./img/viva_fifth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img6">
										<img src="./img/viva_sixth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img7">
										<img src="./img/viva_seventh.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img8">
										<img src="./img/viva_eighth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img9">
										<img src="./img/viva_nineth.svg" alt="" class="sidebar-img">
									</div>
								</sidebar>
								<div class="popup-product_main-description">
	
									<div class="column">
										<p>
											Продукт не содержит вредных химических веществ и добавок, а все свое положительное воздействие на организм он оказывает очень мягко и максимально физиологично.
										</p>
										<p>
											Благодаря натуральному составу и приятному вкусу биопасту можно принимать детям начиная с 1-го года. Активный йод и комплекс биоактивных веществ в составе обеспечивает активный и полноценный рост детей разного возраста. Безопасность использования биопасты у этой возрастной категории подтверждена клиническими испытаниями.
										</p>
										<p>
											У взрослых средство способствует омоложению организма, за счет мощного антиоксидантного влияния и замедления процессов перекисного окисления липидов.
										</p>
										<p>
											В состав биопасты входит ряд натуральных ингредиентов с лекарственной активностью. Она содержит обогащенный витаминизированный экстракт из пророщенных зерен пшеницы, ячменя, овса, гречки, кукурузы. Насыщает тело полезными витаминами, минералами и энзимами, что очень важно для здорового протекания физиологических процессов в организме. Источником активного натурального селена выступает экстракт водорослей. Этот микроэлемент участвует в деактивации свободных радикалов и помогает справляться со стрессом намного быстрее и легче.
										</p>
									</div>
									<div class="column">
										<p>
											Йод - самый важный микроэлемент нашего организма, который особенно необходим для нормальной работы щитовидной железы. Его содержание в биопасте помогает привести в норму ее функционирование и наладить течение всех обменных процессов. Экстракт яблока, лимонная, фульвовая и сорбиновая кислота участвуют в регуляции водно-солевого, белкового и углеводного обменов веществ.
										</p>
										<p>
											Продукт Food Supplement Биопаста Vivassense No1 IodoProtect помогает в комплексном лечении и в качестве профилактики бесплодия, гипо- и гипертиреоза, чрезмерной раздражительности и при синдроме хронической усталости.
										</p>
										<p>
											Натуральный комплекс ингредиентов, удобная упаковка и приятный вкус позволяет использовать Food Supplement Биопаста Vivassense No1 IodoProtect в качестве полноценной добавки к питанию как дома, так и в поездках.
										</p>
										<p>
											Средство не просто устраняет симптомы, оно воздействует на причину и влияет на организм в целом, что и дает прекрасный результат.
										</p>
									</div>
								</div>
								
							</div>
							<div class="popup_active-btn">
								<a href="http://vivassense.com/product.html"> <button class="btn btn-green">Купить</button></a>
							</div>
						</div>
					</div>
					
				</div>
				<!-- how work 1 -->
				<section class="section section-green section-how" >
					<div class=" container section-how_inner">
						<div class="section-how_intro">
							<h2 class="section-heading">
								как работает биопаста
								<span class="how-heading">
									№1 Vivassense
								</span>
							</h2>
						</div>
						
						<div class="section-how_advantages">
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_heart"></use></svg>
								</div>
								<div class="section-how_advantages-text">Цілюща сила продукту базується на тому,
									що йод і селен, що містяться в морських
									водоростях, здатні брати активну участь
									в обміні речовин, гормонів і ферментів.</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_molecule"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Уникальная, формула био пасты 
									моментально усваевается организмом
								</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_quad"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Природное восстановление
									здоровья организма
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- how work 2 -->
				<section class="section section-white section-how" id="schema">
					<div class=" container section-how_inner">
						<div class="section-how_intro">
							<h2 class="section-heading">
								схема приема
							</h2>
						</div>
						
						<div class="section-how_advantages">
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic1"></use></svg>
								</div>
								<div class="section-how_advantages-text">1 десертная ложка био пасты </div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic2"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Принимать 1 раз/день утром, за 15 минут до еды
								</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic3"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Продолжительность приёма 4 недели
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="popup-product" id="popup-bl3-img2">
				<!-- popup nav -->
				<div class="main_header-nav_wrapper">
					<div class="main_header-nav">
						<div class="main_header-nav-left">
							<div class="main_header-nav-left_item main_header-nav-logo icon_use">
								<svg class="icon-close-nav popup_close"><use xlink:href="./img/svg/sprite.svg#viva_esc"></use></svg>
							</div>
							
	
						</div>
						<div class="main_header-nav-right">
							<div class="main_header-nav-active-btns">
								<div class="main_header-nav-contact nav-toggle-list">
									<div class="nav-toggle-list_name">093 388 88 88</div>
									<div class="nav-toggle-list_arr-down">
										<svg class="icon-arr_down">
											<use xlink:href="./img/svg/sprite.svg#viva_arr_down-black"></use>
										</svg>
									</div>
								</div>
								<div class="main_header-nav-shopping-cart icon_use">
									<svg class="icon-header icon-shoppingcart">
										<use xlink:href="./img/svg/sprite.svg#viva_main-basket"></use>
									</svg>
								</div>
							</div>
							<div class="main_header-nav-langs nav-toggle-list">
								<div class="nav-toggle-list_name"><span class="lang-full">English</span><span class="lang-short">Ua</span></div>
								<div class="nav-toggle-list_arr-down">
									<svg class="icon-arr_down">
										<use xlink:href="./img/svg/sprite.svg#viva_arr_down-black"></use>
									</svg>
								</div>
							</div>
							<div class="main_header-nav-burger icon_use">
								<svg class="icon-header icon_burger">
									<use xlink:href="./img/svg/sprite.svg#viva_burger"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
				
				<!-- content container -->
				<div class="popup-product_content">
					
					<div class="popup-product_main-content">
						<div class="popup-product_main-header">
							<div class="popup-product_main-icon">
								<svg class="heart_popup"><use xlink:href="./img/svg/sprite.svg#viva_heart-grey"></use></svg>
							</div>
							<span>Food Supplement Біопаста Vivassense №2 WormsProtect</span>
						</div>
						<div class="popup-product_img-overlay" style="background-image: url('img/images/tb2.png');"></div>
						<div class="popup-content_inner">
							<div class="popup-product_main-subheader">
								Защищать себя от инфекций можно не только антибиотиками.
								Новая формула биопасты содержит активные лекарственные травы и другие биоактивные компоненты, которые обладают мощным противомикробным, противогрибковым, антипаразитарным и противоглистным действием. </br>
								ИННОВАЦИОННАЯ БИОПАСТА ИСПОЛЬЗУЕТСЯ В КОМПЛЕКСНОМ ЛЕЧЕНИИ:
								Трихомониаза, Хламидиоза, Хронических инфекций верхних дыхательных путей, Хронических инфекций мочевыводящих путей, Амебиаза,
								Глистных инвазий, Хронических пиодермий, Лямблиоза, Риккетсиозов.
							</div>
							<div class="popup-product_main-description_outer">
								<sidebar class="popup-product_sidebar-nav">
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img1">
										<img src="./img/viva_one.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img2">
										<img src="./img/viva_two.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img3">
										<img src="./img/viva_three.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img4">
										<img src="./img/viva_four.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img5">
										<img src="./img/viva_fifth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img6">
										<img src="./img/viva_sixth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img7">
										<img src="./img/viva_seventh.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img8">
										<img src="./img/viva_eighth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img9">
										<img src="./img/viva_nineth.svg" alt="" class="sidebar-img">
									</div>
								</sidebar>
								<div class="popup-product_main-description">
	
									<div class="column">
										<p>
											Средство не содержит вредных добавок и химических веществ, благодаря чему оказывает свое влияние на организм очень мягко и не вызывает побочных реакций.
										</p>
										<p>
											Применение биопасты в качестве пищевой добавки к рациону помогает быстро и эффективно избавиться от паразитов, хронических инфекций и глистов. При этом, благодаря натуральному составу средство безопасно и не оказывает негативного влияния на почки и печень.
										</p>
										<p>
											В состав биопасты входит ряд натуральных ингредиентов с лекарственной активностью. Она содержит обогащенный витаминизированный экстракт из пророщенных зерен пшеницы, ячменя, овса, гречки, кукурузы. Насыщает тело полезными витаминами, минералами и энзимами, что очень важно для нормального течения физиологических процессов в организме.
										</p>
										<p>
											Входящие в пасту зеленые плоды грецкого ореха, содержат в своем составе большое количество витамина С. Проявляют мощное регенеративное, антибактериальное, притивопаразитарное и противоглистное действие. Их биохимический состав проявляет кровоочистительный и детоксикационный эффект на организм.
										</p>
									</div>
									<div class="column">
										<p>
											Паста включает также чеснок - природный фитонцид. Он активно воздействует на большинство грампозитивных и негативных микроорганизмов, за счет чего эффективно воздействует на возбудителей хронических инфекционных заболеваний.
										</p>
										<p>
											Цветки пижмы и гвоздика проявляют выраженый антипаразитарный и противоглистный эффект. Влияют на лямблий, аскарид, остриц и других гельминтов. А также эффективны против многих простейших, таких как амёбы, токсоплазмы и трихомонады.
										</p>
										<p>
											Экстракты туи, абрикоса и груши оказывают антисептический, антибактериальный и общеукрепляющий эффект на организм. Натуральный комплекс ингредиентов, удобная упаковка и приятный вкус позволяет использовать Food Supplement Биопаста Vivassense No1 IodoProtect в качестве добавки к питанию, которую очень просто принимать как дома, так и в поездках.
										</p>
										<p>
											Бипаста эффективно борется с различными видами инфекций и помогает в комплексном лечении как острых, так и хронических бактериальных, грибковых и паразитарных заболеваний. И кроме того, средство помогает активизировать собственные защитные силы организма, благодаря чему результат приходит очень быстро.
										</p>
									</div>
								</div>
								
							</div>
							<div class="popup_active-btn">
								<a href="http://vivassense.com/product.html"> <button class="btn btn-green">Купить</button></a>
							</div>
						</div>
					</div>
					
				</div>
				<!-- how work 1 -->
				<section class="section section-green section-how" >
					<div class=" container section-how_inner">
						<div class="section-how_intro">
							<h2 class="section-heading">
								как работает биопаста
								<span class="how-heading">
									№2 Vivassense
								</span>
							</h2>
						</div>
						
						<div class="section-how_advantages">
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_heart"></use></svg>
								</div>
								<div class="section-how_advantages-text">Цілюща сила продукту базується на тому,
									що йод і селен, що містяться в морських
									водоростях, здатні брати активну участь
									в обміні речовин, гормонів і ферментів.</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_molecule"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Уникальная, формула био пасты 
									моментально усваевается организмом
								</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_quad"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Природное восстановление
									здоровья организма
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- how work 2 -->
				<section class="section section-white section-how" id="schema">
					<div class=" container section-how_inner">
						<div class="section-how_intro">
							<h2 class="section-heading">
								схема приема
							</h2>
						</div>
						
						<div class="section-how_advantages">
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic1"></use></svg>
								</div>
								<div class="section-how_advantages-text">1 десертная ложка био пасты </div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic2"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Принимать 1 раз/день утром, за 15 минут до еды
								</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic3"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Продолжительность приёма 4 недели
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="popup-product" id="popup-bl3-img3">
				<!-- popup nav -->
				<div class="main_header-nav_wrapper">
					<div class="main_header-nav">
						<div class="main_header-nav-left">
							<div class="main_header-nav-left_item main_header-nav-logo icon_use">
								<svg class="icon-close-nav popup_close"><use xlink:href="./img/svg/sprite.svg#viva_esc"></use></svg>
							</div>
							
	
						</div>
						<div class="main_header-nav-right">
							<div class="main_header-nav-active-btns">
								<div class="main_header-nav-contact nav-toggle-list">
									<div class="nav-toggle-list_name">093 388 88 88</div>
									<div class="nav-toggle-list_arr-down">
										<svg class="icon-arr_down">
											<use xlink:href="./img/svg/sprite.svg#viva_arr_down-black"></use>
										</svg>
									</div>
								</div>
								<div class="main_header-nav-shopping-cart icon_use">
									<svg class="icon-header icon-shoppingcart">
										<use xlink:href="./img/svg/sprite.svg#viva_main-basket"></use>
									</svg>
								</div>
							</div>
							<div class="main_header-nav-langs nav-toggle-list">
								<div class="nav-toggle-list_name"><span class="lang-full">English</span><span class="lang-short">Ua</span></div>
								<div class="nav-toggle-list_arr-down">
									<svg class="icon-arr_down">
										<use xlink:href="./img/svg/sprite.svg#viva_arr_down-black"></use>
									</svg>
								</div>
							</div>
							<div class="main_header-nav-burger icon_use">
								<svg class="icon-header icon_burger">
									<use xlink:href="./img/svg/sprite.svg#viva_burger"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
				
				<!-- content container -->
				<div class="popup-product_content">
					
					<div class="popup-product_main-content">
						<div class="popup-product_main-header">
							<div class="popup-product_main-icon">
								<svg class="heart_popup"><use xlink:href="./img/svg/sprite.svg#viva_heart-grey"></use></svg>
							</div>
							<span>Food Supplement Біопаста Vivassense №3 Man`s Health</span>
						</div>
						<div class="popup-product_img-overlay" style="background-image: url('img/images/tb3.png');"></div>
						<div class="popup-content_inner">
							<div class="popup-product_main-subheader">
								Мужское здоровье под надежной защитой с новым натуральным средством Food Supplement Біопаста Vivassense No3 Man`s Health. В его
								состав входят природные экстракты, лекарственные растения и биоактивные вещества, которые нормализуют работу мужского организма, восстанавливают половую силу и устраняют симптомы простатита. </br>
								НО, КРОМЕ ТОГО, БИОПАСТА ИСПОЛЬЗУЕТСЯ В КОМПЛЕКСНОМ ЛЕЧЕНИИ И ПРОФИЛАКТИКЕ:
								Гиперплазии предстательной железы, Мочекаменной болезни, Уретрита, Цистита, Пиелонефрита, Эректильной дисфункции, Аденомы
								простаты.
							</div>
							<div class="popup-product_main-description_outer">
								<sidebar class="popup-product_sidebar-nav">
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img1">
										<img src="./img/viva_one.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img2">
										<img src="./img/viva_two.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img3">
										<img src="./img/viva_three.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img4">
										<img src="./img/viva_four.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img5">
										<img src="./img/viva_fifth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img6">
										<img src="./img/viva_sixth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img7">
										<img src="./img/viva_seventh.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img8">
										<img src="./img/viva_eighth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img9">
										<img src="./img/viva_nineth.svg" alt="" class="sidebar-img">
									</div>
								</sidebar>
								<div class="popup-product_main-description">
	
									<div class="column">
										<p>
											В состав продукта входят только натуральные ингредиенты, он не содержит химических добавок и вредных компонентов. Благодаря этому, он оказывает свое целебное действие на организм мягко и без побочных реакций.
										</p>
										<p>
											Использование биопасты в качестве дополнительного компонента к рациону позволяет повысить мужскую силу, улучшить самочувствие и нормализовать уровень половых гормонов в организме. Средство прекрасно подойдет мужчинам, у которых имеются проблемы с эректильной функцией. Продукт эффективно устраняет неприятные ощущения при мочеиспускании в виде резей, жжения и болей.
										</p>
										<p>
											В состав биопасты входит ряд ингредиентов с выраженной лекарственной активностью. Она содержит обогащенный витаминизированный экстракт из пророщенных зерен пшеницы, ячменя, овса, гречки, кукурузы. Насыщает тело витаминами, минералами и природными энзимами, что очень важно для функционирования организма в целом.
										</p>
										<p>
											Трава льнянки и пирия, входящие в состав средства, проявляют мощный антисептический эффект и устраняют воспалительные процессы в мочеполовой системе.
										</p>
									</div>
									<div class="column">
										<p>
											Петрушка, золотарник и тополь имеют спазмолитический и антибактериальный эффект. Благодаря им средство уменьшает рези и боли при мочеиспускании.
										</p>
										<p>
											Берёза, кропива, осина и экстракт яблока оказывают общеукрепляющее действие, нормализуют гормональный фон и устраняют воспалительные явления, в том числе и в мочеполовой системе.
										</p>
										<p>
											На 100% природный состав, удобная расфасовка и приятный вкус позволяют применять средство в качестве пищевого добавки к рациону в любое время и в удобном месте. Пасту можно брать в дорогу или применять дома.
										</p>
										<p>
											Запатентованная формула зарекомендовала себя в комплексном лечении и профилактике целого ряда воспалительных и инфекционных заболеваний мочеполовой системы у мужчин. А благодаря выраженному общеукрепляющему эффекту выздоровление от этих проблем наступает намного быстрее.
										</p>
									</div>
								</div>
								
							</div>
							<div class="popup_active-btn">
								<a href="http://vivassense.com/product.html"> <button class="btn btn-green">Купить</button></a>
							</div>
						</div>
					</div>
					
				</div>
				<!-- how work 1 -->
				<section class="section section-green section-how" >
					<div class=" container section-how_inner">
						<div class="section-how_intro">
							<h2 class="section-heading">
								как работает биопаста
								<span class="how-heading">
									№7 Man`s Health
								</span>
							</h2>
						</div>
						
						<div class="section-how_advantages">
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_heart"></use></svg>
								</div>
								<div class="section-how_advantages-text">Цілюща сила продукту базується на тому,
									що йод і селен, що містяться в морських
									водоростях, здатні брати активну участь
									в обміні речовин, гормонів і ферментів.</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_molecule"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Уникальная, формула био пасты 
									моментально усваевается организмом
								</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_quad"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Природное восстановление
									здоровья организма
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- how work 2 -->
				<section class="section section-white section-how" id="schema">
					<div class=" container section-how_inner">
						<div class="section-how_intro">
							<h2 class="section-heading">
								схема приема
							</h2>
						</div>
						
						<div class="section-how_advantages">
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic1"></use></svg>
								</div>
								<div class="section-how_advantages-text">1 десертная ложка био пасты </div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic2"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Принимать 1 раз/день утром, за 15 минут до еды
								</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic3"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Продолжительность приёма 4 недели
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="popup-product" id="popup-bl3-img4">
				<!-- popup nav -->
				<div class="main_header-nav_wrapper">
					<div class="main_header-nav">
						<div class="main_header-nav-left">
							<div class="main_header-nav-left_item main_header-nav-logo icon_use">
								<svg class="icon-close-nav popup_close"><use xlink:href="./img/svg/sprite.svg#viva_esc"></use></svg>
							</div>
							
	
						</div>
						<div class="main_header-nav-right">
							<div class="main_header-nav-active-btns">
								<div class="main_header-nav-contact nav-toggle-list">
									<div class="nav-toggle-list_name">093 388 88 88</div>
									<div class="nav-toggle-list_arr-down">
										<svg class="icon-arr_down">
											<use xlink:href="./img/svg/sprite.svg#viva_arr_down-black"></use>
										</svg>
									</div>
								</div>
								<div class="main_header-nav-shopping-cart icon_use">
									<svg class="icon-header icon-shoppingcart">
										<use xlink:href="./img/svg/sprite.svg#viva_main-basket"></use>
									</svg>
								</div>
							</div>
							<div class="main_header-nav-langs nav-toggle-list">
								<div class="nav-toggle-list_name"><span class="lang-full">English</span><span class="lang-short">Ua</span></div>
								<div class="nav-toggle-list_arr-down">
									<svg class="icon-arr_down">
										<use xlink:href="./img/svg/sprite.svg#viva_arr_down-black"></use>
									</svg>
								</div>
							</div>
							<div class="main_header-nav-burger icon_use">
								<svg class="icon-header icon_burger">
									<use xlink:href="./img/svg/sprite.svg#viva_burger"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
				
				<!-- content container -->
				<div class="popup-product_content">
					
					<div class="popup-product_main-content">
						<div class="popup-product_main-header">
							<div class="popup-product_main-icon">
								<svg class="heart_popup"><use xlink:href="./img/svg/sprite.svg#viva_heart-grey"></use></svg>
							</div>
							<span>Food Supplement Біопаста Vivassense №4 Woman`s Health</span>
						</div>
						<div class="popup-product_img-overlay" style="background-image: url('img/images/tb4.png');"></div>
						<div class="popup-content_inner">
							<div class="popup-product_main-subheader">
								Ощущать себя прекрасно и чувствовать прилив сил и энергии женщинам очень важно и необходимо. Ведь у современных леди такой
								сумасшедший ритм и он требует прекрасного настроения и отличного здоровья всегда и при любых обстоятельствах.
								Инновационный продукт Food Supplement Біопаста Vivassense No4 Woman`s Health - это настоящая находка для девушек 21 столетия. Он
								нормализует обмен веществ в женском организме, восстанавливает гормональный фон и добавляет жизненного тонуса и сил. </br>
								УНИКАЛЬНАЯ ФОРМУЛА БИОПАСТЫ ПОМОГАЕТ В КОМПЛЕКСНОМ ЛЕЧЕНИИ И ПРОФИЛАКТИКЕ:
								Дисбаланса половых гормонов, Климакса, Нарушений менструального цикла, Дисменорей, Онкологических и воспалительных заболеваний женской половой системы.
							</div>
							<div class="popup-product_main-description_outer">
								<sidebar class="popup-product_sidebar-nav">
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img1">
										<img src="./img/viva_one.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img2">
										<img src="./img/viva_two.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img3">
										<img src="./img/viva_three.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img4">
										<img src="./img/viva_four.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img5">
										<img src="./img/viva_fifth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img6">
										<img src="./img/viva_sixth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img7">
										<img src="./img/viva_seventh.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img8">
										<img src="./img/viva_eighth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img9">
										<img src="./img/viva_nineth.svg" alt="" class="sidebar-img">
									</div>
								</sidebar>
								<div class="popup-product_main-description">
	
									<div class="column">
										<p>
											Биопаста Woman`s Health имеет запатентованную формулу, которая включает исключительно природные ингредиенты с целенаправленным действием. Благодаря этому, средство эффективно устраняет проявления нарушений гормонального фона в организме женщин и наполняет его жизненной силой и энергией.
										</p>
										<p>
											Использование продукта в качестве дополнительной добавки к рациону помогает уменьшить проявления приливов, сухости в половых органах, перепадов настроения во время климакса. Средство уменьшает интенсивность проявлений предменструального синдрома: нервозность, боли внизу живота, перепады настроения, апатию и т.д. Также его применяют в комплексном лечении и профилактике бесплодия.
										</p>
										<p>
											Бипаста изготовлена на основе обогащенного витаминизированного экстракта из пророщенных зерен пшеницы, ячменя, овса, гречки, кукурузы. Именно этот комплекс насыщает тело полезными витаминами, минералами и энзимами, что очень важно для правильного течения физиологических процессов в организме.
										</p>
									</div>
									<div class="column">
										<p>
											Софора, Сушеница и Шалфей обладают сильным противовоспалительным эффектом и помогают в борьбе с воспалительными заболеваниями женских половых органов. Календула, Тысячелистник, Зверобой оказывают спазмолитическое и бактерицидное действие, что позволяет использовать средство в комплексном лечении дисменорей.
										</p>
										<p>
											Пирей, Горицвет и Подорожник помогают нормализовать гормональный фон, оказывают противовоспалительное и антисептическое действие.
										</p>
										<p>
											Средство упаковано в удобную для использования упаковку, которая позволяет его носить с собой и принимать не только дома, но и в путешествиях. Инновационная формула продукта дает возможность использовать его в комплексном лечении и профилактике заболеваний женской половой системы, без побочных реакций и неприятных ощущений.
										</p>
									</div>
								</div>
								
							</div>
							<div class="popup_active-btn">
								<a href="http://vivassense.com/product.html"> <button class="btn btn-green">Купить</button></a>
							</div>
						</div>
					</div>
					
				</div>
				<!-- how work 1 -->
				<section class="section section-green section-how" >
					<div class=" container section-how_inner">
						<div class="section-how_intro">
							<h2 class="section-heading">
								как работает биопаста
								<span class="how-heading">
									№4 Woman`s Health
								</span>
							</h2>
						</div>
						
						<div class="section-how_advantages">
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_heart"></use></svg>
								</div>
								<div class="section-how_advantages-text">Цілюща сила продукту базується на тому,
									що йод і селен, що містяться в морських
									водоростях, здатні брати активну участь
									в обміні речовин, гормонів і ферментів.</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_molecule"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Уникальная, формула био пасты 
									моментально усваевается организмом
								</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_quad"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Природное восстановление
									здоровья организма
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- how work 2 -->
				<section class="section section-white section-how" id="schema">
					<div class=" container section-how_inner">
						<div class="section-how_intro">
							<h2 class="section-heading">
								схема приема
							</h2>
						</div>
						
						<div class="section-how_advantages">
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic1"></use></svg>
								</div>
								<div class="section-how_advantages-text">1 десертная ложка био пасты </div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic2"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Принимать 1 раз/день утром, за 15 минут до еды
								</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic3"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Продолжительность приёма 4 недели
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="popup-product" id="popup-bl3-img5">
				<!-- popup nav -->
				<div class="main_header-nav_wrapper">
					<div class="main_header-nav">
						<div class="main_header-nav-left">
							<div class="main_header-nav-left_item main_header-nav-logo icon_use">
								<svg class="icon-close-nav popup_close"><use xlink:href="./img/svg/sprite.svg#viva_esc"></use></svg>
							</div>
							
	
						</div>
						<div class="main_header-nav-right">
							<div class="main_header-nav-active-btns">
								<div class="main_header-nav-contact nav-toggle-list">
									<div class="nav-toggle-list_name">093 388 88 88</div>
									<div class="nav-toggle-list_arr-down">
										<svg class="icon-arr_down">
											<use xlink:href="./img/svg/sprite.svg#viva_arr_down-black"></use>
										</svg>
									</div>
								</div>
								<div class="main_header-nav-shopping-cart icon_use">
									<svg class="icon-header icon-shoppingcart">
										<use xlink:href="./img/svg/sprite.svg#viva_main-basket"></use>
									</svg>
								</div>
							</div>
							<div class="main_header-nav-langs nav-toggle-list">
								<div class="nav-toggle-list_name"><span class="lang-full">English</span><span class="lang-short">Ua</span></div>
								<div class="nav-toggle-list_arr-down">
									<svg class="icon-arr_down">
										<use xlink:href="./img/svg/sprite.svg#viva_arr_down-black"></use>
									</svg>
								</div>
							</div>
							<div class="main_header-nav-burger icon_use">
								<svg class="icon-header icon_burger">
									<use xlink:href="./img/svg/sprite.svg#viva_burger"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
				
				<!-- content container -->
				<div class="popup-product_content">
					
					<div class="popup-product_main-content">
						<div class="popup-product_main-header">
							<div class="popup-product_main-icon">
								<svg class="heart_popup"><use xlink:href="./img/svg/sprite.svg#viva_heart-grey"></use></svg>
							</div>
							<span>Food Supplement Біопаста Vivassense №5 Gepato Protect</span>
						</div>
						<div class="popup-product_img-overlay" style="background-image: url('img/images/tb5.png');"></div>
						<div class="popup-content_inner">
							<div class="popup-product_main-subheader">
								Почувствовать легкость в животе и восстановить работу печени легко с добавкой к рациону от Vivassense. Она нормализует работу всего
								желудочно-кишечного тракта и положительно влияет на гепатобилиарную систему.
								Формула продукта включает натуральные ингредиенты, которые дополнительно проявляют общеукрепляющий, иммуномодулирующий и
								тонизирующий эффект на организм. </br>
								БИОПАСТА GEPATO PROTECT, БЛАГОДАРЯ СВОЕМУ УНИКАЛЬНОМУ ЦЕЛЕБНОМУ СОСТАВУ, ИСПОЛЬЗУЕТСЯ В КОМПЛЕКСНОМ ЛЕЧЕНИИ И
								ПРОФИЛАКТИКЕ:
								Гастритов, Хронических гепатитов, Желчекаменной болезни, Дискинезиях желчевыводящих путей, Колитах, Энтеритах.
							</div>
							<div class="popup-product_main-description_outer">
								<sidebar class="popup-product_sidebar-nav">
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img1">
										<img src="./img/viva_one.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img2">
										<img src="./img/viva_two.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img3">
										<img src="./img/viva_three.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img4">
										<img src="./img/viva_four.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img5">
										<img src="./img/viva_fifth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img6">
										<img src="./img/viva_sixth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img7">
										<img src="./img/viva_seventh.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img8">
										<img src="./img/viva_eighth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img9">
										<img src="./img/viva_nineth.svg" alt="" class="sidebar-img">
									</div>
								</sidebar>
								<div class="popup-product_main-description">
	
									<div class="column">
										<p>
											Кроме того, средство восстанавливает функции печени и помогает организму выводить токсические вещества из организма. В результате применения продукта улучшается состояние кожи, восстанавливается естественный цвет лица, уменьшается количество высыпаний, а также значительно улучшается общее самочувствие.
										</p>
										<p>
											Биопаста Gepato Protect изготовлена на основе уникального обогащенного витаминизированного экстракта из пророщенных зерен пшеницы, ячменя, овса, гречки, кукурузы. Такой состав наполняет организм витаминами, минералами и энзимами, что очень важно для полноценной жизни.
										</p>
										<p>
											Бессмертник, корень Одуванчика, Расторопша и Пижма оказывают выраженный гепатопротекторный эффект, улучшают выработку желчи и работу печени. Уменьшают признаки воспаления в желудочно-кишечном тракте, желчном пузыре и печени. Барбарис, экстракт Малины и цветы Подсолнуха проявляют спазмолитический, противовоспалительный и общеукрепляющий эффект. Нормализуют синтетическую и детоксикационную функцию печени, улучшают выработку ферментов и перистальтику в ЖКТ.
										</p>
									</div>
									<div class="column">
										<p>
											Инновационный состав биопасты Gepato Protect оказывает комплексное целебное воздействие на весь организм. Продукт не просто устраняет проявления, а борется с причинами болезней и нарушений на клеточном уровне.
										</p>
										<p>
											Приятные вкусовые характеристики и удобная упаковка позволяют использовать продукт в качестве пищевой добавки к рациону в любое время и в любом месте.
										</p>
										<p>
											В комплексе с правильным питанием биопаста проявляет свой оздоровительный эффект еще быстрее. С ней сохранить здоровье пищеварительной системы намного проще, ведь в этом помогает сама природа.
										</p>
									</div>
								</div>
								
							</div>
							<div class="popup_active-btn">
								<a href="http://vivassense.com/product.html"> <button class="btn btn-green">Купить</button></a>
							</div>
						</div>
					</div>
					
				</div>
				<!-- how work 1 -->
				<section class="section section-green section-how" >
					<div class=" container section-how_inner">
						<div class="section-how_intro">
							<h2 class="section-heading">
								как работает биопаста
								<span class="how-heading">
									№5 Gepato Protect
								</span>
							</h2>
						</div>
						
						<div class="section-how_advantages">
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_heart"></use></svg>
								</div>
								<div class="section-how_advantages-text">Цілюща сила продукту базується на тому,
									що йод і селен, що містяться в морських
									водоростях, здатні брати активну участь
									в обміні речовин, гормонів і ферментів.</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_molecule"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Уникальная, формула био пасты 
									моментально усваевается организмом
								</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_quad"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Природное восстановление
									здоровья организма
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- how work 2 -->
				<section class="section section-white section-how" id="schema">
					<div class=" container section-how_inner">
						<div class="section-how_intro">
							<h2 class="section-heading">
								схема приема
							</h2>
						</div>
						
						<div class="section-how_advantages">
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic1"></use></svg>
								</div>
								<div class="section-how_advantages-text">1 десертная ложка био пасты </div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic2"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Принимать 1 раз/день утром, за 15 минут до еды
								</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic3"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Продолжительность приёма 4 недели
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="popup-product" id="popup-bl3-img6">
				<!-- popup nav -->
				<div class="main_header-nav_wrapper">
					<div class="main_header-nav">
						<div class="main_header-nav-left">
							<div class="main_header-nav-left_item main_header-nav-logo icon_use">
								<svg class="icon-close-nav popup_close"><use xlink:href="./img/svg/sprite.svg#viva_esc"></use></svg>
							</div>
							
	
						</div>
						<div class="main_header-nav-right">
							<div class="main_header-nav-active-btns">
								<div class="main_header-nav-contact nav-toggle-list">
									<div class="nav-toggle-list_name">093 388 88 88</div>
									<div class="nav-toggle-list_arr-down">
										<svg class="icon-arr_down">
											<use xlink:href="./img/svg/sprite.svg#viva_arr_down-black"></use>
										</svg>
									</div>
								</div>
								<div class="main_header-nav-shopping-cart icon_use">
									<svg class="icon-header icon-shoppingcart">
										<use xlink:href="./img/svg/sprite.svg#viva_main-basket"></use>
									</svg>
								</div>
							</div>
							<div class="main_header-nav-langs nav-toggle-list">
								<div class="nav-toggle-list_name"><span class="lang-full">English</span><span class="lang-short">Ua</span></div>
								<div class="nav-toggle-list_arr-down">
									<svg class="icon-arr_down">
										<use xlink:href="./img/svg/sprite.svg#viva_arr_down-black"></use>
									</svg>
								</div>
							</div>
							<div class="main_header-nav-burger icon_use">
								<svg class="icon-header icon_burger">
									<use xlink:href="./img/svg/sprite.svg#viva_burger"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
				
				<!-- content container -->
				<div class="popup-product_content">
					
					<div class="popup-product_main-content">
						<div class="popup-product_main-header">
							<div class="popup-product_main-icon">
								<svg class="heart_popup"><use xlink:href="./img/svg/sprite.svg#viva_heart-grey"></use></svg>
							</div>
							<span>Food Supplement Біопаста Vivassense №6 Man`s desire</span>
						</div>
						<div class="popup-product_img-overlay" style="background-image: url('img/images/tb6.png');"></div>
						<div class="popup-content_inner">
							<div class="popup-product_main-subheader">
								Восстановить мужскую силу и вернуть уверенность в себе с новым продуктом от Vivassense можно не только быстро, но и безопасно.
								Формула биопасты включает натуральные ингредиенты и активные добавки, которые в комплексе воздействуют на мужской организм,
								восстанавливают уровень половых гормонов и улучшают самочувствие в целом. </br>
								БЛАГОДАРЯ УНИКАЛЬНОМУ СОСТАВУ, СРЕДСТВО ИСПОЛЬЗУЕТСЯ В КОМПЛЕКСНОМ ЛЕЧЕНИИ И ПРОФИЛАКТИКЕ:
								Импотенции, Эректильной дисфункции, Синдрома хронической усталости, Простатите, Выраженной слабости, Апатии
							</div>
							<div class="popup-product_main-description_outer">
								<sidebar class="popup-product_sidebar-nav">
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img1">
										<img src="./img/viva_one.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img2">
										<img src="./img/viva_two.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img3">
										<img src="./img/viva_three.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img4">
										<img src="./img/viva_four.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img5">
										<img src="./img/viva_fifth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img6">
										<img src="./img/viva_sixth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img7">
										<img src="./img/viva_seventh.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img8">
										<img src="./img/viva_eighth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img9">
										<img src="./img/viva_nineth.svg" alt="" class="sidebar-img">
									</div>
								</sidebar>
								<div class="popup-product_main-description">
	
									<div class="column">
										<p>
											У взрослых мужчин средство уменьшает воспалительные процессы в предстательной железе, оказывает общетонизирующее действие, выводит токсины и свободные радикалы. В результате использования улучшается самочувствие, ощущается прилив сил и энергии, повышается половая функция и влечение. Благодаря общетонизирующему и детоксикационному эффекту средство оказывает омолаживающее действие. Биопаста может использоваться спортсменами, которые много энергии тратят на тренировках.
										</p>
										<p>
											Продукт изготовлен на основе обогащенного витаминизированного экстракта из пророщенных зерен пшеницы, ячменя, овса, гречки, кукурузы. За счет чего биопаста Man`s desire насыщает тело витаминами, минералами и энзимами и улучшает течение всех физиологических процессов в организме.
										</p>
										<p>
											Корень Имбиря, Женьшеня и Родиолы розовой проявляют общетонизирующее и адаптогенное воздействие на организм. Некоторые активные компоненты растений проявляют гормоноподобный эффект, что помогает быстро и без побочных явлений восстановить гормональный фон в организме мужчин. Вещество Силденафил в небольшом количестве входит в состав пасты, оно повышает половую функцию, увеличивает влечение и помогает справиться с импотенцией.
										</p>
									</div>
									<div class="column">
										<p>
											Экстракт яблока улучшает вкусовые качества продукта, а также проявляет общеукрепляющий и витаминоподобный эффект на организм.
										</p>
										<p>
											Использовать пасту можно как пищевую добавку в удобное время и месте. В этом помогает эргономичная упаковка, которую можно брать с собой на работу или в поездки.
										</p>
										<p>
											Работа биопасты Man`s desire направлена не просто на решение отдельных проблем, она восстанавливает мужское здоровье в целом, а благодаря активным добавкам, в виде Силденафила, эффект от использования ощущается уже после первого применения.
										</p>
									</div>
								</div>
								
							</div>
							<div class="popup_active-btn">
								<a href="http://vivassense.com/product.html"> <button class="btn btn-green">Купить</button></a>
							</div>
						</div>
					</div>
					
				</div>
				<!-- how work 1 -->
				<section class="section section-green section-how" >
					<div class=" container section-how_inner">
						<div class="section-how_intro">
							<h2 class="section-heading">
								как работает биопаста
								<span class="how-heading">
									№6 Man`s desire
								</span>
							</h2>
						</div>
						
						<div class="section-how_advantages">
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_heart"></use></svg>
								</div>
								<div class="section-how_advantages-text">Цілюща сила продукту базується на тому,
									що йод і селен, що містяться в морських
									водоростях, здатні брати активну участь
									в обміні речовин, гормонів і ферментів.</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_molecule"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Уникальная, формула био пасты 
									моментально усваевается организмом
								</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_quad"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Природное восстановление
									здоровья организма
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- how work 2 -->
				<section class="section section-white section-how" id="schema">
					<div class=" container section-how_inner">
						<div class="section-how_intro">
							<h2 class="section-heading">
								схема приема
							</h2>
						</div>
						
						<div class="section-how_advantages">
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic1"></use></svg>
								</div>
								<div class="section-how_advantages-text">1 десертная ложка био пасты </div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic2"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Принимать 1 раз/день утром, за 15 минут до еды
								</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic3"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Продолжительность приёма 4 недели
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="popup-product" id="popup-bl3-img7">
				<!-- popup nav -->
				<div class="main_header-nav_wrapper">
					<div class="main_header-nav">
						<div class="main_header-nav-left">
							<div class="main_header-nav-left_item main_header-nav-logo icon_use">
								<svg class="icon-close-nav popup_close"><use xlink:href="./img/svg/sprite.svg#viva_esc"></use></svg>
							</div>
							
	
						</div>
						<div class="main_header-nav-right">
							<div class="main_header-nav-active-btns">
								<div class="main_header-nav-contact nav-toggle-list">
									<div class="nav-toggle-list_name">093 388 88 88</div>
									<div class="nav-toggle-list_arr-down">
										<svg class="icon-arr_down">
											<use xlink:href="./img/svg/sprite.svg#viva_arr_down-black"></use>
										</svg>
									</div>
								</div>
								<div class="main_header-nav-shopping-cart icon_use">
									<svg class="icon-header icon-shoppingcart">
										<use xlink:href="./img/svg/sprite.svg#viva_main-basket"></use>
									</svg>
								</div>
							</div>
							<div class="main_header-nav-langs nav-toggle-list">
								<div class="nav-toggle-list_name"><span class="lang-full">English</span><span class="lang-short">Ua</span></div>
								<div class="nav-toggle-list_arr-down">
									<svg class="icon-arr_down">
										<use xlink:href="./img/svg/sprite.svg#viva_arr_down-black"></use>
									</svg>
								</div>
							</div>
							<div class="main_header-nav-burger icon_use">
								<svg class="icon-header icon_burger">
									<use xlink:href="./img/svg/sprite.svg#viva_burger"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
				
				<!-- content container -->
				<div class="popup-product_content">
					
					<div class="popup-product_main-content">
						<div class="popup-product_main-header">
							<div class="popup-product_main-icon">
								<svg class="heart_popup"><use xlink:href="./img/svg/sprite.svg#viva_heart-grey"></use></svg>
							</div>
							<span>Food Supplement Біопаста Vivassense №7 Cardio Protect</span>
						</div>
						<div class="popup-product_img-overlay" style="background-image: url('img/images/tb7.png');"></div>
						<div class="popup-content_inner">
							<div class="popup-product_main-subheader">
								Надежная защита сердца и сердечно-сосудистой системы вместе с инновационным продуктов от Vivassense доступна всем.
								Благодаря активным натуральным ингредиентам, паста нормализует работу сердца, улучшает обменные процессы в сердечной мышце,
								укрепляет стенку сосудов и помогает справиться с проявлениями ишемической болезни сердца, гипертонии и аритмий. </br>
								СРЕДСТВО ИСПОЛЬЗУЕТСЯ В КОМПЛЕКСНОМ ЛЕЧЕНИИ И ПРОФИЛАКТИКЕ:
								Артериальной гипертензии, Инсультов, Инфарктов, Ишемической болезни сердца, Нарушений сердечного ритма, Гипертрофиях миокарда.
							</div>
							<div class="popup-product_main-description_outer">
								<sidebar class="popup-product_sidebar-nav">
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img1">
										<img src="./img/viva_one.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img2">
										<img src="./img/viva_two.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img3">
										<img src="./img/viva_three.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img4">
										<img src="./img/viva_four.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img5">
										<img src="./img/viva_fifth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img6">
										<img src="./img/viva_sixth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img7">
										<img src="./img/viva_seventh.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img8">
										<img src="./img/viva_eighth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img9">
										<img src="./img/viva_nineth.svg" alt="" class="sidebar-img">
									</div>
								</sidebar>
								<div class="popup-product_main-description">
	
									<div class="column">
										<p>
											В результате использования продукта, улучшается сократительная способность миокарда, уменьшается выраженность симптомов ишемической, гипертонической и других болезней сердца и сосудов. Регулярное использование средства значительно уменьшает вероятность возникновения инсультов и инфарктов в будущем.
										</p>
										<p>
											Целебная сила продукта заключена в невероятных свойствах его ингредиентов.
										</p>
										<p>
											Паста изготавливается на основании обогащенного витаминизированного экстракта из пророщенных зерен пшеницы, ячменя, овса, гречки, кукурузы. Состав насыщает тело витаминами, минералами и энзимами. Благодаря чему нормализуется течение всех физиологических процессов в организме.
										</p>
										<p>
											Растения Конвалия и Адонис содержат натуральные сердечные гликозиды, которые улучшают силу сокращений сердца и восстанавливают его ритм.
										</p>
									</div>
									<div class="column">
										<p>
											Валериана, Пустырник и Мята успокаивают нервную систему, нормализуют тонус сосудов, благодаря чему могут облегчают симптомы стенокардии, боли в области сердца и предупреждают появление новых приступов заболевания.
										</p>
										<p>
											Гинкго билоба нормализует функционирование клеток мозга, мозговое кровообращение, улучшает память и уменьшает риск инсультов.
										</p>
										<p>
											Формула средства запатентована и не имеет аналогов в мире. Средство комплексно влияет на организм, усиливает его защитные функции и повышает жизненный тонус. Биопаста восстанавливает нормальную работу сердца и сердечно-сосудистой системы. Регулярное использование ее в качестве пищевой добавки к рациону поможет создать надежду защиту вашего сердца.
										</p>
									</div>
								</div>
								
							</div>
							<div class="popup_active-btn">
								<a href="http://vivassense.com/product.html"> <button class="btn btn-green">Купить</button></a>
							</div>
						</div>
					</div>
					
				</div>
				<!-- how work 1 -->
				<section class="section section-green section-how" >
					<div class=" container section-how_inner">
						<div class="section-how_intro">
							<h2 class="section-heading">
								как работает биопаста
								<span class="how-heading">
									№7 Cardio Protect
								</span>
							</h2>
						</div>
						
						<div class="section-how_advantages">
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_heart"></use></svg>
								</div>
								<div class="section-how_advantages-text">Цілюща сила продукту базується на тому,
									що йод і селен, що містяться в морських
									водоростях, здатні брати активну участь
									в обміні речовин, гормонів і ферментів.</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_molecule"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Уникальная, формула био пасты 
									моментально усваевается организмом
								</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_quad"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Природное восстановление
									здоровья организма
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- how work 2 -->
				<section class="section section-white section-how" id="schema">
					<div class=" container section-how_inner">
						<div class="section-how_intro">
							<h2 class="section-heading">
								схема приема
							</h2>
						</div>
						
						<div class="section-how_advantages">
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic1"></use></svg>
								</div>
								<div class="section-how_advantages-text">1 десертная ложка био пасты </div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic2"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Принимать 1 раз/день утром, за 15 минут до еды
								</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic3"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Продолжительность приёма 4 недели
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="popup-product" id="popup-bl3-img8">
				<!-- popup nav -->
				<div class="main_header-nav_wrapper">
					<div class="main_header-nav">
						<div class="main_header-nav-left">
							<div class="main_header-nav-left_item main_header-nav-logo icon_use">
								<svg class="icon-close-nav popup_close"><use xlink:href="./img/svg/sprite.svg#viva_esc"></use></svg>
							</div>
							
	
						</div>
						<div class="main_header-nav-right">
							<div class="main_header-nav-active-btns">
								<div class="main_header-nav-contact nav-toggle-list">
									<div class="nav-toggle-list_name">093 388 88 88</div>
									<div class="nav-toggle-list_arr-down">
										<svg class="icon-arr_down">
											<use xlink:href="./img/svg/sprite.svg#viva_arr_down-black"></use>
										</svg>
									</div>
								</div>
								<div class="main_header-nav-shopping-cart icon_use">
									<svg class="icon-header icon-shoppingcart">
										<use xlink:href="./img/svg/sprite.svg#viva_main-basket"></use>
									</svg>
								</div>
							</div>
							<div class="main_header-nav-langs nav-toggle-list">
								<div class="nav-toggle-list_name"><span class="lang-full">English</span><span class="lang-short">Ua</span></div>
								<div class="nav-toggle-list_arr-down">
									<svg class="icon-arr_down">
										<use xlink:href="./img/svg/sprite.svg#viva_arr_down-black"></use>
									</svg>
								</div>
							</div>
							<div class="main_header-nav-burger icon_use">
								<svg class="icon-header icon_burger">
									<use xlink:href="./img/svg/sprite.svg#viva_burger"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
				
				<!-- content container -->
				<div class="popup-product_content">
					
					<div class="popup-product_main-content">
						<div class="popup-product_main-header">
							<div class="popup-product_main-icon">
								<svg class="heart_popup"><use xlink:href="./img/svg/sprite.svg#viva_heart-grey"></use></svg>
							</div>
							<span>Food Supplement Біопаста Vivassense №8 Endo Protect</span>
						</div>
						<div class="popup-product_img-overlay" style="background-image: url('img/images/tb8.png');"></div>
						<div class="popup-content_inner">
							<div class="popup-product_main-subheader">
								Нормальная работа эндокринной системы - это залог здоровья человека. Поддерживать ее функционирование в условиях современной
								жизни достаточно сложно и проблематично. Негативное воздействие внешней среды, неправильное питание и постоянные стрессы соз-
								дают условия для формирования нарушений и развития ряда эндокринных заболеваний.
								Новый продукт, изготовленный на основе натуральных компонентов, помогает наладить нормальную работу щитовидной железы, надпо-
								чечников, гипофиза и других желез внутренней секреции. </br>
								БИОПАСТА ENDOPROTECT ИСПОЛЬЗУЕТСЯ В КОМПЛЕКСНОМ ЛЕЧЕНИИ И ПРОФИЛАКТИКЕ:
								Гипо- и гипертиреоза, гипо- и гиперпаратиреоза, нарушений работы надпочечников, нарушений работы эндокринной части поджелудочной железы, нарушениях в обмене половых гормонов.
							</div>
							<div class="popup-product_main-description_outer">
								<sidebar class="popup-product_sidebar-nav">
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img1">
										<img src="./img/viva_one.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img2">
										<img src="./img/viva_two.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img3">
										<img src="./img/viva_three.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img4">
										<img src="./img/viva_four.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img5">
										<img src="./img/viva_fifth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img6">
										<img src="./img/viva_sixth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img7">
										<img src="./img/viva_seventh.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img8">
										<img src="./img/viva_eighth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img9">
										<img src="./img/viva_nineth.svg" alt="" class="sidebar-img">
									</div>
								</sidebar>
								<div class="popup-product_main-description">
	
									<div class="column">
										<p>
											Кроме того, паста проявляет общетонизирующий, адаптогенный и иммуностимулирующий эффект. Повышает устойчивость организма к стрессу и инфекционным заболеваниям.
										</p>
										<p>
											При регулярном использовании средства в качестве добавки к питанию нормализуется уровень тиреоидных, половых гормонов, катехоламинов, а также восстанавливается нормальное течение всех обменных процессов в организме.
										</p>
										<p>
											Целебные свойства биопасты основаны на ее уникальном природном составе. В своей основе средство содержит обогащенный витаминизированный экстракт из пророщенных зерен пшеницы, ячменя, овса, гречки, кукурузы. Такой комплекс насыщает тело витаминами, минералами и энзимами. Благодаря чему нормализуется течение всех физиологических и обменных процессов в организме.
										</p>
									</div>
									<div class="column">
										<p>
											Ромашка, корень Девясила и Ириса содержат активные компоненты, которые восстанавливают уровень гормонов, укрепляют организм и восстанавливают жизненные силы.
										</p>
										<p>
											Фенхель, Полынь лимонная и экстракт Клубники оказывают противовоспалительное, антисептическое и общеукрепляющее действие.
										</p>
										<p>
											Биопаста упакована в эргономичный тюбик, который позволяет носить ее с собой на работу и брать в путешествия. Регулярное использование средства в качестве супер фуда создаст надежную защиту вашей эндокринной системе и здоровью в целом.
										</p>
									</div>
								</div>
								
							</div>
							<div class="popup_active-btn">
								<a href="http://vivassense.com/product.html"> <button class="btn btn-green">Купить</button></a>
							</div>
						</div>
					</div>
					
				</div>
				<!-- how work 1 -->
				<section class="section section-green section-how" >
					<div class=" container section-how_inner">
						<div class="section-how_intro">
							<h2 class="section-heading">
								как работает биопаста
								<span class="how-heading">
									№8 Endo Protect
								</span>
							</h2>
						</div>
						
						<div class="section-how_advantages">
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_heart"></use></svg>
								</div>
								<div class="section-how_advantages-text">Цілюща сила продукту базується на тому,
									що йод і селен, що містяться в морських
									водоростях, здатні брати активну участь
									в обміні речовин, гормонів і ферментів.</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_molecule"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Уникальная, формула био пасты 
									моментально усваевается организмом
								</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_quad"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Природное восстановление
									здоровья организма
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- how work 2 -->
				<section class="section section-white section-how" id="schema">
					<div class=" container section-how_inner">
						<div class="section-how_intro">
							<h2 class="section-heading">
								схема приема
							</h2>
						</div>
						
						<div class="section-how_advantages">
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic1"></use></svg>
								</div>
								<div class="section-how_advantages-text">1 десертная ложка био пасты </div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic2"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Принимать 1 раз/день утром, за 15 минут до еды
								</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic3"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Продолжительность приёма 4 недели
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="popup-product" id="popup-bl3-img9">
				<!-- popup nav -->
				<div class="main_header-nav_wrapper">
					<div class="main_header-nav">
						<div class="main_header-nav-left">
							<div class="main_header-nav-left_item main_header-nav-logo icon_use">
								<svg class="icon-close-nav popup_close"><use xlink:href="./img/svg/sprite.svg#viva_esc"></use></svg>
							</div>


						</div>
						<div class="main_header-nav-right">
							<div class="main_header-nav-active-btns">
								<div class="main_header-nav-contact nav-toggle-list">
									<div class="nav-toggle-list_name">093 388 88 88</div>
									<div class="nav-toggle-list_arr-down">
										<svg class="icon-arr_down">
											<use xlink:href="./img/svg/sprite.svg#viva_arr_down-black"></use>
										</svg>
									</div>
								</div>
								<div class="main_header-nav-shopping-cart icon_use">
									<svg class="icon-header icon-shoppingcart">
										<use xlink:href="./img/svg/sprite.svg#viva_main-basket"></use>
									</svg>
								</div>
							</div>
							<div class="main_header-nav-langs nav-toggle-list">
								<div class="nav-toggle-list_name"><span class="lang-full">English</span><span class="lang-short">Ua</span></div>
								<div class="nav-toggle-list_arr-down">
									<svg class="icon-arr_down">
										<use xlink:href="./img/svg/sprite.svg#viva_arr_down-black"></use>
									</svg>
								</div>
							</div>
							<div class="main_header-nav-burger icon_use">
								<svg class="icon-header icon_burger">
									<use xlink:href="./img/svg/sprite.svg#viva_burger"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>

				<!-- content container -->
				<div class="popup-product_content">

					<div class="popup-product_main-content">
						<div class="popup-product_main-header">
							<div class="popup-product_main-icon">
								<svg class="heart_popup"><use xlink:href="./img/svg/sprite.svg#viva_heart-grey"></use></svg>
							</div>
							<span>Food Supplement Біопаста Vivassense №9 Immuno Protect</span>
						</div>
						<div class="popup-product_img-overlay" style="background-image: url('img/images/tb9.png');"></div>
						<div class="popup-content_inner">
							<div class="popup-product_main-subheader">
								Улучшить работу иммунной системы, обезопасить себя от онкологических и инфекционных заболеваний с инновационным продуктом от
								Vivassense сегодня гораздо проще и быстрее. А все благодаря комплексу натуральных компонентов, входящих в состав биопасты, которые
								проявляют антибактериальное, противовирусное, а также онкопротекторное действие. </br>
								УНИКАЛЬНЫЙ КОМПЛЕКС ИНГРЕДИЕНТОВ ПОЗВОЛЯЕТ ИСПОЛЬЗОВАТЬ ПРОДУКТ ДЛЯ ПРОФИЛАКТИКИ И В КОМПЛЕКСНОМ ЛЕЧЕНИИ:
								Острых и хронических иммунодефицитных состояний, Онкологических заболеваний, Хронических бактериальных и вирусных инфекций,
								Выраженной астении
							</div>
							<div class="popup-product_main-description_outer">
								<sidebar class="popup-product_sidebar-nav">
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img1">
										<img src="./img/viva_one.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img2">
										<img src="./img/viva_two.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img3">
										<img src="./img/viva_three.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img4">
										<img src="./img/viva_four.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img5">
										<img src="./img/viva_fifth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img6">
										<img src="./img/viva_sixth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img7">
										<img src="./img/viva_seventh.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img8">
										<img src="./img/viva_eighth.svg" alt="" class="sidebar-img">
									</div>
									<div class="popup-product_sidebar-nav_item icon_use" data-id="bl3-img9">
										<img src="./img/viva_nineth.svg" alt="" class="sidebar-img">
									</div>
								</sidebar>
								<div class="popup-product_main-description">

									<div class="column">
										<p>
											Регулярное использование средства повышает уровень иммунной защиты, а также предотвращает появление опухолей различной локализации. Кроме того, биопаста Immuno Protect эффективно выводит токсины и уменьшает уровень холестерина в крови.
										</p>
										<p>
											Благодаря чему, после применения продукта улучшается самочувствие и повышается уровень энергии.
										</p>
										<p>
											Лечебное и общеукрепляющее действие биопаста оказывает за счет комплекса активных ингредиентов. Основой ее состава является обогащенный витаминизированный экстракт из пророщенных зерен пшеницы, ячменя, овса, гречки, кукурузы. Он содержит витамины, минералы и природные энзимы, которые нормализуют течение всех обменных процессов в организме. Наиболее активным компонентом биопасты Immuno Protect является экстракт гриба Веселки. Его уникальные лечебные свойства позволяют использовать его в комплексном лечении даже самых сложных онкологических заболеваний, а также для их профилактики. Гриб обеспечивает мощную антибактериальную и противовирусную защиту.
										</p>
									</div>
									<div class="column">
										<p>
											Солодка, Кропива двудомная, Ехинацея, Родиола розовая и экстракт Абрикоса придают продукту иммуностимулирующее,
											общеукрепляющее, детоксикационное и оздоравливающее
											действие.
										</p>
										<p>
											Паста имеет приятный вкус, поэтому ее удобно и приятно использовать в качестве полноценной добавки к питанию. Регулярное использование биопасты Immuno Protect поможет сформировать мощный иммунитет и обеспечит надежную противоопухолевую защиту.
										</p>
									</div>
								</div>

							</div>
							<div class="popup_active-btn">
								<a href="http://vivassense.com/product.html"> <button class="btn btn-green">Купить</button></a>
							</div>
						</div>
					</div>

				</div>
				<!-- how work 1 -->
				<section class="section section-green section-how" >
					<div class=" container section-how_inner">
						<div class="section-how_intro">
							<h2 class="section-heading">
								как работает биопаста
								<span class="how-heading">
									№9 Immuno Protect
								</span>
							</h2>
						</div>

						<div class="section-how_advantages">
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_heart"></use></svg>
								</div>
								<div class="section-how_advantages-text">Цілюща сила продукту базується на тому,
									що йод і селен, що містяться в морських
									водоростях, здатні брати активну участь
									в обміні речовин, гормонів і ферментів.</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_molecule"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Уникальная, формула био пасты
									моментально усваевается организмом
								</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_quad"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Природное восстановление
									здоровья организма
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- how work 2 -->
				<section class="section section-white section-how" id="schema">
					<div class=" container section-how_inner">
						<div class="section-how_intro">
							<h2 class="section-heading">
								схема приема
							</h2>
						</div>

						<div class="section-how_advantages">
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic1"></use></svg>
								</div>
								<div class="section-how_advantages-text">1 десертная ложка био пасты </div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic2"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Принимать 1 раз/день утром, за 15 минут до еды
								</div>
							</div>
							<div class="section-how_advantages-item">
								<div class="section-how_advantages-icon_wrapper">
									<svg class="section-how_advantages-icon"><use xlink:href="./img/svg/sprite.svg#viva_pop-bl5-ic3"></use></svg>
								</div>
								<div class="section-how_advantages-text">
									Продолжительность приёма 4 недели
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>



	<!-- ------------- -->
	<!-- ссылка на fullPage.js - https://alvarotrigo.com/fullPage/-->
	<!-- ------------- -->
	<!-- вот ссылка на инициализацию fullPage для jQuery https://github.com/alvarotrigo/fullPage.js#initialization-with-jquery-->
	<!-- ------------- -->
	<!-- вот ссылка на пример с обработчиком ивентов https://alvarotrigo.com/fullPage/examples/callbacks.html-->
	<!-- ------------- -->
	<!-- библиотеку для слайдера выбирайте которая вам нравится, тут не принципиально, используйте то, с чем проще-->
	<!-- ------------- -->

	<!-- Load Scripts Start -->
	<script>
		var scr = {
			"scripts": [{
				"src": "js/libs.min.js",
				"async": false
			}, {
				"src": "js/home.min.js",
				"async": false
			}, ]
		};
		! function (t, n, r) {
			"use strict";
			var c = function (t) {
				if ("[object Array]" !== Object.prototype.toString.call(t)) return !1;
				for (var r = 0; r < t.length; r++) {
					var c = n.createElement("script"),
						e = t[r];
					c.src = e.src, c.async = e.async, n.body.appendChild(c)
				}
				return !0
			};
			t.addEventListener ? t.addEventListener("load", function () {
				c(r.scripts);
			}, !1) : t.attachEvent ? t.attachEvent("onload", function () {
				c(r.scripts)
			}) : t.onload = function () {
				c(r.scripts)
			}
		}(window, document, scr);
	</script>

</body>

</html>
