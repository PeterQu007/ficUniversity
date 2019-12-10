<?php
  //40. Professors Post Type
  //40.. Create Professor Post Page
  get_header();

  while(have_posts()) {
    the_post(); 
   pageBanner();?>

    <div class="container container--narrow page-section">
          <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('professor'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Professors</a> <span class="metabox__main"><?php the_title(); ?></span></p>
      </div>

      <div class="generic-content">
        <div class="row group">
            <div class="one-third">
                <?php //42. Featured Image Size & Cropping: use image size as parameter to select specific cropped image ?>
                <?php the_post_thumbnail('professorPortrait');  ?>
            </div>
            <div class="two-third">
              <?php //88. Let Users "Like" Content ?>
              <?php 
                $likeCount = new WP_Query(array(
                  'post_type' => 'like',
                  'meta_query' => array(
                    array(
                      'key' => 'liked_professor_id',
                      'compare' => "=",
                      'value' => get_the_ID()
                    )
                  )
                ));

                $existStatus = 'no';

                if(is_user_logged_in()){
                  $existQuery = new WP_Query(array(
                      'author' => get_current_user_id(),
                      'post_type' => 'like',
                      'meta_query' => array(
                          array(
                              'key' => 'liked_professor_id',
                              'compare' => "=",
                              'value' => get_the_ID(),
                          ),
                      ),
                  ));

                  if ($existQuery->found_posts) {
                      $existStatus = 'yes';
                  }

                }

              ?>
              <span class="like-box" data-like = "<?php echo $existQuery->posts[0]->ID; ?>" data-professor = "<?php the_ID() ?>" data-exists="<?php echo $existStatus; ?>">
                <i class="fa fa-heart-o" aria-hidden ="true" ></i>
                <i class="fa fa-heart" aria-hidden ="true" ></i>
                <span class="like-count"><?php echo $likeCount->found_posts; ?></span>
              </span>
              <?php the_content(); ?>
            </div>
        </div>
      </div>

      <?php
        //38. Displaying Relationships (Front-End)
        $relatedPrograms = get_field('related_programs'); //38.. related_programs is a custom field defined in Wordpress plugin

        if ($relatedPrograms) {
          echo '<hr class="section-break">';
          echo '<h2 class="headline headline--medium">Related Program(s)</h2>';
          echo '<ul class="link-list min-list">';
          foreach($relatedPrograms as $program) { ?>
            <li><a href="<?php echo get_the_permalink($program); ?>"><?php echo get_the_title($program); ?></a></li>
          <?php }
          echo '</ul>';
        }//38.

      ?>

    </div>
    

    
  <?php }

  get_footer();

?>