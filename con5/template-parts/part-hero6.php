<?php
$hero_title = !empty($args->title) ? $args->title : 'Премиум сопровождение сделок<br>и инвестиции в недвижимость';
$hero_text = !empty($args->text) ? $args->text : 'Конфиденциальный подбор объектов, юридическая защита и аналитика рынка для частных клиентов и инвесторов.';
?>
<section class="hero6">
	<div class="hero6__container">
		<div class="hero6__content">
			<h1 class="hero6__title"><?=$hero_title?></h1>
			<div class="hero6__text">
				<?=$hero_text?>
			</div>
			<div class="hero6__actions">
				<a href="#consultation" class="button button--primary">Получить консультацию</a>
				<a href="#services" class="button button--ghost">Подобрать объект</a>
			</div>
		</div>
		<div
			class="hero6__image"
			style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1600');"
		></div>
	</div>
</section>
