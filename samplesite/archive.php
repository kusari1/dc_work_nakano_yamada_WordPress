<?php get_header(); ?>
<div id="cont_first" class="container">
        <div id="contents">
            <div id="cont_left">
                <div class="information">
                    <h2>Blog</h2>
                    <dl>
                        <dt>2020-08-04</dt>
                        <dd>
                            <div class="b_img"><img src="<?php echo get_template_directory_uri(); ?>/images/sample.jpg"></div>
                            <div class="b_right"><a href="sample.html">社長通信</a></div>
                        </dd>
                        <dt>2020-08-02</dt>
                        <dd>
                            <div class="b_img"><img src="<?php echo get_template_directory_uri(); ?>/images/sample.jpg"></div>
                            <div class="b_right"><a href="sample.html">社員紹介</a></div>
                        </dd>
                        <dt>2020-08-01</dt>
                        <dd>
                            <div class="b_img"><img src="<?php echo get_template_directory_uri(); ?>/images/sample.jpg"></div>
                            <div class="b_right"><a href="sample.html">セミナー開催報告</a></div>
                        </dd>
                    </dl>
                </div>
    <div class="information">
     <h2>INFORMATION</h2>
     <dl>
     	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <dt><?php the_time('Y-m-d'); ?></dt?>
            <span class="tab tag_<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"> <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?> </span>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>を掲載しました。</dd>
        <?php endwhile; endif; ?>
     </dl>
    </div>
    </div>
    <?php get_sidebar(); ?>
    </div>
    </div>
    <?php get_footer(); ?>	