<footer>
        <div class="container f-container">
            <div class="container-box">
                <div class="fc-left">
                    <div class="fcl-links">
                         <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'fcl-links' ) ); ?>
                    </div>
                    <div class="fcl-logo">
                        <?php echo get_theme_mod('footer_html'); ?>
                    </div>
                </div>
                <div class="fc-right">
                    <div class="fcr-links">
                         <?php    
                    $menu_name = 'social-menu'; //menu slug
                    $locations = get_nav_menu_locations();
                    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                    $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
                    foreach($menuitems as $menuitem){
                        ?>
                            <a target="_blank" href="<?php echo $menuitem->url; ?>"><?php echo $menuitem->title ?></a>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<script>
            var Tawk_API = Tawk_API || {},
              Tawk_LoadStart = new Date();
            (function() {
              var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
              s1.async = true;
              s1.src = 'https://embed.tawk.to/5c59cbd36cb1ff3c14cb3b0a/1d2vf746k';
              s1.charset = 'UTF-8';
              s1.setAttribute('crossorigin', '*');
              s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
</body>
</html>