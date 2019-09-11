
	<header class="header">
		<div class="header__container container">
			
			<div class="header__logo">
				<a href="/">Рос<span>Кит</span>Транзит</a>
				<p>сервис по Доставке грузов из Китая в Россию</p>
			</div>

			<p>
				<a href="tel:<?php the_field('tel', 'option'); ?>" class="header__tel"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tel.png" alt=""><?php the_field('tel', 'option'); ?></a>
				<a href="#" class="btn btn--header order_open">Заказать звонок</a>
			</p>

			<button class="hamburger" type="button">
				<span class="hamburger__box">
					<span class="hamburger__item"></span>
				</span>
			</button>

		</div>

		<nav class="nav container">
			<?php 
				wp_nav_menu( array(
					'menu'=>'menu',
					'menu_class'=>'list',
					'theme_location'=>'menu',
				) );
			?>
			<a href="tel:<?php the_field('tel', 'option'); ?>" class="nav__tel header__tel"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tel.png" alt=""><?php the_field('tel', 'option'); ?></a>
			<a href="#" class="btn btn--header order_open">Заказать звонок</a>
		</nav>
	</header>