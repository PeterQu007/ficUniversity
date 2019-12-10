<?php

// 64. REST API | 64.. custom route
add_action('rest_api_init', 'universityRegisterSearch');

function universityRegisterSearch() {
  register_rest_route(// args[]: nameSpace/version, route, []
    'PIDRealty/v1', 'Search', array(
      'methods' => WP_REST_SERVER::READABLE, //HTTP GET
      'callback' => 'pidRealtySearchResults'
    )
  );
}

//65. Create Your Own Raw JSON Data
//65.. Wordpress will convert php array to JSON for js consumption
function pidRealtySearchResults($criteria){

  $mainQuery = new WP_Query(
    array(
      'post_type' => array('post','page','professor', 'program', 'event', 'community'), //67. | Add Searchable post types
      's' => sanitize_text_field($criteria['xSearch']) //66. | WP Function to increase security of the Search
    )
    );

    $mainQueryResults = array(
      'generalInfo' => array(),
      'professors' => array(),
      'programs' => array(),
      'events' => array(),
      'communities' => array()
    );
     
    while($mainQuery->have_posts()){
      $mainQuery->the_post();
      
      //67. | Add Post Type Groups | Post & Page
      if(get_post_type() == 'post' OR get_post_type() =='page') {
      array_push($mainQueryResults['generalInfo'], array(
          //args[]: target array, source data
          'title' => get_the_title(),
          'url' => get_the_permalink(),
          'postType' => get_post_type(),
          'authorName' => get_the_author()
      ));
      };
      //67. | Program
      if (get_post_type() == 'program' ) {
          array_push($mainQueryResults['programs'], array(
              //args[]: target array, source data
              'title' => get_the_title(),
              'url' => get_the_permalink(),
              'id' => get_the_id()
          ));
      }
      ;

      if (get_post_type() == 'professor' ) {
          array_push($mainQueryResults['professors'], array(
              //args[]: target array, source data
              'title' => get_the_title(),
              'url' => get_the_permalink(),
              'thumbnailURL' => get_the_post_thumbnail_url(0, 'professorLandscape') //args[]: post_selection::0 => current post, image_size
          ));
      }
      ;

      if (get_post_type() == 'event' ) {
        $eventDate = new DateTime(get_field('event_date'));
        $description = null;
        if (has_excerpt()) {
            $description= get_the_excerpt();
        } else {
            $description= wp_trim_words(get_the_content(), 18);
        }

          //args[]: target array, source data
          array_push($mainQueryResults['events'], array(
              'title' => get_the_title(),
              'url' => get_the_permalink(),
              'month' => $eventDate->format('M'), 
              'day' => $eventDate->format('d'),
              'description'  => $description
          ));
      }
      ;

      if (get_post_type() == 'community') {
          array_push($mainQueryResults['communities'], array(
              //args[]: target array, source data
              'title' => get_the_title(),
              'url' => get_the_permalink()
          ));
      }
      ;
    };
    //70. Search Logic that's Aware of Relationships
    wp_reset_postdata();

    if ($mainQueryResults['programs']) {
      
      $programsMetaQuery = array('relation' => 'OR');

      foreach ($mainQueryResults['programs'] as $item) {
          array_push(
              $programsMetaQuery, array(
                  'key' => 'related_programs',
                  'compare' => 'LIKE',
                  'value' => '"' . $item['id'] . '"',
              )
          );
      }

      $programRelationshipQuery = new WP_Query(array(
          'post_type' => array('professor', 'event'),
          'meta_query' => $programsMetaQuery,
      ));

      while ($programRelationshipQuery->have_posts()) {
          $programRelationshipQuery->the_post();
          if (get_post_type() == 'event') {
              $eventDate = new DateTime(get_field('event_date'));
              $description = null;
              if (has_excerpt()) {
                  $description = get_the_excerpt();
              } else {
                  $description = wp_trim_words(get_the_content(), 18);
              }

              //args[]: target array, source data
              array_push($mainQueryResults['events'], array(
                  'title' => get_the_title(),
                  'url' => get_the_permalink(),
                  'month' => $eventDate->format('M'),
                  'day' => $eventDate->format('d'),
                  'description' => $description,
              ));
          }
          ;

          if (get_post_type() == 'professor') {
              array_push($mainQueryResults['professors'], array(
                  //args[]: target array, source data
                  'title' => get_the_title(),
                  'url' => get_the_permalink(),
                  'thumbnailURL' => get_the_post_thumbnail_url(0, 'professorLandscape'), //args[]: post_selection::0 => current post, image_size
              ));
          }
          ;
      }

    }
    
    //Remove the duplicated records
    $mainQueryResults['professors'] = array_values(array_unique($mainQueryResults['professors'], SORT_REGULAR));
    $mainQueryResults['events'] = array_values(array_unique($mainQueryResults['events'], SORT_REGULAR));

  return $mainQueryResults ;
}

?>