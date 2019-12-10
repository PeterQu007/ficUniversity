<?php
//50. Campuses Continued | 50.. Community Template
get_header();

while (have_posts()) {
    the_post();
    pageBanner();?>

<div class="container container--narrow page-section">
          <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('community'); ?>"><i class="fa fa-home" aria-hidden="true">
        </i> All Communities</a> <span class="metabox__main"><?php the_title();?></span></p>
      </div>

      <div class="generic-content"><?php the_content();?></div>

      <div>
        <?php echo get_field('reits_home_page'); ?>
      </div>

      <?php //50.. Add map ?>
      <div class="acf-map">

        <?php
$mapLocation = get_field('map_location');?>
            <div class="marker" data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng'] ?>">
            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a> </h3>
            <?php echo $mapLocation['address']; ?>
            </div>
        </div>

      <?php //38. Displaying Relationship
    //38.. Add Related Events to Program
    ?>
      <?php
$relatedProfessors = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'professor',
        'orderby' => 'title',
        'order' => 'ASC',
        'meta_query' =>
        //40.. Set up query filter:
        array(
        'key' => 'related_programs',
        'compare' => 'LIKE',
        'value' => '"' . get_the_ID() . '"', //38.. Get post ID with double quotes
    ),

    ));

if ($relatedProfessors->have_posts()) {
    //39. Format Related Event Posts
    echo '<hr class="section-break">';
    echo '<h2 class="headline headline--medium"> REALTOR: ' . get_the_title() . ' </h2>';
    echo '<ul class="professor-cards">';
    while ($relatedProfessors->have_posts()) {
        $relatedProfessors->the_post();?>
            <li class="professor-card__list-item">
              <a class="professor-card" href="<?php the_permalink()?>">
                <?php //42. Featured Image Size & Cropping: use image size as parameter to select specific cropped image ?>
                <img class="professor-card__image" src="<?php the_post_thumbnail_url('professorLandscape')?>">
                <span class="professor-card__name"><?php the_title()?></span>
              </a>
            </li>
          <?php }
    echo '</ul>';
}

wp_reset_postdata(); //40.. reset post date after every query done

$today = date('Ymd');
$homepageEvents = new WP_Query(array(
    'posts_per_page' => 2,
    'post_type' => 'event',
    'meta_key' => 'event_date',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
    'meta_query' => array(
        array(
            'key' => 'event_date',
            'compare' => '>=',
            'value' => $today,
            'type' => 'numeric',
        ),
        //38.. Generate related programs to events
        array(
            'key' => 'related_programs',
            'compare' => 'LIKE',
            'value' => '"' . get_the_ID() . '"', //38.. Get post ID with double quotes
        ),
    ),
));

if ($homepageEvents->have_posts()) {
    //39. Format Related Event Posts
    echo '<hr class="section-break">';
    echo '<h2 class="headline headline--medium"> Upcoming ' . get_the_title() . ' Events</h2>';
    while ($homepageEvents->have_posts()) {
        $homepageEvents->the_post();
        get_template_part('template-parts/content-event');
    }
}
?>

    </div>



  <?php }

get_footer();

?>