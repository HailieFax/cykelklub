    <footer class="footer">
        <div class="footer__item">
            <h2>Nr. Søby Cykelklub </h2>
            <p>Jens Hansens vej 2</p>
            <p>7840 Højslev</p><br>
            <p>12 34 56 78</p>
            <div id="footer__socials">
                <a href="https://www.facebook.com/nr.soebycykelklub" class="socials__facebook"><i class="fab fa-facebook"></i></a>
                <a href="#" class="socials__instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <!-- Footer widget med recent posts -->
        <div class="footer__item">
            <?php if ( is_active_sidebar( 'footer-center' ) ) : ?>
                <?php dynamic_sidebar( 'footer-center' ); ?>
            <?php else : ?> 
                <h2>Blog arkiv</h2>
                <ul>
                    <?php compact_archive($style='block'); ?>
                </ul>
            <?php endif; ?>
        </div>

        <div class="footer__item">
            <?php if ( is_active_sidebar( 'footer-right' ) ) : ?>
                <ul>
                    <?php dynamic_sidebar( 'footer-right' ); ?>
                </ul>
            <?php else : ?> 
                <h2>Kategorier</h2>
                <ul class="footer__list">
                    <?php wp_list_categories('title_li='); ?>
                </ul>
            <?php endif; ?>
        </div>
        
    </footer>
    <?php wp_footer();?>
    </body>
</html>