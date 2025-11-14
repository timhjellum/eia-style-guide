<?php
	require 'data.php';
	$DataConn = new Data();

	$data = $DataConn->getTableData('7','0,1,', 'M', [
		"method" => "getAggregateData",
		"topic" => "7",
		"agg" => "0,1",
		"geo" => "g",
		"endsec" => "vg",
		"ids" => "",
		"freq" => "M",
		"rtype" => "s"]);
	
	$recentYearMonth = array_reverse($data['DATACOLUMNS'])[0];
	$averageMapData = $DataConn->getMapData('ELEC.PRICE.ALL.M', '7')['DATA'][$recentYearMonth];
	$retailMapData = $DataConn->getMapData('ELEC.SALES.ALL.M', '5')['DATA'][$recentYearMonth];
	$netMapData = $DataConn->getMapData('ELEC.GEN.ALL-99.M', '0')['DATA'][$recentYearMonth];
	?>
<section class="first-section margin-bottom">
	<div class="l-grid l-full-width-col">
		<h1>Lorem ipsum dolor sit amet</h1>
		<p>Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor um tellus duis conva .</p>
		<h1>Average retail price of electricity : all sectors <?= DateTime::createFromFormat('Ym', $recentYearMonth)->format('M Y'); ?></h1>
	</div>
	<div class="l-grid l-full-width-col map-container">
		<div id="map"></div>
		<div class="map-legend">
			<div class="map-legend-text" style="text-align: center;">
				cents per kilowatthour
			</div>
			<div>
				<span class="map-legend-figure"></span>
			</div>
			<div class="map-legend-min-max">
				<div class="map-legend-min-number map-legend-text">3.78</div>
				<div class="map-legend-max-number map-legend-text">42.64</div>
			</div>
		</div>
	</div>
</section>