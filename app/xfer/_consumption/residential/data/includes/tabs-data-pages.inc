<?php /* 2012-09-28: christian.stauffer@eia.gov created this to approximate jQuery UI tabs for query string-based URLs on data cycle L3 consumption pages */ ?>

<div id="tab-container" class="no_print">
  <?php if ( $url['view'] == "consumption") {?>
    <ul>
      <a href="index.php?view=characteristics">
      <li class="tab-unselected">Housing characteristics</li>
      </a>
      <li class="tab-selected">Consumption &amp; expenditures</li>

      <a href="index.php?view=microdata">
      <li class="tab-unselected">Microdata</li>
      </a>
      <?php if ( $page['year'] == '2005') {?>
      <?php  } else { ?>
      <a href="index.php?view=methodology">
      <li class="tab-unselected">Methodology </li>
      </a>
      <?php  } // end if ?>
    </ul>

    <?php } elseif( $url['view'] == "microdata") { ?>
    <ul>
      <a href="index.php?view=characteristics">
      <li class="tab-unselected">Housing characteristics</li>
      </a> <a href="index.php?view=consumption">
      <li class="tab-unselected">Consumption &amp; expenditures</li>
      </a>
      <li class="tab-selected">Microdata</li>
      <?php if ( $page['year'] == '2005') {?>
      <?php  } else { ?>
      <a href="index.php?view=methodology">
      <li class="tab-unselected">Methodology </li>
      </a>
      <?php  } // end if ?>
    </ul>
  <?php } elseif( $url['view'] == "methodology") { ?>
    <ul>
      <a href="index.php?view=characteristics">
      <li class="tab-unselected">Housing characteristics</li>
      </a> <a href="index.php?view=consumption">
      <li class="tab-unselected">Consumption &amp; expenditures</li>
      </a> <a href="index.php?view=microdata">
      <li class="tab-unselected">Microdata</li>
      </a>
      <li class="tab-selected">Methodology</li>
    </ul>
    <?php  } else { ?>
    <ul>
      <li class="tab-selected">Housing characteristics</li>
      <a href="index.php?view=consumption">
      <li class="tab-unselected">Consumption &amp; expenditures</li>
      </a> <a href="index.php?view=microdata">
      <li class="tab-unselected">Microdata</li>
      </a> 
      <?php if ( $page['year'] == '2005') {?>
      <?php  } else { ?>
      <a href="index.php?view=methodology">
      <li class="tab-unselected">Methodology </li>
      </a>
      <?php  } // end if ?>
    </ul>
  <?php  } // end if ?>
</div>
