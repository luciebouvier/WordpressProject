<?php get_header(); ?>


<div class="entry-content">
    <?php 
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => '2',
        'paged' => 1,
    );
    $my_posts = new WP_Query( $args );
    if ( $my_posts->have_posts() ) : 
    ?>
        <div class="my-posts">
            <?php while ( $my_posts->have_posts() ) : $my_posts->the_post() ?>
                <h2><?php the_title() ?></h2>
                <?php the_excerpt() ?>
            <?php endwhile ?>
        </div>
    <?php endif ?>
    <div class="loadmore">Load More...</div>
</div>


<script type="text/javascript">
var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
var page = 2;
jQuery(function($) {
    $('body').on('click', '.loadmore', function() {
        var data = {
            'action': 'load_posts_by_ajax',
            'page': page,
            'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
        };
 
        $.post(ajaxurl, data, function(response) {
            $('.my-posts').append(response);
            page++;
        });
    });
});

</script>
<?php get_footer(); ?> 