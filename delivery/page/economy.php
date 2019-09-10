<?php
	/**
		* Template name: economy
	*/
 ?>

<?php get_header(); ?>

	<section class="hero hero--economy">
		<div class="container">
			
			<h1>Доставим Ваш груз из Китая точно в срок</h1>
			<p class="hero__sub-title">От 30 кг и от 2-х дней с прохождением таможни, <br>включая все необходимые документы</p>
			<a href="#" class="btn order_open">получить консультацию</a>

		</div>
	</section>

	<section class="sea--content">
		<div class="container">

			<h2>Эконом-доставка</h2>
			
			<div class="sea--content__row">
				<div class="sea--content__col">
					<p>
						Эконом-доставка из Китая — оптимальный выбор для тех у кого отложен процесс сбыта или производства товаров. Когда не нужны срочные поставки из Китая, а все хорошо спланировано и рассчитано, а так же для пробных закупок, тяжелых и недорогих, а также хрупких товаров, требующих бережной транспортировки.
					</p>
					<p>
						Данный способ доставки является оптимальным вариантом отправки груза, не поместившегося в целый контейнер.
					</p>
					<ul>
						<li><b>Низкая стоиомость</b> - от 60 рублей/кг.</li>
						<li><b>Минимальный сборный груз</b> - 100кг.</li>
						<li><b>Частые отправки </b> - до 4 раз в месяц.</li>
					</ul>
					
					<a href="#" class="btn order_open">оставить заявку</a>
				</div>
				<div class="sea--content__col">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sea--img4.jpg" alt="">
				</div>
			</div>

			<div class="sea--content__list">
				
				<div class="sea--content__item sea--content__item--two">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sea--icon3.jpg" alt="">
					<h3>Неизменность <br>цены </h3>
					<p>
						В процессе работы мы не повышаем цены. Вы оплачивате только ту сумму, которая обозначена в Договоре; , в том числе по разрешительной документации и таможенным платежам
					</p>
				</div>
				<div class="sea--content__item sea--content__item--two">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages7.jpg" alt="">
					<h3>Доставка на склад <br>в москве</h3>
					<p>
						После прохождения таможни ваш груз будет доставлен на наш склад в Москве
					</p>
				</div>
				<div class="sea--content__item sea--content__item--two">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages8.jpg" alt="">
					<h3>Любой ассортимент груза</h3>
					<p>
						Подходит для грузов любого объема. Эконом - доставка подходит, как для малогабаритных, так и для крупногабаритных грузов
					</p>
				</div>
				<div class="sea--content__item sea--content__item--two">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages2.jpg" alt="">
					<h3>Регулярные <br>отправки</h3>
					<p>
						Собираем один сборный контейнер в неделю, что позволит вам выбрать наиболее удобную дату отправки товара для оптимизации сроков доставки
					</p>
				</div>

			</div>

		</div>
	</section>

	<?php get_template_part( 'parts/value' ); ?>

<?php get_footer(); ?>