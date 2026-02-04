
<header class="header6">
	<div class="header6__container">
		<a href="/" class="header6__logo"><?php the_custom_logo();?></a>
		<?php if (!empty($args->menu)) { ?>
		<button class="header6__burger" aria-label="Меню">
			<span class="header6__burger-line"></span>
			<span class="header6__burger-line"></span>
			<span class="header6__burger-line"></span>
		</button>
		<nav class="header6__nav">
			<ul class="header6__menu">
				<?php foreach ($args->menu as $item) { ?>
				<li class="header6__menu-item">
					<a href="<?=$item->url?>" class="header6__menu-link"><?=$item->text?></a>
				</li>

				
				<? } ?>
			</ul>
		</nav>
		<? } ?>
	</div>
</header>