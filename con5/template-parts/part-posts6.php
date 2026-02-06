<?php
$materials_title = !empty($args->title) ? $args->title : 'Аналитика и материалы';
$materials_text = !empty($args->text) ? $args->text : 'Короткие обзоры рынка, выдержки из закрытых исследований и аналитика по локациям.';
$materials_link = !empty($args->show_more_text) ? $args->show_more_text : 'Читать';

$materials = [];

if (!empty($args->items)) {
	$materials = $args->items;
} else {
	$posts = get_posts([
		'posts_per_page' => 3,
		'post_status' => 'publish',
	]);

	if (!empty($posts)) {
		foreach ($posts as $post_item) {
			$materials[] = (object) [
				'title' => $post_item->post_title,
				'text' => wp_trim_words($post_item->post_excerpt ? $post_item->post_excerpt : $post_item->post_content, 22),
				'url' => (object) ['url' => get_permalink($post_item->ID), 'target' => '_self', 'title' => $materials_link],
				'image' => get_the_post_thumbnail_url($post_item->ID, 'large'),
			];
		}
	}

	if (empty($materials)) {
		$materials = [
			(object) [
				'title' => 'Карта спроса: премиальные локации 2024',
				'text' => 'Какие районы показывают устойчивый рост стоимости и низкую волатильность.',
				'url' => (object) ['url' => '#consultation', 'target' => '_self', 'title' => $materials_link],
				'image' => 'https://images.unsplash.com/photo-1472220625704-91e1462799b2?w=1400',
			],
			(object) [
				'title' => 'Инвестиционный обзор: доходные резиденции',
				'text' => 'Сравнение сценариев аренды, капитализации и сроков окупаемости.',
				'url' => (object) ['url' => '#consultation', 'target' => '_self', 'title' => $materials_link],
				'image' => 'https://images.unsplash.com/photo-1460472178825-e5240623afd5?w=1400',
			],
			(object) [
				'title' => 'Private guidance: как купить объект без рисков',
				'text' => 'Пошаговая методология проверки и структурирования сделки.',
				'url' => (object) ['url' => '#consultation', 'target' => '_self', 'title' => $materials_link],
				'image' => 'https://images.unsplash.com/photo-1489515217757-5fd1be406fef?w=1400',
			],
		];
	}
}
?>

<section class="posts6" id="materials">
	<div class="posts6__container">
		<div class="posts6__intro">
			<h2 class="posts6__title"><?=$materials_title?></h2>
			<div class="posts6__description"><?=$materials_text?></div>
		</div>
		<div class="posts6__list">
			<?php foreach ($materials as $item) { ?>
				<article class="posts6__card">
					<div class="posts6__card-image" style="background-image: url('<?=$item->image?>');"></div>
					<div class="posts6__card-body">
						<?php if (!empty($item->title)) { ?>
							<h3 class="posts6__card-title"><?=$item->title?></h3>
						<?php } ?>
						<?php if (!empty($item->text)) { ?>
							<p class="posts6__card-excerpt"><?=$item->text?></p>
						<?php } ?>
						<?php if (!empty($item->url)) { ?>
							<a href="<?=$item->url->url?>" target="<?=$item->url->target?>" class="posts6__card-link"><?=$item->url->title?></a>
						<?php } ?>
					</div>
				</article>
			<?php } ?>
		</div>
	</div>
</section>
