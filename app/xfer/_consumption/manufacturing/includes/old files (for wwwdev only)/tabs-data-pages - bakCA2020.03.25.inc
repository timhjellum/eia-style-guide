<?php /* 2013-02-20: christian.stauffer@eia.gov created this to approximate jQuery UI tabs for query string-based URLs on data cycle L3 manufacturing pages */ ?>

<div id="tab-container" class="no_print">
  <?php if ( $url['view'] == "methodology") {?>
    <ul>
      <a href="index.cfm?view=data">
      <li class="tab-unselected">Data</li>
      </a>
      <li class="tab-selected">Methodology &amp; Forms</li>
    </ul>
    <?php } elseif($url['view'] == "data") { ?>
    <ul>
      <li class="tab-selected">Data</li>
      <a href="index.cfm?view=methodology">
      <li class="tab-unselected">Methodology &amp; Forms</li>
      </a>
    </ul>
    <?php  } else { ?>
    <ul>
      <li class="tab-selected">Data</li>
      <a href="index.cfm?view=methodology">
      <li class="tab-unselected">Methodology &amp; Forms</li>
      </a>
    </ul>
  <?php  } // end if ?>
</div>
