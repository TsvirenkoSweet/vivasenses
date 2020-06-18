<div class="main_header-nav_wrapper">
    <div class="main_header-nav">
        <div class="main_header-nav-left">
            <div class="main_header-nav-left_item main_header-nav-logo icon_use">
                <svg class="icon-close-nav popup_close"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.svg#viva_esc"></use></svg>
            </div>
        </div>
        <?php $phones = get_field('telefony', 'option'); ?>
        <div class="main_header-nav-right">
            <div class="main_header-nav-active-btns">
                <div class="main_header-nav-contact nav-toggle-list">
                    <div class="nav-toggle-list_name"><?php echo $phones["telefon_1"]; ?></div>
                    <div class="nav-toggle-list_name"><?php echo $phones["telefon_2"]; ?></div>
                    <div class="nav-toggle-list_arr-down">
                        <svg class="icon-arr_down">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.svg#viva_arr_down-black"></use>
                        </svg>
                    </div>
                </div>
                <div class="main_header-nav-shopping-cart icon_use">
                    <?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
                        $count = WC()->cart->cart_contents_count;
                    ?>
                    <a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'Перейти в корзину' ); ?>">
                    <svg class="icon-header icon-shoppingcart">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.svg#viva_main-basket"></use>
                    </svg>
                    <?php 
                    if ( $count > 0 ) {
                        ?>
                        <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
                        <?php
                    }
                        ?></a>

                    <?php } ?>
                </div>
            </div>
            <!-- <div class="main_header-nav-langs nav-toggle-list">
                <div class="nav-toggle-list_name"><span class="lang-full">English</span><span class="lang-short">Ua</span></div>
                <div class="nav-toggle-list_arr-down">
                    <svg class="icon-arr_down">
                        <use xlink:href="/img/svg/sprite.svg#viva_arr_down-black"></use>
                    </svg>
                </div>
            </div> -->
            <div class="main_header-nav-burger icon_use">
                <svg class="icon-header icon_burger">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.svg#viva_burger"></use>
                </svg>
            </div>
        </div>
    </div>
</div>