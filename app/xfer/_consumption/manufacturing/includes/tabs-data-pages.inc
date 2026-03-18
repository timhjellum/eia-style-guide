<div id="tab-container" class="no_print">
	<?php if ( $url['view'] == "methodology") {?>
	<ul>
		<a href="index.php?view=data">
			<li class="tab-unselected">Data</li>
		</a>
		<li class="tab-selected">Methodology &amp; Forms</li>
	</ul>
	<?php } elseif($url['view'] == "data") { ?>
	<ul>
		<li class="tab-selected">Data</li>
		<a href="index.php?view=methodology">
			<li class="tab-unselected">Methodology &amp; Forms</li>
		</a>
	</ul>
	<?php  } else { ?>
	<ul>
		<li class="tab-selected">Data</li>
		<a href="index.php?view=methodology">
			<li class="tab-unselected">Methodology &amp; Forms</li>
		</a>
	</ul>
	<?php  } // end if ?>
</div>