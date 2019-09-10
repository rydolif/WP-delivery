	<section class="contacts">
		<div class="container">

			<div class="contacts__logo header__logo">
				<a href="/">Рос<span>Кит</span>Транзит</a>
				<p>сервис по Доставке грузов из Китая в Россию</p>
			</div>

			<h3>Задайте ваш вопрос</h3>

			<div class="contacts__container">
				<?php 
					wp_nav_menu( array(
						'menu'=>'menu',
						'menu_class'=>'contacts__nav',
						'theme_location'=>'menu',
					) );
				?>
				<form class="contacts__form form">

					<div class="contacts__form_col">
						<div class="contacts__form_input">
							<input type="text" name="name" placeholder="Ваше имя" required>
						</div>
						<div class="contacts__form_input">
							<input type="tel" name="phone" placeholder="Ваш телефон" required>
						</div>
						<div class="contacts__form_input">
							<input type="email" name="mail" placeholder="Ваш E-mail" required>
						</div>
					</div>
					<div class="contacts__form_col">
						<div class="contacts__form_input">
							<textarea name="textarea" placeholder="Ваше сообщение" required></textarea>
						</div>
						<div class="">
							<button type="submit" class="btn" name="submit">получить консультацию</button>
						</div>
					</div>

				</form>
				<div class="contacts__info">
					<a href="tel:+78512410541"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tel.png" alt="">+7 (8512) 410-541</a>
					<p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/place.png" alt="">г. Астрахань, <br> ул.Свободы, 5, оф.4</p>
					<a href="maito:info@inbox.ru"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.png" alt=""> info@inbox.ru</a>
				</div>
			</div>

		</div>
	</section>