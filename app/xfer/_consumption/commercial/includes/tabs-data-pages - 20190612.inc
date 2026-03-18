<?php $url['view'] = isset($url['view']) ? $url['view'] : ''; ?>
<div id="tab-container" class="no_print">
<ul>
<?php if ( $url['view'] == "consumption") {?>
  <li class="tab-unselected"><a href="index.php?view=characteristics">Building Characteristics</a></li>
  <li class="tab-selected"><a href="index.php?view=consumption">Consumption &amp; Expenditures</a></li>
  <li class="tab-unselected"><a href="index.php?view=microdata">Microdata</a></li>
  <li class="tab-unselected"><a href="index.php?view=methodology">Methodology</a></li>
<?php } elseif($url['view'] ==  "microdata") { ?>
  <li class="tab-unselected"><a href="index.php?view=characteristics">Building Characteristics</a></li>
  <li class="tab-unselected"><a href="index.php?view=consumption">Consumption &amp; Expenditures</a></li>
  <li class="tab-selected"><a href="index.php?view=microdata">Microdata</a></li>
  <li class="tab-unselected"><a href="index.php?view=methodology">Methodology</a></li>
<?php } elseif($url['view'] ==  "methodology") { ?>
  <li class="tab-unselected"><a href="index.php?view=characteristics">Building Characteristics</a></li>
  <li class="tab-unselected"><a href="index.php?view=consumption">Consumption &amp; Expenditures</a></li>
  <li class="tab-unselected"><a href="index.php?view=microdata">Microdata</a></li>
  <li class="tab-selected"><a href="index.php?view=methodology">Methodology</a></li>
<?php } elseif($url['view'] ==  "characteristics") { ?>
  <li class="tab-selected"><a href="index.php?view=characteristics">Building Characteristics</a></li>
  <li class="tab-unselected"><a href="index.php?view=consumption">Consumption &amp; Expenditures</a></li>
  <li class="tab-unselected"><a href="index.php?view=microdata">Microdata</a></li>
  <li class="tab-unselected"><a href="index.php?view=methodology">Methodology</a></li>
<?php  } else { ?>
  <li class="tab-unselected"><a href="index.php?view=characteristics">Building Characteristics</a></li>
  <li class="tab-unselected"><a href="index.php?view=consumption">Consumption &amp; Expenditures</a></li>
  <li class="tab-unselected"><a href="index.php?view=microdata">Microdata</a></li>
  <li class="tab-unselected"><a href="index.php?view=methodology">Methodology</a></li>
<?php  } // end if ?>
</ul>
</div>
