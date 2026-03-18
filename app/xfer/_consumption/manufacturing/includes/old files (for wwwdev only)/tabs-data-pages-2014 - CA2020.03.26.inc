<div id="tab-container" class="no_print">
	<?php if ( $url['view'] == "methodology") {?>
	<ul>
		<a href="index.php?view=data">
			<li class="tab-unselected">Data</li>
		</a>
		<a href="index.php?view=methodology_2014">
			<li class="tab-unselected">Methodology</li>
		</a>
		<li class="tab-selected">Methodology &amp; Forms</li>
	</ul>
	<?php } elseif($url['view'] == "data") { ?>
	<ul>
		<li class="tab-selected">Data</li>
		<a href="index.php?view=methodology_2014">
			<li class="tab-unselected">Methodology</li>
		</a>
		<a href="index.php?view=methodology">
			<li class="tab-unselected">Methodology &amp; Forms</li>
		</a>
	</ul>
	<?php } elseif($url['view'] == "methodology_2014") { ?>
	<ul>
		<a href="index.php?view=data">
			<li class="tab-unselected">Data</li>
		</a>
		<li class="tab-selected">Methodology</li>
		<a href="index.php?view=methodology">
			<li class="tab-unselected">Methodology &amp; Forms</li>
		</a>
	</ul>
	<?php  } else { ?>
	<ul>
		<li class="tab-selected">Data</li>
		<a href="index.php?view=methodology_2014">
			<li class="tab-unselected">Methodology</li>
		</a>
		<a href="index.php?view=methodology">
			<li class="tab-unselected">Methodology &amp; Forms</li>
		</a>
	</ul>
	<?php  } // end if ?>
</div>