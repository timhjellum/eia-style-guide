<?php
			$neic->sql = <<<SQL
SELECT * FROM (
  SELECT * FROM NEIC.TODAY_IN_ENERGY
  WHERE ACTIVE = 'yes' and tags like '%crude%'
  ORDER BY ID DESC
)
--WHERE ROWNUM <= 1
SQL;

			$query = $neic->get();

			if (sizeof($query) > 0) {
				$tietopic = 'crude';
				?>

<style>
    h2 {
        align-items: flex-start;
        border-bottom: 1px solid #333;
        color: #333;
        display: flex;
        flex-direction: column;
        font-size: 135%;
        font-weight: 800;
        line-height: 100%;
        margin: 0 0 10px;
        padding: 0 0 6px
    }

    h2.underline span {
        font-size: 14px !important;
    }

    li em {
        color: #000;
        font-size: 90%;
        font-style: italic;
        font-weight: 400;
        line-height: 150%;
        line-height: 1.1;
        display: flex;
        /*
font-size: 14.4px;
font-style: italic;
font-weight: 400;
line-height: 15.84px;
*/
        padding-bottom: .75em;
        padding-top: 2px;
    }

    li p strong a {
        font-size: 1em;
        font-style: normal;
        font-weight: 400;
        line-height: 22.4px;
    }
</style>




<a href="/todayinenergy/">
    <h2 class="underline">Today in Energy<br /><span>Energy Analysis Every Weekday</span></h2>
</a>
<ul class="l-margin-top l-margin-bottom" style="margin-bottom: 2.5em">
    <li>
        <?php include("todayinenergy/outreach/file_scrub_tie_side_sm_top3.php"); ?>
    </li>
</ul>


<?php
			}
			?>
<h2 class="underline">Contact</h2>
<ul class="top-picks l-margin-top l-margin-bottom">
		<li>Office of Energy Production and Markets Analysis</li>
		<li><a href="mailto:Jeffrey.Barron@eia.gov">Jeffrey.Barron@eia.gov</a></li>
</ul>