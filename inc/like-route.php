<?php 
//89. Let Users Like Content
add_action('rest_api_init', 'universityLikeRoutes');

function universityLikeRoutes(){
  register_rest_route('PIDRealty/v1', 'manageLike', array(
    'methods' => 'POST',
    'callback' => 'createLike'
  ));

register_rest_route('PIDRealty/v1', 'manageLike', array(
    'methods' => 'DELETE',
    'callback' => 'deleteLike',
));
}

function createLike($data){
  //92. 
  if (is_user_logged_in()){
    $professor = sanitize_text_field($data['professorId']);

    $existQuery = new WP_Query(array(
        'author' => get_current_user_id(),
        'post_type' => 'like',
        'meta_query' => array(
            array(
                'key' => 'liked_professor_id',
                'compare' => "=",
                'value' => $professor,
            ),
        ),
    ));


    if($existQuery->found_posts == 0 AND get_post_type($professor)=='professor'){
      //90. Programmatically create a Post
      return wp_insert_post(array(
          'post_type' => 'like',
          'post_status' => 'publish',
          'post_title' => 'Our PHP Create Post 2nd Test',
          // 'post_content' => 'test'
          'meta_input' => array(
              'liked_professor_id' => $professor,
          ),
      ));

    }else{
      die("Invalid professor id");
    }


  }else{
    die("Only logged in users can create a like");
  }

}

function deleteLike($data){
  $likeId = sanitize_text_field($data['like']);
  if(get_current_user_id() == get_post_field('post_author',$likeId) AND get_post_type($likeId)=='like'){
    wp_delete_post($likeId, true);
    return "You Delete Successfully";
  }else{
    die("You do not have permission to delete that.");
  }

 
}

?>