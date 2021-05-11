<?php
$wp_query = new WP_Query(array(‘post_type’ => ‘post’,
‘paged’ => $paged,
‘posts_per_page’ => 5)
);
while ($wp_query->have_posts()) : $wp_query->the_post();?>
<!– get post url link–>
<a href=”<?php echo the_permalink(); ?>”>
<?php
//Get post thumbnail image url
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));

?>
<img class=”img-responsive” src=”<?php echo $thumb[0];?>”>
<!– get post title –>
<h3><?php the_title();?></h3>


 
</a>
<?php endwhile;?>
