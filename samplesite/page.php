<?php get_header(); ?>	
<div id="cont_first" class="container">
        <div id="contents">
            <div id="cont_left">
            <h2>サービス概要</h2>
			<h3 id="s1">ホームページ制作</h3>
			<p>ホームページの制作を行います。要件定義からリリースまで、誠心誠意サポートをさせていただきます。</p>
			<div class="service_img"><img src="	<?php echo get_template_directory_uri(); ?>/images/service01.jpeg"></div>
			<h3 id="s2">エンジニア派遣</h3>
			<p>Webに関するプロフェッショナルを派遣します。詳しくはお問い合わせください。</p>
			<div class="service_img"><img src="	<?php echo get_template_directory_uri(); ?>/images/service02.jpeg"></div>
			<a href="contact.html"><button class="btn1">お問い合わせ</button></a>
	        </div>
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