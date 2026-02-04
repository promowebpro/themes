<footer class="footer8">
	<div class="footer8__container">
		<div class="footer8__top">
			<div class="footer8__logo"><?php the_custom_logo();?></div>
			<?php if (!empty($args->menu)) { ?>
			<nav class="footer8__nav">
				<ul class="footer8__menu">
				<?php foreach ($args->menu as $item) { ?>
					<li class="footer8__menu-item">
						<a href="<?=$item->url?>" class="footer8__menu-link"><?=$item->text?></a>
					</li>
				<? } ?>
					
				</ul>
			</nav>
			<? } ?>
		</div>
		<div class="footer8__bottom">
			<p class="footer8__copyright">© <?=date("Y")?> Все права защищены</p>
		</div>
	</div>
</footer>