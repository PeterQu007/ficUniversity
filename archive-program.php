<?php
//37. Creating Relationships Between Content
//37.. Creating New Program Post
get_header();
pageBanner(array(
    'title' => 'All Programs',
    'subtitle' => 'Look for the correct program for you!',
));
?>

<div class="container container--narrow page-section">

<ul class="link-list min-list">

<?php
while (have_posts()) {
    the_post();?>
    <li><a href="<?php the_permalink();?>"><?php the_title();?></a>
    <?php //39. Break::Add Customer Field to Reits Post ?>
    <div>
      <?php echo get_field('reits_home_page'); ?>
    </div>
    </li>
  <?php }
echo paginate_links();
?>
</ul>



</div>

<?php get_footer();

?>