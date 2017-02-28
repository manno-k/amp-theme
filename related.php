<section class="related">
  <article>
    <?php
    $post = new stdClass;
    $post->ID = null;
    $categories = get_the_category($post->ID);
    $category_ID = array();
    foreach ($categories as $category):
        array_push($category_ID, $category->cat_ID);
    endforeach;
    $args = array(
        'post__not_in' => array($post->ID),
        'posts_per_page' => 6,
        'category__in' => $category_ID,
        'orderby' => 'rand',
    );
    $query = new WP_Query($args);
    if ($query->have_posts()): ?>
                <div class="related--title">おすすめの記事はこちら♪</div>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                      <?php
                      $category = get_the_category();
                      $cat_name = $category[0]->cat_name;
                      $cat_slug = $category[0]->category_nicename;
                      ?>
                      <time datetime="<?php the_time('c'); ?>"><span><?php the_time("Y.n.j"); ?></span></time>

                        <div class="related--entry">
                            <a href="<?php the_permalink(); ?>"
                               title="<?php the_title_attribute(); ?>">
                               <div class="related--entry--title">
                                 <div>
                                   <span><?php the_title(); ?></span>
                                 </div>
                               </div>
                                <figure>
                                    <div class="related--entry--thumb">
                                        <?php
                                        $image_id = get_post_thumbnail_id();
                                        $image_url = wp_get_attachment_image_src($image_id, true);
                                        ?>
                                        <amp-img src="<?php echo $image_url[0]; ?>" width="360" height="240"layout="responsive"></amp-img>
                                    </div>
                                </figure>
                            </a>
                        </div>

                    <?php endwhile; ?>
                  <?php else: ?>
                  <?php
              endif;
              wp_reset_postdata();
              ?>
  </article>
</section>
