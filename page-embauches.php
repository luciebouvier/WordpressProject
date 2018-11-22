<?php get_header(); ?>    

    

    <section >
        <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="post">

 <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

 <small><?php the_time('F jS, Y'); ?></small>

 <div class="entry">
   <?php the_content(); ?>
 </div>

 <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
</div> <!-- fin du premier bloc div -->

<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
        </div>
    </section> 


<?php get_footer(); ?> 