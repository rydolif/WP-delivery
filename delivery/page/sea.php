<?php
	/**
		* Template name: sea
	*/
 ?>

<?php get_header(); ?>

	<section class="hero sea--hero">
		<div class="container">
			
			<h1>Доставим Ваш груз из Китая точно в срок</h1>
			<p class="hero__sub-title">От 30 кг и от 2-х дней с прохождением таможни, <br>включая все необходимые документы</p>
			<a href="#" class="btn order_open">получить консультацию</a>

		</div>
	</section>

	<section class="sea--content">
		<div class="container">

			<h2>морская доставка</h2>

			<p class="sea--content__sub-title">
				Мы предложим вам лучший маршрут исходя из вашего бюджета. Таможенное оформление
				<br>и подготовку разрешительных документов мы берем на себя. Контейнерные перевозки из Китая
				<br>в Россию — это надежно и выгодно для вас!
			</p>
			
			<div class="sea--content__row">
				<div class="sea--content__col">
					<p>
						Доставку грузов морем можно осуществлять небольшими партиями (LCL- сборные грузы), целыми контейнерами (FCL) и контейнерными партиями.
					</p>
					<p>
						Доставка  LCL  используется для небольшого количества грузов  от <b>1 м.куб</b>. При этом в один контейнер загружаются грузы нескольких получателей. Сроки доставки сборного контейнера зависят от скорости формирования контейнера, но не менее 50 дней. По прибытию сборного контейнера в порт производится таможенная очистка груза, т.е. его легализация. Данный способ доставки пользуется повышенным спросом у предпринимателей и частных лиц.
					</p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sea--img1.jpg" alt="">
				</div>
				<div class="sea--content__col">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sea--img2.jpg" alt="">
					<p>
						<b>Морской фрахт FCL</b> (Full Container Load - полный контейнерный груз).
					</p>
					<p>
						Используют при доставке груза объёмом от <b>30 м.куб. и/или негабаритного груза.</b>
						<br>Для  данного вида доставки  необходимо зафрахтовать контейнер, т.е. купить исключительное право на использование грузового морского контейнера, то есть в данной схеме 1 отправитель = 1 получатель.
					</p>
					<p>
						Доставка морем FCL часто используется при перевозке грузов в рамках крупных логистических проектов.
					</p>
					<a href="#" class="btn order_open">оставить заявку</a>
				</div>
			</div>

			<div class="sea--content__list">
				
				<div class="sea--content__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sea--icon1.jpg" alt="">
					<h3>Перевозка сборного груза с таможенным оформлением</h3>
					<p>
						Ваш персональный менеджер предоставит вам готовую ставку с учетом всех расходов, в том числе по разрешительной документации и таможенным платежам
					</p>
				</div>
				<div class="sea--content__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sea--icon2.jpg" alt="">
					<h3>Доставка в любой <br>регион России</h3>
					<p>
						После прохождения таможни контейнер отгружается на платформу или автоприцеп и отправляется в любой регион России
					</p>
				</div>
				<div class="sea--content__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sea--icon3.jpg" alt="">
					<h3>Неизменность <br>цены</h3>
					<p>
						Слишком дешевая доставка товаров из Китая на рынке может скрывать подводные камни. С нами вы получаете окончательную сумму к оплате
					</p>
				</div>

			</div>

		</div>
	</section>

	<?php get_template_part( 'parts/value' ); ?>

<?php get_footer(); ?>
