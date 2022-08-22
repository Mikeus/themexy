<?php
function themexy_post_meta(){
/* Translators: %s: Post Date */
  printf(
 esc_html__( 'Posted on %s', 'themexy'),
  '<a href="'. esc_url(get_permalink() ).  '"><time datetime="' . esc_attr(get_the_date('c'))  . '">'. esc_html(get_the_date()) . '</time> </a>'
  );
/* Transloators: %s: Author */
  printf(
    esc_html__('By %s', 'themexy'),
        '<a href="'. esc_url(get_author_posts_url( get_the_author_meta('ID') ))  . '">' . esc_html(get_the_author( )) .'</a>'
  );
}

function themexy_read_more_link(){

  echo '<a href="'. esc_url(get_the_permalink()) .'" title="' . the_title_attribute(['echo'=>false]) . '"> ';
/* Transloators: %s: Post Title */
       printf( 
        wp_kses(
      __('Read More <span class="u-screen-reader-text"> About %s </span>' , 'themexy'),
    [
      'span' => [
        'class' =>[]
      ]
    ]),
       get_the_title());

  echo '</a>';
}
?>