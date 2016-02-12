<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

<section>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">



				<?php
				//$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'Square - 300x300' );
				//$thumb = $thumb[0];
				?>

				<!-- <img src="<?php echo $thumb ?>" alt="<?php the_title(); ?>" class="featured-image" /> -->





			<h1><?php the_title(); ?></h1>

			<time><i class="icon-calendar"></i> <?php posted_on(); ?></time>


				<?php the_content(); ?>


        <?php
        // Legacy PDF downloads
          if (is_attachment()) {

          echo "<p><em>File URL:</em><br />";
          ?>
          <input type="text" style="width:98%;font-size:10px" value="<?php echo wp_get_attachment_url($post->ID); ?>" />
          <?php
          echo "</p>";
          }
          ?>

            <?php
            $pdf_link = get_post_meta($post->ID, "pdf_link", $single = true);
            ?>

              <?php if($pdf_link){ ?>
                <div class="downloads">
                  <h3>Download:</h3>
                  <p><a href="<?php echo $pdf_link ?>"><?php the_title(); ?></a></p>
                </div> <!-- box -->
              <?php } // end if PDF Link ?>





        <?php if(get_field('reports__downloads')){ ?>
          <!-- ////////////////////////////////////////////////////////////////// -->
          <!-- Reports downloads -->
          <div class="downloads">
            <h3>Downloads</h3>
            <?php
            $rows = get_field('reports__downloads');
            if($rows)
            {
              echo '<ul>';

              foreach($rows as $row)
              { ?>

                <li><a target="_blank" href="https://drive.google.com/viewerng/viewer?url=<?php echo $row['reports__downloads__file'] ?>"><?php echo $row['reports__downloads__title'] ?></a></li>

            <?php  }

              echo '</ul>';
            };
          ?>
          </div>
          <!-- downloads -->
          <!-- ////////////////////////////////////////////////////////////////// -->
        <?php } ?>

				<?php // wp_link_pages(array('before' => __('Pages: '), 'next_or_number' => 'number')); ?>



				<div class="post-tags">
				<?php the_tags( __('View all our content on: '), ', ', ''); ?>
				</div>




			<?php edit_post_link(__('Edit this entry'),'','.'); ?>

		</article>

	<?php  comments_template(); ?>

	<?php endwhile; endif; ?>


</section>

<?php // post_navigation(); ?>


<div class="sidebar">

	<?php get_template_part('sidenav'); ?>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
