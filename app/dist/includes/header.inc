<div id="output"></div>
<nav>
	<ul class="default-width ul-reset">
		<li><a href="/<?=$path?>index.php">Home</a></li>
		<li class="droppable">
			<a href="/<?=$path?>base/index.php">Base</a>
			<div class="mega-menu"><?php include('<?=$path?>includes/base.inc'); ?></div>
		</li>
		<li class="droppable">
			<a href="/<?=$path?>layouts/index.php">Layouts</a>
			<div class="mega-menu"><?php include('<?=$path?>includes/layouts.inc'); ?></div>
		</li>
		<li class="droppable">
			<a href="/<?=$path?>modules/index.php">Modules</a>
			<div class="mega-menu"><?php include('<?=$path?>includes/modules.inc'); ?></div>
		</li>
		<li class="droppable">
			<a href="/<?=$path?>themes/index.php">Themes</a>
			<div class="mega-menu"><?php include('<?=$path?>includes/themes.inc'); ?></div>
		</li>
		<li class="droppable">
			<a href="/<?=$path?>states/index.php">states</a>
			<div class="mega-menu"><?php include('<?=$path?>includes/states.inc'); ?></div>
		</li>
		<li class="droppable">
			<a href="/<?=$path?>templates/index.php">Templates</a>
			<div class="mega-menu"><?php include('<?=$path?>includes/templates.inc'); ?></div>
		</li>
		<!-- .droppable -->
	</ul>
	<!-- .default-width .ul-reset -->
</nav>