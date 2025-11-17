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
		<li>Petroleum and liquid fuels markets team</li>
		<li><a href="mailto:eiainfopetroleum@eia.gov">eiainfopetroleum@eia.gov</a></li>
</ul>