<section id="features">
  <!-- start master layout-->
  <div class="grid-wrapper">
    <div class="grid-left">
      <!-- start left navigation-->
      <div></div>
      <!-- end master layout-->
    </div>
    <div class="grid-main">
      <!-- start main template area -->
      <h2 class="uk-h1 tm-heading-fragment">Features</h2>
      <p class="uk-text-lead">Homepage Module</p>
      <!-- Example -->
      <div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
      <div class="uk-card uk-card-default uk-padding">
        <?php
/* edit the link URL, Label and Date below */
/* no need to add the  >
        or the &nbsp;› or the &rsaquo; */ $featureOneURL = "/electricity/gridmonitor/dashboard/electric_overview/US48/US48"; $featureOneImageName = "930_featureimage.jpg"; $featureOneAlt = "Hourly Electric Grid Monitor"; $featureOneLabel = "Hourly Electric Grid Monitor"; $featureOneDescription = "Hourly actual and forecast electricity generation and demand by U.S. region and power authority"; $featureTwoURL = "/outlooks/aeo/resources/"; $featureTwoImageName = "AEO2024featureimage.png"; $featureTwoAlt = "Annual Energy Outlook 2025"; $featureTwoLabel = "Annual Energy Outlook 2025"; $featureTwoDescription = "Learn about upcoming changes to the National Energy Modeling System"; $featureThreeURL = "/electricity/wholesalemarkets/"; $featureThreeImageName = "RTOportal_featureimage.jpg"; $featureThreeAlt = "Wholesale Electricity Market Portal"; $featureThreeLabel = "Wholesale Electricity Market Portal"; $featureThreeDescription = "Access data from the Regional Transmission Organizations and Independent System Operators"; /* DO NOT EDIT BELOW */ ?>

        <div class="features secondary">
          <h2>Features</h2>
          <div class="f1">
            <div>
              <a href="<?=$featureOneURL?>">
                <img src="/homepage/images/features/<?=$featureOneImageName?>" alt="<?=$featureOneAlt?>" />
              </a>
            </div>
            <ul>
              <li class="head">
                <h3>
                  <a href="<?=$featureOneURL?>">
                    <?=$featureOneLabel?>
                  </a>
                </h3>
              </li>
              <li>
                <?=$featureOneDescription?>
              </li>
            </ul>
          </div>

          <div class="f2">
            <div>
              <a href="<?=$featureTwoURL?>">
                <img src="/homepage/images/features/<?=$featureTwoImageName?>" alt="<?=$featureTwoAlt?>" />
              </a>
            </div>
            <ul>
              <li class="head">
                <h3>
                  <a href="<?=$featureTwoURL?>">
                    <?=$featureTwoLabel?>
                  </a>
                </h3>
              </li>
              <li>
                <?=$featureTwoDescription?>
              </li>
            </ul>
          </div>

          <div class="f3">
            <div>
              <a href="<?=$featureThreeURL?>">
                <img src="/homepage/images/features/<?=$featureThreeImageName?>" alt="<?=$featureThreeAlt?>" />
              </a>
            </div>
            <ul>
              <li class="head" ;>
                <h3>
                  <a href="<?=$featureThreeURL?>">
                    <?=$featureThreeLabel?>
                  </a>
                </h3>
              </li>
              <li>
                <?=$featureThreeDescription?>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- end main template area -->
    </div>
    <div class="grid-right"></div>
  </div>
  <!-- end master layout-->
</section>
