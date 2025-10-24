<section id="top-picks">
  <!-- start master layout-->
  <div class="grid-wrapper">
    <div class="grid-left">
      <!-- start left navigation-->
      <div></div>
      <!-- end master layout-->
    </div>
    <div class="grid-main">
      <!-- start main template area -->
      <h2 class="uk-h1 tm-heading-fragment">Top Picks</h2>
      <p class="uk-text-lead">Homepage Module</p>
      <!-- Example -->
      <div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
      <div class="uk-card uk-card-default uk-padding">
        <?php
/* edit the link URL, Label and Date below */
/* no need to add the  >
        or the &nbsp;› */ $topPicksOneURL = "/petroleum/gasdiesel/"; $topPicksOneLabel = "Gasoline and Diesel Fuel Update"; $topPicksTwoURL = "https://ir.eia.gov/ngs/ngs.html"; $topPicksTwoLabel = "Weekly Natural Gas Storage Report"; $topPicksThreeURL = "/petroleum/weekly/"; $topPicksThreeLabel = "This Week in Petroleum"; $topPicksFourURL = "/petroleum/supply/weekly/"; $topPicksFourLabel = "Weekly Petroleum Status Report"; $topPicksFiveURL = "/countries/"; $topPicksFiveLabel = "Profiles for countries"; $topPicksSixURL = "/state/"; $topPicksSixLabel = "Profiles for U.S. states"; $topPicksSevenURL = "/todayinenergy/"; $topPicksSevenLabel = "Today in Energy"; /* DO NOT EDIT BELOW */ ?>

        <div class="primary">
          <ul>
            <li class="head">
              <h2>Top Picks</h2>
            </li>
            <li>
              <a href="<?=$topPicksOneURL?>" title="<?=$topPicksOneLabel?>"><?=$topPicksOneLabel?></a>
            </li>
            <li>
              <a href="<?=$topPicksTwoURL?>" title="<?=$topPicksTwoLabel?>"><?=$topPicksTwoLabel?></a>
            </li>
            <li>
              <a href="<?=$topPicksThreeURL?>" title="<?=$topPicksThreeLabel?>"><?=$topPicksThreeLabel?></a>
            </li>
            <li>
              <a href="<?=$topPicksFourURL?>" title="<?=$topPicksFourLabel?>"><?=$topPicksFourLabel?></a>
            </li>
            <li>
              <a href="<?=$topPicksFiveURL?>" title="<?=$topPicksFiveLabel?>"><?=$topPicksFiveLabel?></a>
            </li>
            <li>
              <a href="<?=$topPicksSixURL?>" title="<?=$topPicksSixLabel?>"><?=$topPicksSixLabel?></a>
            </li>
            <li>
              <a href="<?=$topPicksSevenURL?>" title="<?=$topPicksSevenLabel?>"><?=$topPicksSevenLabel?></a>
            </li>
          </ul>
        </div>
      </div>
      <!-- end main template area -->
    </div>
    <div class="grid-right"></div>
  </div>
  <!-- end master layout-->
</section>
