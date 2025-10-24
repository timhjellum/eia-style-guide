<section id="energy-kids">
  <!-- start master layout-->
  <div class="grid-wrapper">
    <div class="grid-left">
      <!-- start left navigation-->
      <div></div>
    </div>
    <div class="grid-main">
      <!-- start main template area -->
      <h2 class="uk-h1 tm-heading-fragment">Energy Kids</h2>
      <p class="uk-text-lead">Homepage Module</p>
      <!-- Example -->
      <div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
      <div class="uk-card uk-card-default uk-padding">
        <div class="primary energy-kids">
          <a href="/kids/">
            <?php
		$yearin=date("Y");
		$format = "m/d/Y";
		$now = DateTime::createFromFormat($format, date($format));
		$options = (object) [
			'summer' =>
            [["05/31/","08/27/"]], 'halloween' => [["10/07/","11/01/"]], 'thanksgiving' => [["11/14/","11/29/"]], 'winter' => [["12/01/","12/31/"],["01/01/","03/01/"]], 'umbrella' => [["02/28/","04/16/"]], 'spring' => [["04/15/","06/01/"]] ]; $keepGoing=true; $theme="standard"; foreach($options as $key => $value) { if($keepGoing) foreach($value as $index => $dates) { if($keepGoing){ $date1 = DateTime::createFromFormat($format, $dates[0].$yearin); $date2 = DateTime::createFromFormat($format, $dates[1].$yearin); if($now>$date1&&$now<$date2){ $theme=$key; $keepGoing=false; } } } } ?>
            <picture>
              <source media="(min-width: 956px)" srcset="/homepage/images/energy-kids/kids-laptop-<?php echo $theme; ?>.png" />
              <source media="(min-width: 480px)" srcset="/homepage/images/energy-kids/kids-tablet-<?php echo $theme; ?>.png" />
              <img src="/homepage/images/energy-kids/kids-mobile-<?php echo $theme; ?>.png" alt="Small image of Energy Kids banner with host Energy Ant" />
            </picture>
          </a>
        </div>
      </div>
      <!-- end main template area -->
    </div>
    <div class="grid-right"></div>
  </div>
  <!-- end master layout-->
</section>
