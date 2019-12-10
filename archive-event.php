<?php

get_header();
pageBanner(array(
  'title' => 'All Events',
  'subtitle' => 'See what is going on in our world.'
));
set_query_var('pageBanner', array(
    'title' => 'All Events',
    'subtitle' => 'We have many awesome events coming up soon!',
));
get_template_part('template-parts/content-banner');
?>

<div class="container container--narrow page-section">
<?php

while (have_posts()) {
    the_post();
    get_template_part('template-parts/content-event');
}
echo paginate_links();
?>

<hr class="section-break">
<!-- 36. Past Events Page: site_url() generate the page link -->
<p>Looking for a recap of past events? <a href="<?php echo site_url('/past-events') ?>">Check out our past events archive</a>.</p>

</div>

<?php get_footer();

?>