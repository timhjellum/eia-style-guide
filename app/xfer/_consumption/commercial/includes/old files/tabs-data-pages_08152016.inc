<?php /* 2012-09-28: christian.stauffer@eia.gov created this to approximate jQuery UI tabs for query string-based URLs on data cycle L3 consumption pages */ ?>

<?php $url['view'] = isset($url['view']) ? $url['view'] : ''; ?>
<div id="tab-container" class="no_print">
  <?php if ( $url['view'] == "consumption") {?>
    <ul>
      <a href="index.cfm?view=characteristics">
      <li class="tab-unselected">Building Characteristics</li>
      </a>
      <li class="tab-selected">Consumption &amp; Expenditures</li>
      <a href="index.cfm?view=microdata">
      <li class="tab-unselected">Microdata</li>
      </a> <a href="index.cfm?view=methodology">
      <li class="tab-unselected">Methodology</li>
      </a>
    </ul>
    <?php } elseif($url['view'] ==  "microdata") { ?>
    <ul>
      <a href="index.cfm?view=characteristics">
      <li class="tab-unselected">Building Characteristics</li>
      </a> <a href="index.cfm?view=consumption">
      <li class="tab-unselected">Consumption &amp; Expenditures</li>
      </a>
      <li class="tab-selected">Microdata</li>
      <a href="index.cfm?view=methodology">
      <li class="tab-unselected">Methodology</li>
      </a>
    </ul>
  <?php } elseif($url['view'] ==  "methodology") { ?>
    <ul>
      <a href="index.cfm?view=characteristics">
      <li class="tab-unselected">Building Characteristics</li>
      </a> <a href="index.cfm?view=consumption">
      <li class="tab-unselected">Consumption &amp; Expenditures</li>
      </a> <a href="index.cfm?view=microdata">
      <li class="tab-unselected">Microdata</li>
      </a>
      <li class="tab-selected">Methodology</li>
    </ul>
    <?php  } else { ?>
    <ul>
      <li class="tab-selected">Building Characteristics</li>
      <a href="index.cfm?view=consumption">
      <li class="tab-unselected">Consumption &amp; Expenditures</li>
      </a> <a href="index.cfm?view=microdata">
      <li class="tab-unselected">Microdata</li>
      </a> <a href="index.cfm?view=methodology">
      <li class="tab-unselected">Methodology </li>
      </a>
    </ul>
  <?php  } // end if ?>
</div>
