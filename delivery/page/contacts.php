<?php
	/**
		* Template name: contacts
	*/
 ?>

<?php get_header(); ?>

	<section class="hero">
		<div class="container">
			
			<h1>Доставим Ваш груз из Китая точно в срок</h1>
			<p class="hero__sub-title">От 30 кг и от 2-х дней с прохождением таможни, <br>включая все необходимые документы</p>
			<a href="#" class="btn order_open">получить консультацию</a>

		</div>
	</section>

	<section class="sea--contacts">
		<div class="container">

			<h2>контакты</h2>
			
			<p class="sea--contacts__sub-title">
				Опишите свою ситуацию и мы быстро свяжемся с вами.
			</p>

			<p>У вас есть вопросы, отзыв или вы не знаете с чего начать? Просто позвоните нам.</p>
			<p>Мы работаем ежедневно с <span>8.00 до 20.00</span> по МСК без выходных</p>

			<div class="sea--contacts__info">
				<div class="sea--contacts__item">
					<a href="mailto:info@inbox.ru"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.png" alt="">info@inbox.ru</a>
				</div>
				<div class="sea--contacts__item">
					<a href="tel:+78512410541"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tel.png" alt=""> +7 (8512) 410-541</a>
				</div>
				<div class="sea--contacts__item">
					<p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/place.png" alt=""> г. Астрахань,<br>пл.Ленина , 2, оф.7</p>
				</div>
				<div class="sea--contacts__item">
					<p>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/place.png" alt="">
						г. Пекин
					<br>
						北京市朝阳区新源里西19号格纳斯大厦319室
					<br>
						г. Гуанчжоу
					<br>
						白云区滘心大道自编一号 中北白云湖仓储园 С06-08
					</p>
				</div>
			</div>

		</div>
	</section>

	<?php get_template_part( 'parts/value' ); ?>

<?php get_footer(); ?>
