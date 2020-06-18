<footer class="main-footer slide">
    <div class="container main-footer_inner">
        <nav class="main-footer_nav">
            <?php wp_nav_menu( array( 'theme_location' => 'extra-menu', 'menu_class' => 'main-footer_nav-wrapper' ) ); ?>
        </nav>
        <?php $phones = get_field('telefony', 'option'); ?>
        <div class="main-footer_contacts">
            <div class="footer-contacts_line-1">
                <div class="footer-contacts_phone"><?php echo $phones["telefon_1"]; ?></div>
                <div class="footer-contacts_phone"><?php echo $phones["telefon_2"]; ?></div>
                <div class="footer-contacts_media-item icon_use">
                    <a href="<?php the_field('ssylka_na_instagram', 'option'); ?>">
                        <svg class="icon-media icon-insta"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.svg#viva_insta"></use></svg>
                    </a>
                </div>
                <div class="footer-contacts_media-item icon_use">
                    <a href="<?php the_field('ssylka_na_facebook', 'option'); ?>">
                        <svg class="icon-media icon-insta"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.svg#viva_fb"></use></svg>
                    </a>
                </div>
            </div>
            <div class="footer-contacts_line-2">
                <div class="footer-contacts_address"><?php the_field('adres', 'option'); ?></div>
            </div>
            
        </div>
    </div>
</footer>


<!-- menu -->
<div class="menu_wrapper">
    <div class="menu_shadow-overlay close-trigger"></div>
    <div class="menu_outer ">
        <div class="container">
            <nav class="menu_inner">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'menu nav-menu', 'items_wrap' => '<ul id="%1$s" class="%2$s"><li><svg class="icon-close-nav menu_close close-trigger"><use xlink:href="https://vivassense.com/wp-content/themes/html5blank-stable/img/svg/sprite.svg#viva_esc"></use></svg></li>%3$s</ul>' ) ); ?>
            </nav>
        </div>
    </div>
</div>
<div class="footer-contacts_line-3">
    <svg class="icon-up"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.svg#viva_icon-up"></use></svg>
</div>
<!-- Load Scripts Start -->
<script>var scr = {"scripts":[{"src" : "<?php echo get_template_directory_uri(); ?>/js/libs.min.js", "async" : false}, {"src" : "<?php echo get_template_directory_uri(); ?>/js/product-cat.min.js", "async" : false}, ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);</script>
<!-- Load Scripts End -->