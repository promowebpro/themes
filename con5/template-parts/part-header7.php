<header class="header7">
	<div class="header7__wrapper">
		<div class="header7__brand">
			<span class="header7__logo"><?php the_custom_logo();?></span>
		</div>
		<?php if (!empty($args->menu)) { ?>
		<button class="header7__btn onlyMobile" type="button">
			<svg
				width="24"
				height="24"
				viewBox="0 0 24 24"
				fill="none"
				xmlns="http://www.w3.org/2000/svg"
			>
				<rect
					x="3"
					y="6"
					width="18"
					height="2"
					fill="currentColor"
					rx="1"
				/>
				<rect
					x="3"
					y="11"
					width="18"
					height="2"
					fill="currentColor"
					rx="1"
				/>
				<rect
					x="3"
					y="16"
					width="18"
					height="2"
					fill="currentColor"
					rx="1"
				/>
			</svg>
		</button>

		<nav class="header7__navigation">
			<ul class="header7__list">
				<?php foreach ($args->menu as $item) { ?>
					<li class="header7__item">
						<a href="<?=$item->url?>" class="header7__link"><?=$item->text?></a>
					</li>
					<? } ?>
			</ul>
		</nav>
		<? } ?>
	</div>
</header>