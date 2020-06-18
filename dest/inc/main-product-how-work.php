<?php
$blok_kak_rabotaet_produkt = get_field('blok_kak_rabotaet_produkt', $product->get_id());
$shema_priema_produkta = get_field('shema_priema_produkta', $product->get_id());
if( $blok_kak_rabotaet_produkt ): ?>
    <section class="section section-green section-how" >
        <div class=" container section-how_inner">
            <div class="section-how_intro">
                <h2 class="section-heading">
                    как работает
                    <span class="how-heading">
                        <?php echo $productTitle; ?>
                    </span>
                </h2>
            </div>
            
            <div class="section-how_advantages">
                <div class="section-how_advantages-item">
                    <div class="section-how_advantages-icon_wrapper">
                        <svg class="section-how_advantages-icon"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.svg#viva_heart"></use></svg>
                    </div>
                    <div class="section-how_advantages-text"> <?php echo $blok_kak_rabotaet_produkt["pervoe_opisanie"]; ?></div>
                </div>
                <div class="section-how_advantages-item">
                    <div class="section-how_advantages-icon_wrapper">
                        <svg class="section-how_advantages-icon"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.svg#viva_molecule"></use></svg>
                    </div>
                    <div class="section-how_advantages-text"><?php echo $blok_kak_rabotaet_produkt["vtoroe_opisanie"]; ?></div>
                </div>
                <div class="section-how_advantages-item">
                    <div class="section-how_advantages-icon_wrapper">
                        <svg class="section-how_advantages-icon"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.svg#viva_quad"></use></svg>
                    </div>
                    <div class="section-how_advantages-text"><?php echo $blok_kak_rabotaet_produkt["tretie_opisanie"]; ?></div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php if( $shema_priema_produkta ): ?>
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
                        <svg class="section-how_advantages-icon"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.svg#viva_pop-bl5-ic1"></use></svg>
                    </div>
                    <div class="section-how_advantages-text"><?php echo $shema_priema_produkta["pervoe_opisanie"]; ?></div>
                </div>
                <div class="section-how_advantages-item">
                    <div class="section-how_advantages-icon_wrapper">
                        <svg class="section-how_advantages-icon"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.svg#viva_pop-bl5-ic2"></use></svg>
                    </div>
                    <div class="section-how_advantages-text"><?php echo $shema_priema_produkta["vtoroe_opisanie"]; ?></div>
                </div>
                <div class="section-how_advantages-item">
                    <div class="section-how_advantages-icon_wrapper">
                        <svg class="section-how_advantages-icon"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.svg#viva_pop-bl5-ic3"></use></svg>
                    </div>
                    <div class="section-how_advantages-text"><?php echo $shema_priema_produkta["tretie_opisanie"]; ?></div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>