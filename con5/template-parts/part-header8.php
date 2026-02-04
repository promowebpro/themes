<header class="header8">
	<div class="header8__inner">
		<div class="header8__logo-wrap">
			<a href="/" class="header8__logo"><?php the_custom_logo();?></a>
		</div>
		<?php if (!empty($args->menu)) { ?>
		<nav class="header8__nav">
			<ul class="header8__menu">
				<?php foreach ($args->menu as $item) { ?>
				<li class="header8__menu-item">
					<a href="<?=$item->url?>" class="header8__menu-link"><?=$item->text?></a>
				</li>
				<? } ?>
				
			</ul>
		</nav>
		<? } ?>
	</div>
</header>