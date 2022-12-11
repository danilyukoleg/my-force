<?php
require_once("head.php");
require_once("header.php");

require_once("functions.php");
?>

<main class="main">
	<section class="promo">
		<div class="container">
			<div class="promo__wrapper">
				<h1 class="promo__title">Арбитражное управление при банкротстве физических и юридических лиц</h1>
				<p class="promo__text">Более 60 арбитражных управляющих в системе! Являемся членами совета СРО!</p>
				<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
					Узнать подробнее
				</button>
			</div>
		</div>
		<img src="img/promo-people.png" alt="Фоновая картинка бизнессмена" class="promo__img">
	</section>

	<section class="about">
		<div class="container">
			<div class="row">

				<div class="col-md-5 col-12">
					<h2 class="about__title">О нас</h2>
					<p class="about__subtitle">
						<span>Партнерская программа MYFORCE — </span>
						делегируйте арбитражное управление своих банкротов профессионалам
						с гарантией на снятие прожиточных минимумов в срок
					</p>
				</div>

				<div class="col-md-6 col-12  offset-md-1">
					<ul class="about__list">
						<li class="about__item">
							<div class="about__item-img">
								<img src="img/icons/about-1.png" alt="Бесплатные консультации 
и аудит сложных банкротов">
							</div>
							<p class="about__text">Бесплатные консультации
								и аудит сложных банкротов</p>
						</li>
						<li class="about__item">
							<div class="about__item-img">
								<img src="img/icons/about-2.png" alt="Гарантия на арбитражное управление — 100% банкротим до конца">
							</div>
							<p class="about__text">Гарантия на арбитражное управление — 100% банкротим до конца</p>
						</li>
						<li class="about__item">
							<div class="about__item-img">
								<img src="img/icons/about-3.png" alt="Гарантия на цену — никогда не увеличиваем стоимость услуг">
							</div>
							<p class="about__text">Гарантия на цену — никогда не увеличиваем стоимость услуг</p>
						</li>
						<li class="about__item">
							<div class="about__item-img">
								<img src="img/icons/about-4.png" alt="База знаний из более чем 100 материалов по банкротству
и списанию долгов">
							</div>
							<p class="about__text">База знаний из более чем 100 материалов по банкротству
								и списанию долгов</p>
						</li>
					</ul>
				</div>

				<div class="row mt-100">
					<div class="col-lg-6 col-md-12">
						<div class="about__img">
							<img src="img/about-img.svg" alt="Партнерская программа MYFORCE " class="about__img">
						</div>
					</div>
					<div class="col-lg-5 col-md-12 offset-lg-1 offset-md-0">
						<ul class="about-benefits">
							<li class="about-benefits__item">
								<h3 class="about-benefits__title">6 лет успешной работы</h3>
								<p class="about-benefits__text">Каждый день мы помогаем нашим партнерам заключать больше договоров по банкротству.</p>
							</li>
							<li class="about-benefits__item">
								<h3 class="about-benefits__title">95 партнеров по всей стране</h3>
								<p class="about-benefits__text">Мы хотим, чтобы наши партнеры были лидерами
									в нише банкротства в своем регионе. Для этого мы обучаем партнеров технологиям эффективных продаж, продвижения, маркетинга, оптимизации бизнес-процессов и т. д.</p>
							</li>
							<li class="about-benefits__item">
								<h3 class="about-benefits__title">Более 9 000 успешных дел по банкротству</h3>
								<p class="about-benefits__text">Мы работаем как с простыми проектами, так и многосложными сценариями проведения процедуры. Наша команда освободила от долгов более 9000 граждан по всей стране.</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="package">
		<div class="container">
			<h2 class="package__title">Пакеты</h2>

			<div class="package_fl">
				<?php foreach ($packageArrayDb as $item) : ?>
					<div class="package__block">
						<h4 class="package__subtext">пакет</h4>

						<h5 class="package__subtitle"><?= $item['title'] ?></h5>
						<p class="package__text">Что входит?</p>

						<ul class="package__list">
							<?php foreach ($item['included'] as $included) : ?>
								<li class="package__item"><?= $included ?></li>
							<?php endforeach; ?>
						</ul>

						<p class="package__text">Арбитражное управление</p>

						<ul class="package__list">
							<?php foreach ($item['arbitration'] as $arbitration) : ?>
								<li class="package__item"><?= $arbitration ?></li>
							<?php endforeach; ?>
						</ul>

						<p class="package__text">Команда</p>

						<ul class="package__list">
							<?php foreach ($item['tieam'] as $tieam) : ?>
								<li class="package__item"><?= $tieam ?></li>
							<?php endforeach; ?>
						</ul>

						<div class="package__wrap">
							<div class="price">
								<?php if (isset($item['price'])) : ?>
									<p><?= $item['price'] . ' ₽' ?> <span>
											/ 1 банкрот
										</span></p>
								<?php endif; ?>
							</div>


							<div class="additionally">
								<?php foreach ($item['additionally'] as $additionally) : ?>
									<p><?= $additionally ?></p>
								<?php endforeach; ?>
							</div>

							<div class="package__footer">
								<p class="package__descr">узнайте больше о пакете</p>
								<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
									Узнать подробнее
								</button>
							</div>


						</div>
					</div>
				<?php endforeach; ?>

			</div>

			<p class="services__text">
				* В случае не передачи количества оплаченных анкет в текущем месяце , анкеты могут передаваться в последующих, по договорённости с исполнителем.
			</p>
		</div>
	</section>

	<section class="services">
		<div class="container">
			<h2 class="services__title">УСЛУГИ АРБИТРАЖНЫХ УПРАВЛЯЮЩИХ</h2>
			<p class="services__subtitle">Вы можете выбрать отдельную услугу</p>
			<div class="package_fl">
				<?php foreach ($servicesArrayDb as $item) : ?>
					<div class="package__block">

						<h5 class="package__subtitle package__subtitle_sm"><?= $item['title'] ?></h5>
						<p class="package__text">Что получаем?</p>

						<ul class="package__list">
							<?php foreach ($item['included'] as $included) : ?>
								<li class="package__item"><?= $included ?></li>
							<?php endforeach; ?>

							<?php if (isset($item['gift'])) : ?>
								<li class="package__item package__item_gift"><?= $item['gift'] ?></li>
							<?php endif; ?>

						</ul>

						<?php foreach ($item['law'] as $law) : ?>
							<div class="services__document"><?= $law ?></div>
						<?php endforeach; ?>

						<div class="package__wrap">
							<div class="price">
								<?php if (isset($item['price'])) : ?>
									<p><?= $item['price'] . ' ₽' ?> <span>
											/ 1 банкрот
										</span></p>
								<?php endif; ?>
							</div>




							<div class="package__footer">
								<p class="package__descr">узнайте больше о пакете</p>
								<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
									Узнать подробнее
								</button>
							</div>


						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="successful">
		<div class="container">
			<h2 class="successful__title">Успешные дела</h2>
			<p class="successful__subtitle">Гарантрируем 100% результат</p>

			<ul class="successful__list">
				<li class="successful__item">
					<div class="successfult__wrap">
						<div>
							<p class="successful__title_text">Регион</p>
							<p class="successful__subtitle_text">Ростовская область</p>
						</div>
						<div>
							<p class="successful__title_text">Номер дела</p>
							<p class="successful__subtitle_text">А53-44457</p>
						</div>
						<div>
							<p class="successful__title_text">Списано</p>
							<p class="successful__subtitle_text">2 197 602 р</p>
						</div>
					</div>
					<div class="successful__img">
						<img src="img/document/document.jpg" alt="Ростовская область">
					</div>
				</li>

				<li class="successful__item">
					<div class="successfult__wrap">
						<div>
							<p class="successful__title_text">Регион</p>
							<p class="successful__subtitle_text">Иркутская
								область</p>
						</div>
						<div>
							<p class="successful__title_text">Номер дела</p>
							<p class="successful__subtitle_text">А53-44457</p>
						</div>
						<div>
							<p class="successful__title_text">Списано</p>
							<p class="successful__subtitle_text">394 776 р</p>
						</div>
					</div>
					<div class="successful__img">
						<img src="img/document/document.jpg" alt="">
					</div>
				</li>

				<li class="successful__item">
					<div class="successfult__wrap">
						<div>
							<p class="successful__title_text">Регион</p>
							<p class="successful__subtitle_text">Красноярский край </p>
						</div>
						<div>
							<p class="successful__title_text">Номер дела</p>
							<p class="successful__subtitle_text">А53-44457</p>
						</div>
						<div>
							<p class="successful__title_text">Списано</p>
							<p class="successful__subtitle_text">366 616 р</p>
						</div>
					</div>
					<div class="successful__img">
						<img src="img/document/document.jpg" alt="Красноярский край">
					</div>
				</li>

				<li class="successful__item">
					<div class="successfult__wrap">
						<div>
							<p class="successful__title_text">Регион</p>
							<p class="successful__subtitle_text">Новосибирская область</p>
						</div>
						<div>
							<p class="successful__title_text">Номер дела</p>
							<p class="successful__subtitle_text">А53-44457</p>
						</div>
						<div>
							<p class="successful__title_text">Списано</p>
							<p class="successful__subtitle_text">1 796 823 р</p>
						</div>
					</div>
					<div class="successful__img">
						<img src="img/document/document.jpg" alt="Новосибирская область">
					</div>
				</li>

				<li class="successful__item">
					<div class="successfult__wrap">
						<div>
							<p class="successful__title_text">Регион</p>
							<p class="successful__subtitle_text">Иркутская
								область</p>
						</div>
						<div>
							<p class="successful__title_text">Номер дела</p>
							<p class="successful__subtitle_text">А53-44457</p>
						</div>
						<div>
							<p class="successful__title_text">Списано</p>
							<p class="successful__subtitle_text">1 493 681 р</p>
						</div>
					</div>
					<div class="successful__img">
						<img src="img/document/document.jpg" alt="Иркутская
								область">
					</div>
				</li>

				<li class="successful__item">
					<div class="successfult__wrap">
						<div>
							<p class="successful__title_text">Регион</p>
							<p class="successful__subtitle_text">Пензенская область</p>
						</div>
						<div>
							<p class="successful__title_text">Номер дела</p>
							<p class="successful__subtitle_text">А53-44457</p>
						</div>
						<div>
							<p class="successful__title_text">Списано</p>
							<p class="successful__subtitle_text">546 975 р р</p>
						</div>
					</div>
					<div class="successful__img">
						<img src="img/document/document.jpg" alt="Пензенская область">
					</div>
				</li>
			</ul>
		</div>
	</section>
</main>

<?php
require_once("footer.php");
?>