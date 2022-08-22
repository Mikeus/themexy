<?php
function themexy_post_meta(){
echo 'Posted on ';
echo '<a href="'. esc_url(get_permalink() ).  '">';
  echo '<time datetime="' . esc_attr(get_the_date('c'))  . '">'. esc_html(get_the_date())  . '</time>';
  echo '</a>';
echo ' By <a href="'. esc_url(get_author_posts_url( get_the_author_meta( 'ID')))  . '"> ' . esc_html(get_the_author()) .
  '</a>';
}

function themexy_read_more_link(){
echo '<a href="'. esc_url(get_the_permalink()) .'"
   title="' . the_title_attribute(['echo'=>false]) . '"> ';
  echo 'Read More';
  echo ' <span class="u-screen-reader-text">';
    echo 'About ';
    echo ''. the_title() .' </span> </a>';
}
?>