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
				
				<a href="http://rktransit.ru/avtodostavka/" class="services__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item_bg1.jpg" alt="" class="services__item_bg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item1.png" alt="" class="services__item_icon">
					<h3>Автодоставка</h3>
					<p>Сборные фуры <br>к вашим услугам</p>
					<p><span>от</span> <b><?php the_field('auto'); ?></b> <span>рублей/кг.</span></p>
				</a>
				<a href="http://rktransit.ru/zhd-jekspress-dostavka/" class="services__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item_bg2.jpg" alt="" class="services__item_bg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item2.png" alt="" class="services__item_icon">
					<h3>жд доставка</h3>
					<p>Дешевле фуры, <br>быстрее корабля</p>
					<p><span>от</span> <b><?php the_field('gd'); ?></b> <span>рублей/кг.</span></p>
				</a>
				<a href="http://rktransit.ru/morskaja-dostavka/" class="services__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item_bg3.jpg" alt="" class="services__item_bg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item3.png" alt="" class="services__item_icon">
					<h3>морская доставка</h3>
					<p>Оптимально для <br>крупных грузов</p>
					<p><span>от</span> <b><?php the_field('opt'); ?></b> <span>рублей/кг.</span></p>
				</a>
				<a href="http://rktransit.ru/jekonom-dostavka/" class="services__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item_bg4.jpg" alt="" class="services__item_bg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item4.png" alt="" class="services__item_icon">
					<h3>эконом доставка</h3>
					<p>Экономичная доставка <br>из Китая</p>
				</a>

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
						<iframe width="1680" height="738" src="https://www.youtube.com/embed/v_SSkhXGq5c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div id="wrap1--two" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/chpu2.jpg" alt="">
					</div>
					<div id="wrap1--three" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/chpu3.jpg" alt="">
					</div>
					<div id="wrap1--four" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/chpu4.jpg" alt="">
					</div>
					<div id="wrap1--five" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/chpu5.jpg" alt="">
					</div>
					<div id="wrap1--six" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/chpu6.jpg" alt="">
					</div>
				</div>

				<div class="project__info">
					<h3>Закупка фрезерного чпу станка</h3>
					<ul>
						<li><span>Вес:</span><span>900 кг.</span></li>
						<li><span>Количество:</span><span>1шт</span></li>
						<li><span>Стоимость:</span><span>6000$</span></li>
					</ul>
					<ul class="project__list">
						<li><a href="#wrap1--one" class="active"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/chpu.jpg" alt=""></a></li>
						<li><a href="#wrap1--two"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/chpu2.jpg" alt=""></a></li>
						<li><a href="#wrap1--three"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/chpu3.jpg" alt=""></a></li>
						<li><a href="#wrap1--four"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/chpu4.jpg" alt=""></a></li>
						<li><a href="#wrap1--five"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/chpu5.jpg" alt=""></a></li>
						<li><a href="#wrap1--six"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/chpu6.jpg" alt=""></a></li>
					</ul>
				</div>
			</div>

			<div class="project__wrap" id="wrap2">
				<div class="project__img">
					<div id="wrap2--one" class="tabs__wrap tabs__wrap--first">
						<iframe width="1680" height="722" src="https://www.youtube.com/embed/fqGkJpuZLsg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div id="wrap2--two" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/furniture1.jpg" alt="">
					</div>
					<div id="wrap2--three" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/furniture2.jpg" alt="">
					</div>
					<div id="wrap2--four" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/furniture3.jpg" alt="">
					</div>
					<div id="wrap2--five" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/furniture4.jpg" alt="">
					</div>
				</div>

				<div class="project__info">
					<h3>Производство и доставка Офисных кресел</h3>
					<ul>
						<li><span>Вес:</span><span>8500кг</span></li>
						<li><span>Количество:</span><span>680</span></li>
					</ul>
					<ul class="project__list">
						<li><a href="#wrap2--one" class="active"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/furniture.jpg" alt=""></a></li>
						<li><a href="#wrap2--two"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/furniture1.jpg" alt=""></a></li>
						<li><a href="#wrap2--three"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/furniture2.jpg" alt=""></a></li>
						<li><a href="#wrap2--four"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/furniture3.jpg" alt=""></a></li>
						<li><a href="#wrap2--five"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/furniture4.jpg" alt=""></a></li>
					</ul>
				</div>
			</div>

			<div class="project__wrap" id="wrap3">
				<div class="project__img">
					<div id="wrap3--one" class="tabs__wrap tabs__wrap--first">
						<iframe width="1680" height="738" src="https://www.youtube.com/embed/otZEmZxKosQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div id="wrap3--two" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/laser1.jpg" alt="">
					</div>
					<div id="wrap3--three" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/laser2.webp" alt="">
					</div>
					<div id="wrap3--four" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/laser3.webp" alt="">
					</div>
				</div>

				<div class="project__info">
					<h3>Доставка Лазерного гравера</h3>
					<ul>
						<li><span>Вес:</span><span>500кг</span></li>
						<li><span>Количество:</span><span>1</span></li>
						<li><span>Стоимость:</span><span>5000$</span></li>
					</ul>
					<ul class="project__list">
						<li><a href="#wrap3--one" class="active"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/laser.webp" alt=""></a></li>
						<li><a href="#wrap3--two"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/laser1.jpg" alt=""></a></li>
						<li><a href="#wrap3--three"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/laser2.webp" alt=""></a></li>
						<li><a href="#wrap3--four"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/laser3.webp" alt=""></a></li>
					</ul>
				</div>
			</div>

			<div class="project__wrap" id="wrap4">
				<div class="project__img">
					<div id="wrap4--one" class="tabs__wrap tabs__wrap--first">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/container1.jpeg" alt="">
					</div>
					<div id="wrap4--two" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/container2.jpg" alt="">
					</div>
					<div id="wrap4--three" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/container3.jpg" alt="">
					</div>
					<div id="wrap4--four" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/container4.jpg" alt="">
					</div>
					<div id="wrap4--five" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/container5.jpg" alt="">
					</div>
					<div id="wrap4--six" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/container6.jpg" alt="">
					</div>
					<div id="wrap4--seven" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/container7.jpeg" alt="">
					</div>
				</div>

				<div class="project__info">
					<h3>Автодоставка сборного контейнера 20ф</h3>
					<ul>
						<li><span>Вес:</span><span>6400</span></li>
						<li><span>Количество:</span><span>1</span></li>
					</ul>
					<ul class="project__list">
						<li>
							<a href="#wrap4--one" class="active">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/container1.jpeg" alt="">
							</a>
						</li>
						<li>
							<a href="#wrap4--two">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/container2.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="#wrap4--three">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/container3.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="#wrap4--four">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/container4.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="#wrap4--five">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/container5.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="#wrap4--six">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/container6.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="#wrap4--seven">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/container7.jpeg" alt="">
							</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="project__wrap" id="wrap5">
				<div class="project__img">
					<div id="wrap5--one" class="tabs__wrap tabs__wrap--first">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto1.jpg" alt="">
					</div>
					<div id="wrap5--two" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto2.jpg" alt="">
					</div>
					<div id="wrap5--three" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto3.jpg" alt="">
					</div>
					<div id="wrap5--four" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto4.jpg" alt="">
					</div>
					<div id="wrap5--five" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto5.jpg" alt="">
					</div>
					<div id="wrap5--six" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto6.jpg" alt="">
					</div>
					<div id="wrap5--seven" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto7.jpg" alt="">
					</div>
					<div id="wrap5--eight" class="tabs__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto8.jpg" alt="">
					</div>
				</div>

				<div class="project__info">
					<h3>Доставка и таможенное оформление Автозапчастей</h3>
					<ul>
						<li><span>Вес:</span><span>6700</span></li>
						<li><span>Количество:</span><span>25000</span></li> 
					</ul>
					<ul class="project__list">
						<li>
							<a href="#wrap5--one" class="active">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto1.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="#wrap5--two">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto2.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="#wrap5--three">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto3.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="#wrap5--four">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto4.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="#wrap5--five">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto5.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="#wrap5--six">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto6.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="#wrap5--seven">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto7.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="#wrap5--eight">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto8.jpg" alt="">
							</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="project__slider swiper-container">
				<div class="swiper-wrapper">
					<a href="#wrap1" class="project__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/chpu.jpg" alt="">
						<p>Закупка и доставка <br>Фрезерного ЧПУ станка</p>
					</a>
					<a href="#wrap2" class="project__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/furniture.jpg" alt="">
						<p>Производство и доставка Офисных кресел</p>
					</a>
					<a href="#wrap3" class="project__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/laser3.webp" alt="">
						<p>Доставка Лазерного гравера</p>
					</a>
					<a href="#wrap4" class="project__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/container1.jpeg" alt="">
						<p>Автодоставка сборного контейнера 20ф</p>
					</a>
					<a href="#wrap5" class="project__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/auto1.jpg" alt="">
						<p>Доставка и таможенное оформление Автозапчастей</p>
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

					
			<?php if( have_rows('reviews') ): ?>

				<div class="reviews__slider swiper-container">
					<div class="swiper-wrapper">

					<?php while( have_rows('reviews') ): the_row(); 
						$video = get_sub_field('video');
					?>

						<div class="reviews__slide swiper-slide">
							<?php echo $video; ?>
						</div>

					<?php endwhile; ?>

					</div>
					<!-- Add Scrollbar -->
					<div class="reviews__scrollbar swiper-scrollbar"></div>
				</div>
			<?php endif; ?>


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
