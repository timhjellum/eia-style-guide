<?php
global $neic;

$chart = isset($chart) ? $chart : ($_REQUEST['chart'] ? $_REQUEST['chart'] : "");
$schemaName = "neic";

if(!isset($neic) || !is_a($neic, 'NEIC', false)) {
	require_once __DIR__ . '/../includes/Neic.inc';
	$neic = new NEIC();
}

$sql = "";
$update_date_value = "";
$updateDateSQL = <<<SQL
SELECT UPDATE_DATE FROM {$schemaName}.V2_EFMI_UPDATE_DATE
WHERE VIEW_QUERIED = :viewQueried
SQL;

switch ($chart) {
	case "spotprices_gas":
		$update_date_value = "V2_EFMI_SPOTPRICES_GAS";
		$sql = <<<SQL
SELECT year, month, day, ny_harbor_conventional_gas,gulf_coast_conventional_gas, chicago_cbob,los_angeles_carbob,north_west_europe_gas,singapore_gasoline
FROM {$schemaName}.v2_efmi_spotprices_gas where year >= 2008
ORDER BY cast(year as number) ASC, cast(month as number) ASC
SQL;
		break;
	case "spotprices_diesel":
		$update_date_value = "V2_EFMI_SPOTPRICES_DIESEL";
		$sql = <<<SQL
SELECT year, month, day, ny_harbor_ulsd,gulf_coast_ulsd, chicago_ulsd,los_angeles_ulsd,north_west_europe_ulsd,singapore_gasoil
FROM {$schemaName}.v2_efmi_spotprices_diesel
WHERE year >= 2008
ORDER BY cast(year as number) ASC, cast(month as number) ASC
SQL;
		break;
	case "rbob_futures_crack_spread":
		$update_date_value = "V2_EFMI_RBOB_FUT_CRACK";
		$sql = <<<SQL
SELECT year, month, day, rbob_brent_crack_spreads,rbob_front_month_price
FROM {$schemaName}.v2_efmi_rbob_fut_crack
WHERE year >= 2006
ORDER BY year ASC, month ASC
SQL;
		break;
	case "ulsd_futures_crack_spread":
		$update_date_value = "V2_EFMI_ULSD_FUT_PR";
		$sql = <<<SQL
SELECT year, month, day, ulsd_front_month_price,heating_oil_brent_crack_spread
FROM {$schemaName}.v2_efmi_ulsd_fut_pr
WHERE year >= 2000
ORDER BY year ASC, month ASC
SQL;
		break;
	case "rbob_brent_range":
		$update_date_value = "V2_EFMI_RBOB_BRENT_RANGE";
		$sql = <<<SQL
SELECT year,month,day,"2012","2013","2014","2015","2016",
TO_CHAR("2017",'0.99') as "2017",
avg,(TO_CHAR(max,'0.99') ||', '||TO_CHAR(min,'0.99')) as range
FROM {$schemaName}.v2_efmi_rbob_brent_range
ORDER BY month ASC
SQL;
		$sql = <<<SQL
SELECT a.mm,
  a.min,
  a.max,
  a.avg,
  b.value AS "PRIOR",
  c.value AS "CURRENT",
  b.yyyy as "PRIOR_YEAR",
  c.yyyy as "CURRENT_YEAR",
  a.min_year || '-' || a.max_year as "YEAR_RANGE"
FROM
  (SELECT MIN(value) AS MIN,
    MAX(value)       AS MAX,
    AVG(value)       AS "AVG",
    mm,
    min(yyyy) as min_year,
    max(yyyy) as max_year
  FROM {$schemaName}.efmi_rbob_brent_spreads
  WHERE yyyy <=
    (SELECT MAX(yyyy) - 1 FROM {$schemaName}.efmi_rbob_brent_spreads
    )
  AND yyyy >=
    (SELECT MAX(yyyy) - 5 FROM {$schemaName}.efmi_rbob_brent_spreads
    )
  GROUP BY mm
  ) a
JOIN
  (SELECT mm, yyyy, 
    value
  FROM {$schemaName}.efmi_rbob_brent_spreads
  WHERE yyyy =
    (SELECT MAX(yyyy) - 1 FROM {$schemaName}.efmi_rbob_brent_spreads
    )
  ) b
ON a.mm = b.mm
LEFT JOIN
  (SELECT mm, yyyy, 
    value
  FROM {$schemaName}.efmi_rbob_brent_spreads
  WHERE yyyy =
    (SELECT MAX(yyyy) FROM {$schemaName}.efmi_rbob_brent_spreads
    )
  ) c
ON a.mm = c.mm
ORDER BY mm ASC
SQL;
		break;
	case "heat_brent_range":
		$update_date_value = "V2_EFMI_HEAT_BRENT_RANGE";
		$sql = <<<SQL
SELECT year,month,day,"2012", "2013", "2014", "2015", "2016", 
TO_CHAR("2017",'0.99') as "2017",
avg,(TO_CHAR(max,'0.99') ||', '||TO_CHAR(min,'0.99')) as range
FROM {$schemaName}.v2_efmi_heat_brent_range
ORDER BY month ASC
SQL;
		$sql = <<<SQL
SELECT a.mm,
  a.min,
  a.max,
  a.avg,
  b.value AS "PRIOR",
  c.value AS "CURRENT",
  b.yyyy as "PRIOR_YEAR",
  c.yyyy as "CURRENT_YEAR",
  a.min_year || '-' || a.max_year as "YEAR_RANGE"
FROM
  (SELECT MIN(value) AS MIN,
    MAX(value)       AS MAX,
    AVG(value)       AS "AVG",
    mm,
    min(yyyy) as min_year,
    max(yyyy) as max_year
  FROM {$schemaName}.efmi_ho_brent_spreads
  WHERE yyyy <=
    (SELECT MAX(yyyy) - 1 FROM {$schemaName}.efmi_ho_brent_spreads
    )
  AND yyyy >=
    (SELECT MAX(yyyy) - 5 FROM {$schemaName}.efmi_ho_brent_spreads
    )
  GROUP BY mm
  ) a
JOIN
  (SELECT mm, yyyy, 
    value
  FROM {$schemaName}.efmi_ho_brent_spreads
  WHERE yyyy =
    (SELECT MAX(yyyy) - 1 FROM {$schemaName}.efmi_ho_brent_spreads
    )
  ) b
ON a.mm = b.mm
LEFT JOIN
  (SELECT mm, yyyy, 
    value
  FROM {$schemaName}.efmi_ho_brent_spreads
  WHERE yyyy =
    (SELECT MAX(yyyy) FROM {$schemaName}.efmi_ho_brent_spreads
    )
  ) c
ON a.mm = c.mm
ORDER BY mm ASC
SQL;

		break;
	case "product_demand":
		$update_date_value = "V2_EFMI_PRODUCT_PRICE";
		$sql = <<<SQL
SELECT year, month, day, gasoline, distillate
FROM {$schemaName}.v2_efmi_product_price
WHERE year >= 2000 
ORDER BY year ASC, month ASC
SQL;
		break;
	case "consumption_gas_retail":
		$update_date_value = "V2_EFMI_CONSUMPN_GAS_RETAIL";
		$sql = <<<SQL
SELECT  trade_date,extract( year from to_date(trade_date))  as year,
ceil(extract( month from to_date(trade_date))*3-2)  as month, motor_gasoline, gasoline_regular
FROM {$schemaName}.v2_efmi_consumpn_gas_retail
WHERE year >= 2000
ORDER BY year asc, month asc
SQL;
		break;
	case "consumption_distillate_retail":
		$update_date_value = "V2_EFMI_CONS_DIST_RETAIL";
		$sql = <<<SQL
SELECT  trade_date,extract( year from to_date(trade_date))  as year,
ceil(extract( month from to_date(trade_date))*3-2)  as month,distillate_fuel,heating_retail
FROM {$schemaName}.v2_efmi_cons_dist_retail
WHERE year >= 2000
ORDER BY year asc, month asc
SQL;
		break;
	case "gasoline_refinery_output":
		$update_date_value = "V2_EFMI_GAS_DIST_REF_OUTPUT";
		$sql = <<<SQL
SELECT  trade_date,extract( year from to_date(trade_date))  as year,
ceil(extract( month from to_date(trade_date))*3-2)  as month,gasoline
FROM {$schemaName}.v2_efmi_gas_dist_ref_output
WHERE year >= 2000
ORDER BY year asc, month asc
SQL;
		break;
	case "distillate_refinery_output":
		$update_date_value = "V2_EFMI_GAS_DIST_REF_OUTPUT";
		$sql = <<<SQL
SELECT  trade_date, extract( year from to_date(trade_date))  as year,
ceil(extract( month from to_date(trade_date))*3-2)  as month, distillate
FROM {$schemaName}.v2_efmi_gas_dist_ref_output
WHERE year >= 2000
ORDER BY year asc, month asc
SQL;
		break;
	case "refinery_output":
		$update_date_value = "V2_EFMI_REFINERY_OUTPUT";
		$sql = <<<SQL
SELECT trade_date,extract( year from to_date(trade_date))  as year,
ceil(extract( month from to_date(trade_date))*3-2)  as month, gasoline, distillate
FROM {$schemaName}.v2_efmi_refinery_output
WHERE year >= 2001
ORDER BY year asc, month asc
SQL;
		break;
	case "production_futures_prices":
		$update_date_value = "V2_PRODUCTN_FUTURES_PRICE";
		$sql = <<<SQL
SELECT   year, 1 as  month, 1 as day,
distillate_gasoline_ratio,
heating_minus_gasoline
FROM {$schemaName}.v2_productn_futures_price
WHERE year >= 2000
ORDER BY year asc
SQL;
		break;
	case "gasoline_net_imports":
		$update_date_value = "V2_GAS_NET_IMPORTS";
		$sql = <<<SQL
SELECT  trade_date,extract( year from to_date(trade_date))  as year,
extract( month from to_date(trade_date))*3-2  as month, 1 as day, to_char(gas_net_imports, '0.99999') as gas_net_imports
FROM {$schemaName}.v2_gas_net_imports
WHERE year >= 2000
ORDER BY trade_date asc,year asc, month asc
SQL;
		break;
	case "gasoline_net_imports_by_padd":
		$update_date_value = "V2_GAS_NET_IMPORTS_BY_PADD";
		$sql = <<<SQL
SELECT   extract( year from to_date(trade_date))  as year,
extract( month from to_date(trade_date))-2   as month, 1 as day, gas_net_imports_one_five/1000 as gas_net_imports_one_five, gas_net_imports_three/1000   as  gas_net_imports_three
FROM {$schemaName}.v2_gas_net_imports_by_padd
WHERE year >= 2000
ORDER BY year asc, month asc
SQL;
		break;
	case "distillate_fuel_net_imports":
		$update_date_value = "V2_DISTIL_NET_IMPORTS";
		$sql = <<<SQL
SELECT  trade_date,extract( year from to_date(trade_date))  as year,
extract( month from to_date(trade_date))*3-2  as month, 1 as day,  to_char(distillate_net, '0.99999') as distillate_net
FROM {$schemaName}.v2_distil_net_imports
WHERE year >= 2000
ORDER BY trade_date asc,year asc, month asc
SQL;
		break;
	case "distillate_oil_net_imports":
		$update_date_value = "V2_DISTIL_NET_IMPORTS_BY_PADD";
		$sql = <<<SQL
SELECT  extract( year from to_date(trade_date))  as year,
extract( month from to_date(trade_date))-2  as month, 1 as day,  distil_net_imports_one_five/1000 as distil_net_imports_one_five, distil_net_imports_three/1000   as  distil_net_imports_three
FROM {$schemaName}.v2_distil_net_imports_by_padd
WHERE year >= 2000
ORDER BY year asc, month asc
SQL;
		break;
	case "gasoline_inventories":
		$update_date_value = "V2_EFMI_INVENTORIES";
		$sql = <<<SQL
SELECT   year, (month*3)-2 as month, day, gasoline_inventories, rbob
FROM {$schemaName}.v2_efmi_inventories
WHERE year >= 2000
ORDER BY year asc, month asc
SQL;
		break;
	case "distillate_inventories":
		$update_date_value = "V2_EFMI_INVENTORIES";
		$chart_id = "PROD_BALANCE_2";
		$sql = <<<SQL
SELECT   year, (month*3)-2 as month, day, distillate_inventories, ulsd
FROM {$schemaName}.v2_efmi_inventories
WHERE year >= 2000
ORDER BY year asc, month asc
SQL;
		break;
	case "avg_interest":
		$update_date_value = "V2_EFMI_FIN_AVG_INT_PETRO";
		$sql = <<<SQL
SELECT year, (month*3)-2 as month, day, heating_oil, gasoline_regular
FROM {$schemaName}.V2_EFMI_FIN_AVG_INT_PETRO
WHERE year >= 2000
ORDER BY year ASC, month ASC
SQL;
		break;
	case "avg_volume":
		$update_date_value = "V2_EFMI_FIN_AVG_VOL_PETRO";
		$sql = <<<SQL
SELECT year,  (month*3)-2 as month, day, distillate, gasoline
FROM {$schemaName}.V2_EFMI_FIN_AVG_VOL_PETRO
WHERE year >= 2000
ORDER BY year ASC, month ASC
SQL;
		break;
	case "exchange_traded_futures":
		$update_date_value = "V2_EFMI_FIN_EX_TRADED";
		$sql = <<<SQL
            SELECT year,  (month*3)-2 as month, day, rbob, ulsd
            FROM {$schemaName}.v2_efmi_fin_ex_traded
            WHERE year >= 2000
            ORDER BY year ASC, month ASC
SQL;
		break;
}


if ($update_date_value !== '') {
	$params = array("viewQueried" => $update_date_value);
	if (isset($chart_id) && $chart_id !== '') {
		$updateDateSQL = $updateDateSQL . " and chart_id = :chartId";
		$params['chartId'] = $chart_id;
	}
	$neic->sql = $updateDateSQL;
	$updateDate = $neic->get($params);
}
if ($sql !== '') {
	$neic->sql = $sql;
	$query = $neic->get();
}

?>
