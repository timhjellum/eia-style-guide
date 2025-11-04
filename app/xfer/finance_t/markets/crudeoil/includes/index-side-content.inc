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

<div class="secondary">
	<ul class="tie-list">
		<li class="head tie-head"><a href="/todayinenergy/">
				<h4>Today in Energy<br /><span>Energy Analysis Every Weekday</span></h4>
			</a></li>
		<li><?php include("todayinenergy/outreach/file_scrub_tie_side_sm_top3.php"); ?></li>
	</ul>
</div>

<?php
			}
			?>
<div class="secondary">
	<ul>
		<li class="head">Contact</li>
		<li><strong>Jeff Barron</strong></li>
		<li>Office of Energy Production and Markets Analysis</li>
		<li><a href="mailto:Jeffrey.Barron@eia.gov">Jeffrey.Barron@eia.gov</a></li>
	</ul>
</div>