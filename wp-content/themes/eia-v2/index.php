<?php


 get_header(); ?>

<section>

<?php if(is_search() && is_archive()) { ?>

  <h1>Search Results</h1>
  <p>You searched for <strong>"<?php echo esc_html( get_search_query( false ) ); ?>"</strong> in

    <strong>
      <?php
      $post_type = get_query_var( 'post_type', NULL );
      $obj = get_post_type_object( $post_type );

      $category_name = get_query_var( 'category_name', NULL );

      if($post_type != 'any'){
      ?>

      <?php echo $obj->labels->singular_name;?>

    <?php } elseif (isset($category_name)) { ?>

        <?php ucfirst(single_cat_title('',true)); ?>

  <?php } ?>

      </strong>


    </p>
<p class="note"><?php
global $wp_query;
echo $wp_query->found_posts.' results found';
?></p>


<?php } elseif ( is_post_type_archive() ) {
  ?>
  <h1><?php post_type_archive_title(); ?></h1>

<?php } elseif(is_archive()){ ?>
	 	<h1><?php ucfirst(single_cat_title('',true)); ?></h1>
     <?php } elseif (is_search()) { ?>

       <h1>Search Results</h1>
       <p>You searched for <strong>"<?php echo esc_html( get_search_query( false ) ); ?>"</strong></p>
    <p class="note"><?php
    global $wp_query;
    echo $wp_query->found_posts.' results found';
    ?></p>




  	<?php } else { ?>
		<h1>News</h1>
		<?php } ?>



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>




			<article class="summary__post summary__post--main-listing">

				<?php

          if(is_post_type_archive('report') || is_tax( 'report-category' )) {
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '175w' );
          } else {
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'Square - 175x175' );
          }

						$thumb = $thumb[0];
						?>

						<?php if($thumb && !is_search()) { ?>

							<a href="<?php the_permalink(); ?>">

            		<img src="<?php echo $thumb ?>" alt="<?php the_title(); ?>" class="featured-image" />

          	</a>

				<?php } ?>



				<h2 class="summary__post__title"><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h2>

				    <div class="byline summary__post__footer">

						<time class="pubdate updated summary__post__date-posted"><i class="icon-calendar"></i><?php posted_on(); ?></time>

					</div>


				   <?php the_excerpt(); ?>






				<a class="summary__post__more-link" href="<?php the_permalink() ;?>">Read article<i class="icon-right"></i></a>



			</article>

	<?php endwhile; ?>

	<?php pagination(); ?>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>

</section>

<div class="sidebar">

<?php get_template_part('sidenav'); ?>

<?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
