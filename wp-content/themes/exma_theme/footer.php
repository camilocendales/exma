<?php?>
<div class="Footer">
	<div class="Footer_content">
		<p>SOBRE EXMA</p>
		<?php wp_nav_menu(); ?>
	</div>
	<div class="Footer_content">
		<p>CONTENIDO</p>
		<a href="<?php echo home_url(); ?>/politica-de-privacidad" target="_blank">Política de privacidad</a>
		<a href="#">Conoce la arena</a>
	</div>
	<div class="Footer_content">
		<p>PÓNGASE EN CONTACTO</p>
		<div class="Footer_social">
			<!-- <a href="#">
				<i class="fa-brands fa-twitter"></i>
			</a> -->
			<a href="https://www.facebook.com/EXMAColombia" target="_blank">
				<i class="fa-brands fa-facebook"></i>
			</a>
			<a href="https://www.instagram.com/exmabeon" target="_blank">
				<i class="fa-brands fa-instagram"></i>
			</a>
			<a href="https://www.youtube.com/channel/UCzuzsHD2_my6j3zFzgYg0EA" target="_blank">
				<i class="fa-brands fa-youtube"></i>
			</a>
		</div>
	</div>
	<div class="Footer_content">
		<a href="<?php echo home_url(); ?>">
			<img src="<?php bloginfo('template_directory'); ?>/assets/images/logo_footer.png" alt="">
		</a>
	</div>
</div>
</body>
</html>
