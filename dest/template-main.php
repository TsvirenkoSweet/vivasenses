<?php /* Template Name: Главная страница */ get_header(); 
for ($i = 1; $i <= 5; $i++) {
	${"blok_".$i} = get_field("blok_".$i);
}
?>
	<div class="container main_header-content">
		<div class="main_header-heading">
			<h1><?php echo $blok_1["title"]; ?></h1>
			<h2><?php echo $blok_1["subtitle"]; ?></h2>
		</div>
		<div class="main_header-subheading">
			<div>

				<div class="main_header-subinfo"><?php echo $blok_1["abovebtn"]; ?></div>
				<div class="btn-group">
					<button class="btn btn-green open-contact-popup"><?php echo $blok_1["btntext"]; ?></button>
				</div>
			</div>

			<div class="main_header-stamp icon_use">
				<svg class="icon icon_stamp">
					<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.svg#viva_stamp"></use>
				</svg>
			</div>
		</div>
	</div>
</header>
		<!-- how hork -->
		<section class="section slide fullpage_section  section-green section-how" data-anchor="work">
			<div class=" container section-how_inner">
				<div class="section-how_intro">
					<h2 class="section-heading"><?php echo $blok_2["title"]; ?></h2>
					<div class="section-how_product-description"><?php echo $blok_2["subtitle"]; ?></div>
				</div>

				<div class="section-how_advantages">
					<div class="section-how_advantages-item">
						<div class="section-how_advantages-icon_wrapper">
							<svg class="section-how_advantages-icon"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.svg#viva_heart"></use></svg>
						</div>
						<div class="section-how_advantages-text"><?php echo $blok_2["descriptions"]["first"]; ?></div>
					</div>
					<div class="section-how_advantages-item">
						<div class="section-how_advantages-icon_wrapper">
							<svg class="section-how_advantages-icon"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.svg#viva_molecule"></use></svg>
						</div>
						<div class="section-how_advantages-text"><?php echo $blok_2["descriptions"]["second"]; ?></div>
					</div>
					<div class="section-how_advantages-item">
						<div class="section-how_advantages-icon_wrapper">
							<svg class="section-how_advantages-icon"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.svg#viva_quad"></use></svg>
						</div>
						<div class="section-how_advantages-text"><?php echo $blok_2["descriptions"]["third"]; ?></div>
					</div>
				</div>
			</div>
		</section>
		<!-- cardio protect -->
		<section class="section slide fullpage_section  section-protect" data-anchor="protect">
			<div class="section-protect_inner">
				<div class="section-protect_item" id="bl3-img1" data-frame="5" data-query="1" data-id="bl3-img1"
					style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/images/bl3-adv1.jpg'); background-position: 58% 50%;">
					<div class="item-gallery_intro hide-bl">
						<div class="item-gallery_intro-num">№<span>1</span></div>
						<div class="item-gallery_intro-heading"><?php echo $blok_3["project-1-name"]; ?></div>
						<div class="item-gallery_intro-icon">
							<div class="ref" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/images/sprite1.png');"></div>
						</div>
					</div>
					<div class="item-gallery_overlay"></div>
					<div class="hover_overlay"></div>
				</div>
				<div class="section-protect_item" id="bl3-img2" data-frame="4" data-query="2" data-id="bl3-img2"
					 style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/images/bl3-adv2.jpg'); background-position: 50% 50%;">
					<div class="item-gallery_intro hide-bl">
						<div class="item-gallery_intro-num">№<span>2</span></div>
						<div class="item-gallery_intro-heading"><?php echo $blok_3["project-2-name"]; ?></div>
						<div class="item-gallery_intro-icon">
							<div class="ref" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/images/sprite2.png');"></div>
						</div>
					</div>
					<div class="item-gallery_overlay"></div>
					<div class="hover_overlay"></div>
				</div>
				<div class="section-protect_item" id="bl3-img3" data-frame="5" data-query="3" data-id="bl3-img3"
					 style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/images/bl3-adv3.jpg'); background-position: 43% 50%;">
					<div class="item-gallery_intro hide-bl">
						<div class="item-gallery_intro-num">№<span>3</span></div>
						<div class="item-gallery_intro-heading"><?php echo $blok_3["project-3-name"]; ?></div>
						<div class="item-gallery_intro-icon">
							<div class="ref" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/images/sprite3.png');"></div>
						</div>
					</div>
					<div class="item-gallery_overlay"></div>
					<div class="hover_overlay"></div>
				</div>
				<div class="section-protect_item" id="bl3-img4" data-frame="5" data-query="4" data-id="bl3-img4"
					 style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/images/bl3-adv4.jpg'); background-position: 32% 50%;">
					<div class="item-gallery_intro hide-bl">
						<div class="item-gallery_intro-num">№<span>4</span></div>
						<div class="item-gallery_intro-heading"><?php echo $blok_3["project-4-name"]; ?></div>
						<div class="item-gallery_intro-icon">
							<div class="ref" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/images/sprite4.png');"></div>
						</div>
					</div>
					<div class="item-gallery_overlay"></div>
					<div class="hover_overlay"></div>
				</div>
				<div class="section-protect_item" id="bl3-img5" data-frame="9" data-query="5" data-id="bl3-img5"
					 style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/images/bl3-adv5.jpg'); background-position: 70% 50%;">
					<div class="item-gallery_intro hide-bl">
						<div class="item-gallery_intro-num">№<span>5</span></div>
						<div class="item-gallery_intro-heading"><?php echo $blok_3["project-5-name"]; ?></div>
						<div class="item-gallery_intro-icon">
							<div class="ref" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/images/sprite5.png');"></div>
						</div>
					</div>
					<div class="item-gallery_overlay"></div>
					<div class="hover_overlay"></div>
				</div>
				<div class="section-protect_item" id="bl3-img6" data-frame="4" data-query="6" data-id="bl3-img6"
					 style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/images/bl3-adv6.jpg'); background-position: 54% 50%;">
					<div class="item-gallery_intro hide-bl">
						<div class="item-gallery_intro-num">№<span>6</span></div>
						<div class="item-gallery_intro-heading"><?php echo $blok_3["project-6-name"]; ?></div>
						<div class="item-gallery_intro-icon">
							<div class="ref" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/images/sprite6.png');"></div>
						</div>
					</div>
					<div class="item-gallery_overlay"></div>
					<div class="hover_overlay"></div>
				</div>
				<div class="section-protect_item" id="bl3-img7" data-frame="9" data-query="7" data-id="bl3-img7"
					 style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/images/bl3-adv7.jpg'); background-position: 15% 50%;">
					<div class="item-gallery_intro hide-bl">
						<div class="item-gallery_intro-num">№<span>7</span></div>
						<div class="item-gallery_intro-heading"><?php echo $blok_3["project-7-name"]; ?></div>
						<div class="item-gallery_intro-icon">
							<div class="ref" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/images/sprite7.png');"></div>
						</div>
					</div>
					<div class="item-gallery_overlay"></div>
					<div class="hover_overlay"></div>
				</div>
				<div class="section-protect_item" id="bl3-img8" data-frame="10" data-query="8" data-id="bl3-img8"
					 style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/images/bl3-adv8.jpg'); background-position: 42% 50%;">
					<div class="item-gallery_intro hide-bl">
						<div class="item-gallery_intro-num">№<span>8</span></div>
						<div class="item-gallery_intro-heading"><?php echo $blok_3["project-8-name"]; ?></div>
						<div class="item-gallery_intro-icon">
							<div class="ref" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/images/sprite8.png');"></div>
						</div>
					</div>
					<div class="item-gallery_overlay"></div>
					<div class="hover_overlay"></div>
				</div>
				<div class="section-protect_item" id="bl3-img9" data-frame="9" data-query="9" data-id="bl3-img9"
					 style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/images/bl3-adv9.jpg'); background-position: 42% 50%;">
					<div class="item-gallery_intro hide-bl">
						<div class="item-gallery_intro-num">№<span>9</span></div>
						<div class="item-gallery_intro-heading"><?php echo $blok_3["project-9-name"]; ?></div>
						<div class="item-gallery_intro-icon">
							<div class="ref" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/images/sprite9.png');"></div>
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
					<h2 class="section-heading"><?php echo $blok_4["title"]; ?></h2>
					<a href="<?php echo $blok_4["btntext"]; ?>"> <button class="btn btn-white"><?php echo $blok_4["btntext"]; ?></button></a>
				</div>
				<div class="photo-product">
					<img src="<?php echo get_template_directory_uri(); ?>/img/images/bl4.png" alt="" class="section-photo hide-pic section-choose_photo">
				</div>
			</div>
		</section>
		<!-- for children -->
		<section class="section slide fullpage_section  section-kids" data-anchor="kids">
			<div class="container section-kids_inner">
				<div class="section-kids_pic icon_use ">
					<img src="<?php echo get_template_directory_uri(); ?>/img/images/bl5-img2.png" class="section-photo hide-pic section-kids_pic-item kids-product_photo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/images/bl5-img1.png" class="section-photo hide-pic section-kids_pic-item kids-product_symb">
				</div>
				<div class="section-kids_intro">
					<h2 class="section-heading"><?php echo $blok_5["title"]; ?></h2>
					<div class="remark"><?php echo $blok_5["subtitle"]; ?></div>
					<a href="<?php echo $blok_5["btnlink"]; ?>"> <button class="btn btn-white"><?php echo $blok_5["btntext"]; ?></button></a>
				</div>
			</div>
		</section>

<?php get_footer(); ?>
