<?php
$trust_stats = [
	['value' => '12+', 'label' => 'лет в премиальном сегменте рынка недвижимости'],
	['value' => '240+', 'label' => 'сделок сопровождения с полной юридической защитой'],
	['value' => '18%', 'label' => 'средний рост стоимости инвестиций клиентов'],
	['value' => '100%', 'label' => 'конфиденциальность и закрытый формат работы'],
];

$service_items = !empty($args->items) ? $args->items : [
	(object) ['title' => 'Сопровождение сделок', 'text' => 'Полный цикл: подбор, переговоры, due diligence и защита интересов клиента.', 'url' => (object) ['url' => '#consultation', 'target' => '_self', 'title' => 'Подробнее']],
	(object) ['title' => 'Инвестиционный консалтинг', 'text' => 'Стратегии входа в рынок, финансовое моделирование и сценарии выхода.', 'url' => (object) ['url' => '#materials', 'target' => '_self', 'title' => 'Подробнее']],
	(object) ['title' => 'Private search', 'text' => 'Доступ к закрытым объектам, работа с собственниками и девелоперами.', 'url' => (object) ['url' => '#services', 'target' => '_self', 'title' => 'Подробнее']],
	(object) ['title' => 'Юридическая экспертиза', 'text' => 'Проверка рисков, структурирование сделки и сопровождение документов.', 'url' => (object) ['url' => '#consultation', 'target' => '_self', 'title' => 'Подробнее']],
];

$why_items = [
	'Выстроенная сеть партнёров и доступ к off-market предложениям.',
	'Финансовая и юридическая экспертиза в каждой транзакции.',
	'Ориентир на долгосрочную стоимость и инвестиционную логику.',
	'Прозрачные условия, индивидуальная стратегия работы.',
	'Сервис уровня private banking и 24/7 коммуникация.',
];
?>

<section class="features6" id="services">
	<div class="features6__container">
		<div class="features6__trust">
			<?php foreach ($trust_stats as $stat) { ?>
				<div class="features6__trust-item">
					<div class="features6__trust-value"><?=$stat['value']?></div>
					<div class="features6__trust-label"><?=$stat['label']?></div>
				</div>
			<?php } ?>
		</div>

		<div class="features6__intro">
			<h2 class="features6__title">Услуги премиального уровня</h2>
			<div class="features6__description">
				Сосредоточены на закрытых сделках и инвестиционных решениях с прогнозируемым результатом.
			</div>
		</div>

		<div class="features6__list">
			<?php foreach ($service_items as $item) { ?>
				<article class="features6__item">
					<div class="features6__item-icon">
						<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect x="2" y="2" width="24" height="24" rx="6" stroke="currentColor" stroke-width="1.5"/>
							<path d="M9 14.5L12.5 18L19 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
					<?php if (!empty($item->title)) { ?>
						<h3 class="features6__item-title"><?=$item->title?></h3>
					<?php } ?>
					<?php if (!empty($item->text)) { ?>
						<div class="features6__item-content">
							<?=$item->text?>
						</div>
					<?php } ?>
					<?php if (!empty($item->url)) { ?>
						<a href="<?=$item->url->url?>" target="<?=$item->url->target?>" class="features6__item-link">
							<?=$item->url->title?>
						</a>
					<?php } ?>
				</article>
			<?php } ?>
		</div>

		<div class="features6__why">
			<div class="features6__why-intro">
				<h2 class="features6__title">Почему выбирают нас</h2>
				<div class="features6__description">
					Мы работаем как private real estate advisory: конфиденциально, спокойно и ориентируясь на долгосрочные отношения.
				</div>
			</div>
			<ul class="features6__why-list">
				<?php foreach ($why_items as $item) { ?>
					<li class="features6__why-item">
						<span class="features6__why-icon">●</span>
						<span><?=$item?></span>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</section>
