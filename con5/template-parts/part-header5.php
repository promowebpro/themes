<header class="header5">
	<div class="header5__container">
		<div class="header5__logo"><?php the_custom_logo();?></div>
		<?php if (!empty($args->menu)) { ?>
		<nav class="header5__nav">
			<ul class="header5__menu">
				<?php foreach ($args->menu as $item) { ?>
				<li class="header5__menu-item">
					<a href="<?=$item->url?>" class="header5__menu-link"><?=$item->text?></a>
					
				</li>
				<?php } ?>
				
			</ul>
		</nav>
		<?php } ?>
		<button class="onlyMobile header5__button" type="button">
			<svg
				class="header5__buttonIcon header5__buttonIcon--burger"
				width="24"
				height="24"
				viewBox="0 0 24 24"
				fill="none"
				xmlns="http://www.w3.org/2000/svg"
			>
				<rect x="3" y="6" width="18" height="2" fill="#000000" rx="1" />
				<rect
					x="3"
					y="11"
					width="18"
					height="2"
					fill="#000000"
					rx="1"
				/>
				<rect
					x="3"
					y="16"
					width="18"
					height="2"
					fill="#000000"
					rx="1"
				/>
			</svg>
			<svg
				class="header5__buttonIcon header5__buttonIcon--cross"
				width="24"
				height="24"
				viewBox="0 0 24 24"
				fill="none"
				xmlns="http://www.w3.org/2000/svg"
			>
				<path
					d="M6 6L18 18M6 18L18 6"
					stroke="#000000"
					stroke-width="2"
					stroke-linecap="round"
				/>
			</svg>
		</button>
	</div>
</header>