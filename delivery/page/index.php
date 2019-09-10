<?php
	/**
		* Template name: index
	*/
 ?>

<?php get_header(); ?>

	<section class="hero">
		<div class="container">
			
			<h1>Доставим Ваш груз из Китая </h1>
			<p class="hero__sub-title">От 30 кг и от 2-х дней с прохождением таможни, <br>включая все необходимые документы</p>
			<a href="#" class="btn order_open">получить консультацию</a>

		</div>
	</section>

	<section class="services" id="services">
		<div class="container">
			<h2>Услуги</h2>
			<p>В нашем сервисе мы акцентируем внимание на качественной доставке, поэтому обьединили все в четыре подразделения.</p>
			<p class="services__sub-title">Добро пожаловать в Китай!</p>

			<div class="services__list">
				
				<div class="services__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item_bg1.jpg" alt="" class="services__item_bg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item1.png" alt="" class="services__item_icon">
					<h3>Автодоставка</h3>
					<p>Сборные фуры <br>к вашим услугам</p>
					<p><span>от</span> <b>250</b> <span>рублей/кг.</span></p>
				</div>
				<div class="services__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item_bg2.jpg" alt="" class="services__item_bg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item2.png" alt="" class="services__item_icon">
					<h3>жд доставка</h3>
					<p>Дешевле фуры, <br>быстрее корабля</p>
					<p><span>от</span> <b>150</b> <span>рублей/кг.</span></p>
				</div>
				<div class="services__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item_bg3.jpg" alt="" class="services__item_bg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item3.png" alt="" class="services__item_icon">
					<h3>морская доставка</h3>
					<p>Оптимально для <br>крупных грузов</p>
					<p><span>от</span> <b>70</b> <span>рублей/кг.</span></p>
				</div>
				<div class="services__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item_bg4.jpg" alt="" class="services__item_bg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item4.png" alt="" class="services__item_icon">
					<h3>эконом доставка</h3>
					<p>Экономичная доставка <br>из Китая</p>
				</div>

			</div>
		</div>
	</section>

	<section class="advantages">
		<div class="container">

			<h2>Наши преимущества</h2>
			<p class="advantages__sub-title">Мы работаем не со всеми, мы делаем качественно.</p>

			<div class="advantages__list">
				
				<div class="advantages__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages1.jpg" alt="">
					<h3>надежность</h3>
					<p>Заключаем <br>договор <br>на поставку</p>
				</div>
				
				<div class="advantages__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages2.jpg" alt="">
					<h3>точно в срок</h3>
					<p>За прошлый год 47% грузов были доставлены раньше срока. За каждый день просрочки выплатим пеню</p>
				</div>

				<div class="advantages__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages3.jpg" alt="">
					<h3>контроль качества</h3>
					<p>Несем ответственность за качество доставки</p>
				</div>

				<div class="advantages__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages4.jpg" alt="">
					<h3>юридическая безопасность</h3>
					<p>С китайскими поставщиками мы заключаем договоры поставок по всем нормам местного и международного права. Мы работаем в одном правовом поле, что сводит ваши риски практически к нулю</p>
				</div>

				<div class="advantages__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages5.jpg" alt="">
					<h3>работа команды</h3>
					<p>Вашим заказом будут заниматься 2 менеджера, 1 логист, 2 упаковщика, 2 таможенных брокера, 1 экспедитор и несколько грузчиков и водителей</p>
				</div>

				<div class="advantages__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages6.jpg" alt="">
					<h3>таможенное оформление</h3>
					<p>Мы заявляем товар в таможенные органы под его кодом ТН ВЭД и оплачиваем все таможенные сборы,что гарантирует получение товара в России без конфискации и рисков на таможне</p>
				</div>

			</div>

		</div>
	</section>

	<?php get_template_part( 'parts/value' ); ?>

	<section class="project tabs" id="project">
		<div class="container">

			<h2>наши проекты</h2>

			<p class="project__sub-title">За годы работы мы принимали участие в проектах разной сложности реализации. <br>Мы ценим доверие- это дорогого стоит.</p>

			<div class="project__wrap" id="wrap1">
				<div class="project__img">
					<div id="wrap1--one" class="tabs__wrap tabs__wrap--first">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/project--item1.jpg" alt="">
					</div>
					<div id="wrap1--two" class="tabs__wrap">
						<iframe width="1663" height="738" src="https://www.youtube.com/embed/g0O8gMe9F7w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div id="wrap1--three" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/project--item1.jpg" alt="">
					</div>
					<div id="wrap1--four" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/project--item1.jpg" alt="">
					</div>
					<div id="wrap1--five" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/project--item1.jpg" alt="">
					</div>
				</div>

				<div class="project__info">
					<h3>Закупка фрезерного чпу станка</h3>
					<ul>
						<li><span>Вес:</span><span>900 кг.</span></li>
						<li><span>Количество:</span><span>1шт</span></li>
						<li><span>Стоимость:</span><span>36 000 рублей</span></li>
					</ul>
					<ul class="project__list">
						<li><a href="#wrap1--one" class="active"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs--min1.jpg" alt=""></a></li>
						<li><a href="#wrap1--two"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs--min1.jpg" alt=""></a></li>
						<li><a href="#wrap1--three"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs--min1.jpg" alt=""></a></li>
						<li><a href="#wrap1--four"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs--min1.jpg" alt=""></a></li>
						<li><a href="#wrap1--five"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs--min1.jpg" alt=""></a></li>
					</ul>
				</div>
			</div>

			<div class="project__wrap" id="wrap2">
				<div class="project__img">
					<div id="wrap2--one" class="tabs__wrap tabs__wrap--first">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs1.jpg" alt="">
					</div>
					<div id="wrap2--two" class="tabs__wrap">
						<iframe width="1663" height="738" src="https://www.youtube.com/embed/g0O8gMe9F7w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div id="wrap2--three" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs1.jpg" alt="">
					</div>
					<div id="wrap2--four" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs1.jpg" alt="">
					</div>
					<div id="wrap2--five" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs1.jpg" alt="">
					</div>
				</div>

				<div class="project__info">
					<h3>Закупка фрезерного чпу станка</h3>
					<ul>
						<li><span>Вес:</span><span>900 кг.</span></li>
						<li><span>Количество:</span><span>1шт</span></li>
						<li><span>Стоимость:</span><span>36 000 рублей</span></li>
					</ul>
					<ul class="project__list">
						<li><a href="#wrap2--one" class="active"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs--min1.jpg" alt=""></a></li>
						<li><a href="#wrap2--two"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs--min1.jpg" alt=""></a></li>
						<li><a href="#wrap2--three"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs--min1.jpg" alt=""></a></li>
						<li><a href="#wrap2--four"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs--min1.jpg" alt=""></a></li>
						<li><a href="#wrap2--five"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs--min1.jpg" alt=""></a></li>
					</ul>
				</div>
			</div>

			<div class="project__slider swiper-container">
				<div class="swiper-wrapper">
					<a href="#wrap1" class="project__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/project--item1.jpg" alt="">
						<p>Закупка <br>фрезерного <br>чпу станка</p>
					</a>
					<a href="#wrap2" class="project__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/project--item2.jpg" alt="">
						<p>Закупка <br>фрезерного <br>чпу станка</p>
					</a>
					<a href="#" class="project__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/project--item1.jpg" alt="">
						<p>Закупка <br>фрезерного <br>чпу станка</p>
					</a>
					<a href="#" class="project__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/project--item2.jpg" alt="">
						<p>Закупка <br>фрезерного <br>чпу станка</p>
					</a>
					<a href="#" class="project__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/project--item1.jpg" alt="">
						<p>Закупка <br>фрезерного <br>чпу станка</p>
					</a>
					<a href="#" class="project__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/project--item2.jpg" alt="">
						<p>Закупка <br>фрезерного <br>чпу станка</p>
					</a>
					<a href="#" class="project__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/project--item1.jpg" alt="">
						<p>Закупка <br>фрезерного <br>чпу станка</p>
					</a>
					<a href="#" class="project__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/project--item2.jpg" alt="">
						<p>Закупка <br>фрезерного <br>чпу станка</p>
					</a>
				</div>
				<!-- Add Scrollbar -->
				<div class="project__scrollbar swiper-scrollbar"></div>
			</div>

		</div>
	</section>

	<section class="reviews">
		<div class="container">

			<h2>посмотрите видео отзывы о нас</h2>

			<div class="reviews__slider swiper-container">
				<div class="swiper-wrapper">
					<div class="reviews__slide swiper-slide">
						<iframe width="1663" height="738" src="https://www.youtube.com/embed/g0O8gMe9F7w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="reviews__slide swiper-slide">
						<iframe width="1663" height="738" src="https://www.youtube.com/embed/g0O8gMe9F7w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="reviews__slide swiper-slide">
						<iframe width="1663" height="738" src="https://www.youtube.com/embed/g0O8gMe9F7w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="reviews__slide swiper-slide">
						<iframe width="1663" height="738" src="https://www.youtube.com/embed/g0O8gMe9F7w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="reviews__slide swiper-slide">
						<iframe width="1663" height="738" src="https://www.youtube.com/embed/g0O8gMe9F7w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="reviews__slide swiper-slide">
						<iframe width="1663" height="738" src="https://www.youtube.com/embed/g0O8gMe9F7w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
				<!-- Add Scrollbar -->
				<div class="reviews__scrollbar swiper-scrollbar"></div>
			</div>

		</div>
	</section>

	<section class="about" id="about">
		<div class="container">

			<h2>о нас</h2>

			<div class="about__list">
				
				<div class="about__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about1.jpg" alt="">
					<p class="about__number">3</p>
					<p>года успешной работы</p>
				</div>
				
				<div class="about__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about2.jpg" alt="">
					<p class="about__number">7000<span>+</span></p>
					<p>тонн груза доставлено</p>
				</div>

				<div class="about__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about3.jpg" alt="">
					<p class="about__number">1000<span>+</span></p>
					<p>довольных клиентов</p>
				</div>

				<div class="about__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about4.jpg" alt="">
					<p class="about__number"><span>более</span> 50 <span>км.</span></p>
					<p>использованного скотча</p>
				</div>

			</div>

			<h3>дарим 15% скидку постоянным клиентам за долгосрочное сотрудничество</h3>

		</div>
	</section>

<?php get_footer(); ?>
