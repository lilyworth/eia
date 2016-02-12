
<?php if(is_category()) {

  $placeholder = get_category(get_query_var('cat'))->name;

} elseif(is_post_type_archive()) {

  $placeholder =  post_type_archive_title(NULL, FALSE);

} ?>



<h3>Explore <?php echo $placeholder ?></h3>

<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <!-- <label for="s" class="screen-reader-text">Search for</label> -->

        <input type="search" id="s" name="s" required placeholder="Search for&hellip;" value="" />

        <?php if(is_category()) { ?>

        <input type="hidden" name="category_name" value="<?php echo get_category(get_query_var('cat'))->slug; ?>" />

      <?php } elseif(is_post_type_archive()) { ?>

      <?php
      $post_type = get_post_type();
  if ( $post_type )
{
    $post_type_data = get_post_type_object( $post_type );
    $post_type_name = $post_type_data->name;

}
      ?>

        <input type="hidden" name="post_type" value="<?php echo $post_type_name; ?>" />

      <?php }; ?>

        <button><i class="icon-search"></i></button>
    </div>
</form>
