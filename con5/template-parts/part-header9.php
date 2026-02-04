<header class="header9">
	<div class="header9__container">
		<a href="/" class="header9__brand"><?php the_custom_logo();?></a>
		<?php if (!empty($args->menu)) { ?>
		<nav class="header9__nav">
			<ul class="header9__links">
				<?php foreach ($args->menu as $item) { ?>
					<li class="header9__link-item">
						<a href="<?=$item->url?>" class="header9__link"><?=$item->text?></a>
						
					</li>
				<? } ?>
			</ul>
		</nav>
		<? } ?>
	</div>
</header>