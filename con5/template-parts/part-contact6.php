<?php
$cta_title = !empty($args->title) ? $args->title : 'Запланируйте приватную консультацию';
$cta_text = !empty($args->text) ? $args->text : 'Мы обсудим цели, риски и подберём оптимальную стратегию сделки в комфортном для вас формате.';
?>

<section class="contact6" id="consultation">
	<div class="contact6__container">
		<div class="contact6__content">
			<h2 class="contact6__title"><?=$cta_title?></h2>
			<div class="contact6__description"><?=$cta_text?></div>
		</div>
		<a href="mailto:concierge@estate-advisory.ru" class="button button--light contact6__button">
			Оставить заявку
		</a>
	</div>
</section>
