<?php
    if (   ! is_active_sidebar( 'footer-widget-1'  )
        && ! is_active_sidebar( 'footer-widget-2'  )
        && ! is_active_sidebar( 'footer-widget-3'  )
        && ! is_active_sidebar( 'footer-widget-4'  )
    )
        return;
?>
<div id="footer-w-area" class="footer-w-area">
    <div class="<?php twentytwelve_footer_widget_class(); ?>">
        <?php if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>
        <div id="first" class="widget-area-footer" role="complementary">
            <?php dynamic_sidebar( 'footer-widget-1' ); ?>
        </div><!-- #footer-widget-1 .widget-area -->
        <?php endif; ?>
    </div>
</div><!-- #footer-w-area -->