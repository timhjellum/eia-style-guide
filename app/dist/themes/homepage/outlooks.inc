<section id="outlooks">
  <!-- start master layout -->
  <div class="grid-wrapper">
    <div class="grid-left">
      <!-- start left navigation-->
      <div></div>
      <!-- end master layout-->
    </div>
    <div class="grid-main">
      <!-- start main template area -->
      <h2 class="uk-h1 tm-heading-fragment">Outlooks</h2>
      <p class="uk-text-lead">Homepage Module</p>
      <!-- Example -->
      <div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
      <div class="uk-card uk-card-default uk-padding">
        <?php
/* edit the link URL, Label and Date below */
/* no need to add the  >
        or the &nbsp;› */ $outlooksOneURL = "/outlooks/steo/"; $outlooksOneLabel = "Short-Term Energy Outlook"; $outlooksTwoURL = "/outlooks/aeo/"; $outlooksTwoLabel = "Annual Energy Outlook"; $outlooksThreeURL = "/outlooks/ieo/"; $outlooksThreeLabel = "International Energy Outlook"; $outlooksFourURL = "/totalenergy/data/bluesky/"; $outlooksFourLabel = "Next generation modeling"; /* DO NOT EDIT BELOW */ ?>

        <div class="secondary two">
          <ul>
            <li class="head">
              <h2>Outlooks</h2>
            </li>
            <li>
              <a href="<?=$outlooksOneURL?>" title="<?=$outlooksOneLabel?>">
                <?=$outlooksOneLabel?>
              </a>
            </li>
            <li>
              <a href="<?=$outlooksTwoURL?>" title="<?=$outlooksTwoLabel?>">
                <?=$outlooksTwoLabel?>
              </a>
            </li>
            <li>
              <a href="<?=$outlooksThreeURL?>" title="<?=$outlooksThreeLabel?>">
                <?=$outlooksThreeLabel?>
              </a>
            </li>
            <li>
              <a href="<?=$outlooksFourURL?>" title="<?=$outlooksFourLabel?>">
                <?=$outlooksFourLabel?>
              </a>
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
