<?php get_header(); ?>
<div id="cont_first" class="container">
    <div id="contents">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
        <?php endwhile;
        endif; ?>
        <?php get_sidebar(); ?>
    </div>
</div>
<footer>
    <ul>
        <li class="home"><a href="index.html">TOP</a></li>
        <li><a href="service.html">SERVICE</a></li>
        <li><a href="company.html">COMPANY</a></li>
        <li><a href="contact.html">CONTACT</a></li>
    </ul>
    <div id="footer">
        <div class="copyright">Copyright &copy; 2020 SAMPLE SITE All Rights Reserved.</div>
    </div>
    <?php get_footer(); ?>