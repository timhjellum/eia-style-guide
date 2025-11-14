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
SELECT UPDATE_DATE FROM {$schemaName}.EFMI_UPDATE_DATE
WHERE VIEW_QUERIED = :viewQueried
SQL;


switch ($chart) {
	case "active_trading":
		$update_date_value = "EFMI_ACTIVE_TRADING";
		// subtract two months so the chart looks better, begins in Jan instead of Mar
		$sql = <<<SQL
      SELECT substr(yyyyqq_datex,0,4) as year, substr(yyyyqq_datex,5,2) as qtr, CAST( thousands_of_contracts AS float) AS thousands_of_contracts
      FROM {$schemaName}.efmi_active_trading
      ORDER BY yyyyqq_datex ASC
SQL;
		break;
	case "saudi":
		$update_date_value = "EFMI_SAUDI_DATA";
		$sql = <<<SQL
SELECT substr(yyyyqq_datex,0,4) as year, substr(yyyyqq_datex,5,2) as qtr, SAUDI_PRODUCTION, WTI_PCT_CHANGE
FROM {$schemaName}.EFMI_SAUDI_DATA
WHERE WTI_PCT_CHANGE IS NOT NULL AND SAUDI_PRODUCTION IS NOT NULL
order by yyyyqq_datex
SQL;
		break;
	case "nonoecdexpectations":
		$update_date_value = "EFMI_NON_OECD_EXPECTATIONS";
		$sql = <<<SQL
SELECT year, to_char(to_date(MONTH,'MM'), 'MM') as month,forecast_year, value
FROM {$schemaName}.EFMI_NON_OECD_EXPECTATIONS
WHERE forecast_year > (select max(forecast_year) - 6 from {$schemaName}.EFMI_NON_OECD_EXPECTATIONS)
ORDER BY forecast_year, year, month
SQL;
		break;
	case "nonOpecSupplyExpectation":
		$update_date_value = "EFMI_OPEC_NONOPEC_SUPPLY";
		$sql = <<<SQL
select year as year, month as month, OPEC as OPEC, NONOPEC as NONOPEC
from
{$schemaName}.EFMI_OPEC_NONOPEC_SUPPLY
order by year asc, month asc
SQL;
// WHERE year > 2013

		break;
	case "expectations":
		$update_date_value = "EFMI_EXPECTATIONS";
		$sql = <<<SQL
SELECT year, to_char(to_date(MONTH,'MM'), 'MM') as month,forecast_year, value
FROM {$schemaName}.EFMI_EXPECTATIONS
WHERE forecast_year > (select max(forecast_year) - 6 from {$schemaName}.EFMI_EXPECTATIONS)
ORDER BY forecast_year, year, month
SQL;

		break;
	case "inventory":
		$update_date_value = "EFMI_INVENTORY";
		/* get the year and quarter separately from the "date" field */
		/* Leave out any rows where both values are null */
		$sql = <<<SQL
SELECT substr(yyyyqq_datex,0,4) as year, substr(yyyyqq_datex,5,2) as qtr, change_absolute, price_spread_change
FROM {$schemaName}.efmi_inventory
WHERE change_absolute IS NOT NULL AND price_spread_change IS NOT NULL
ORDER BY yyyyqq_datex ASC
SQL;
		break;
	case "non-oecd_demand2":
		$update_date_value = "EFMI_NON_OECD_CONSUMPTION";
		/* get the year and quarter separately from the "date" field */
		/* Leave out any rows where both values are null */
		$sql = <<<SQL
SELECT substr(yyyyqq_datex,0,4) as year, substr(yyyyqq_datex,5,2) as qtr, pct_change, non_oecd_gdp_growth
FROM {$schemaName}.efmi_non_oecd_consumption
WHERE pct_change IS NOT NULL AND non_oecd_gdp_growth IS NOT NULL
ORDER BY yyyyqq_datex ASC
SQL;
		break;
	case "non-opec_production":
		$update_date_value = "EFMI_NON_OPEC_PRODUCTION";
		/* get the year and quarter separately from the "date" field */
		/* WHERE change_absolute IS NOT NULL AND wti_gdp_real_price IS NOT NULL */
		/* Leave out any rows where both values are null */
		$sql = <<<SQL
SELECT substr(yyyyqq_datex,0,4) as year, substr(yyyyqq_datex,5,2) as qtr, change_absolute, wti_gdp_real_price
FROM {$schemaName}.efmi_non_opec_production
WHERE substr(yyyyqq_datex,0,4) > 2000
ORDER BY yyyyqq_datex ASC
SQL;
		break;
	case "oecd_demand":
		$update_date_value = "EFMI_OECD_CONSUMPTION";
		/* get the year and quarter separately from the "date" field */
		/* Leave out any rows where both values are null */
		$sql = <<<SQL
SELECT substr(yyyyqq_datex,0,4) as year, substr(yyyyqq_datex,5,2) as qtr, pct_change, wti_gdp_real_price
FROM {$schemaName}.efmi_oecd_consumption
WHERE pct_change IS NOT NULL AND wti_gdp_real_price IS NOT NULL
ORDER BY yyyyqq_datex ASC
SQL;
		break;
	case "opec_spare_capacity":
		$update_date_value = "EFMI_OPEC_SPARE_CAPACITY";
		/* get the year and quarter separately from the "date" field */
		/* Leave out any rows where both values are null */
		$sql = <<<SQL
SELECT substr(yyyyqq_datex,0,4) as year, substr(yyyyqq_datex,5,2) as qtr, cops_opec, wti_gdp_real_price
FROM {$schemaName}.efmi_opec_spare_capacity
WHERE substr(yyyyqq_datex,0,4) > 2002 and cops_opec IS NOT NULL AND wti_gdp_real_price IS NOT NULL
ORDER BY yyyyqq_datex ASC
SQL;
		break;
	case "risk_factors":
		$update_date_value = "EFMI_RISK_FACTORS";
		/* get the year and quarter separately from the "date" field */
		/* Leave out any rows where both values are null */
		$sql = <<<SQL
SELECT substr(yyyyqq_datex,0,4) as year, substr(yyyyqq_datex,5,2) as qtr, importer_real_partial, wti_real
FROM {$schemaName}.efmi_risk_factors
WHERE not (importer_real_partial IS NULL AND wti_real IS NULL)
ORDER BY yyyyqq_datex ASC
SQL;
		break;
	case "passive_trading":
		$update_date_value = "EFMI_PASSIVE_TRADING";
		/* get the year and quarter separately from the "date" field */
		$sql = <<<SQL
SELECT substr(yyyyqq_datex,0,4) as year, substr(yyyyqq_datex,5,2) as qtr, long_value, short_value, wti
FROM {$schemaName}.efmi_passive_trading
ORDER BY yyyyqq_datex ASC
SQL;
		break;
	case "open_interest":
		$update_date_value = "EFMI_DERIVATIVE_MKT_PARTICIP";
		/* get the year and quarter separately from the "date" field */
		/* Leave out any rows where both values are null */
		$sql = <<<SQL
SELECT substr(yyyyqq_datex,0,4) as year, substr(yyyyqq_datex,5,2) as qtr, NET_NON_COMMERCIAL_POSITION, NET_COMMERCIAL_POSITION
FROM {$schemaName}.EFMI_DERIVATIVE_MKT_PARTICIP
WHERE NET_NON_COMMERCIAL_POSITION IS NOT NULL AND NET_COMMERCIAL_POSITION IS NOT NULL
order by yyyyqq_datex
SQL;
		break;
	case "financial_assets":
		$update_date_value = "EFMI_TOP_ASSETS_UNDER_MGMT";
		/* get the year, month and day separately from the "date" field */
		$sql = <<<SQL
SELECT substr(TO_CHAR(RELEASE_DATE, 'YYYYMMDD'),0,4) as year, substr(TO_CHAR(RELEASE_DATE, 'YYYYMMDD'),5,2) as month, substr(TO_CHAR(RELEASE_DATE, 'YYYYMMDD'),7,2) as day, ASSETS_UNDER_MGMT_INDEX, CFTC_TOTAL_INVESTMENT_INDEX
FROM {$schemaName}.EFMI_TOP_ASSETS_UNDER_MGMT
ORDER BY RELEASE_DATE ASC
SQL;
		break;
	case "prices1":
		$update_date_value = "EFMI_WORLD_OIL_PRICE";
		/* get the year and quarter separately from the "date" field */
		/* Leave out any rows where both values are null */
		$sql = <<<SQL
SELECT year, to_char(to_date(MONTH,'MM'), 'MM') as month, WTI_PRICE, BRENT_PRICE, MARS_PRICE, TAPIS_PRICE, DUBAI_PRICE
FROM {$schemaName}.EFMI_WORLD_OIL_PRICE
ORDER BY cast(year as number), cast(month as number)
SQL;
		break;
	case "prices_gasoline_crude":
		$update_date_value = "EFMI_CRUDE_GASOLINE_TREND";
		/* get the year and quarter separately from the "date" field */
		$sql = <<<SQL
SELECT year, to_char(to_date(MONTH,'MM'), 'MM') as month, US_RETAIL_GASOLINE, REFINER_CRUDE_COST
FROM {$schemaName}.EFMI_CRUDE_GASOLINE_TREND
ORDER BY year asc, month asc
SQL;

		break;
	case "growth_asia":
		/* Once a year - change Where statement to increament year value */
		$update_date_value = "EFMI_GDP_GROWTH_ASIA";
		$sql = <<<SQL
SELECT substr(yyyyqq_datex,0,4) as year, substr(yyyyqq_datex,5,2) as qtr, GDP_GROWTH, FORECAST_YEAR
FROM {$schemaName}.EFMI_GDP_GROWTH_ASIA
WHERE forecast_year > 2009
order by forecast_year, yyyyqq_datex
SQL;
		break;
	case "growth_world":
		$update_date_value = "EFMI_GLOBAL_OIL_CONSUMPTION";
		$sql = <<<SQL
SELECT substr(yyyyqq_datex,0,4) as year, substr(yyyyqq_datex,5,2) as qtr, CONSUMPTION_CHANGE, WORLD_GDP_CHANGE, WTI_REAL
FROM {$schemaName}.EFMI_GLOBAL_OIL_CONSUMPTION
WHERE yyyyqq_datex >= 200201
order by yyyyqq_datex
SQL;
		break;
	case "top_assets":
		$update_date_value = "EFMI_OTHER_FINANCIAL_MARKETS";
		$sql = <<<SQL
SELECT substr(yyyyqq_datex,0,4) as year, substr(yyyyqq_datex,5,2) as qtr, ASSETS_UNDER_MGMT, DOW_UBS_COMMODITY_INDEX
FROM {$schemaName}.EFMI_TOP_ASSETS_UNDER_MGMT_V2
order by yyyyqq_datex
SQL;
		break;
	case "opec_quotas":
		$update_date_value = "EFMI_OPEC_QUOTA";
		/* get the year and quarter separately from the "date" field */
		/* Leave out any rows where both values are null */
		$sql = <<<SQL
SELECT substr(yyyyqq_datex,0,4) as year, substr(yyyyqq_datex,5,2) as qtr, OPEC_QUOTA_CHANGE, WTI_PCT_CHANGE
FROM {$schemaName}.EFMI_OPEC_QUOTA
WHERE OPEC_QUOTA_CHANGE IS NOT NULL AND WTI_PCT_CHANGE IS NOT NULL
order by yyyyqq_datex
SQL;
		break;
	case "world_capacity":
		$update_date_value = "EFMI_WORLD_CAPACITY";
		/* get the year and quarter separately from the "date" field */
		/* Leave out any rows where both values are null */
		$sql = <<<SQL
SELECT substr(yyyyqq_datex,0,4) as year, substr(yyyyqq_datex,5,2) as qtr, CAPACITY_PCT_CHANGE, WORLD_GDP_CHANGE, WTI_REAL
FROM {$schemaName}.EFMI_WORLD_CAPACITY
WHERE substr(yyyyqq_datex,0,4) > 2000
ORDER BY year asc, qtr asc
SQL;
		break;
	case "pm_crude_trader":
		$update_date_value = "EFMI_CRUDE_TRADER_COMMITMENT";
		$sql = <<<SQL
SELECT distinct trade_date, extract( year from to_date(trade_date))  as year,
ceil(extract( month from to_date(trade_date)))  as month, LONG_CONTRACTS, SHORT_CONTRACTS, NET_CONTRACTS, ENTITY
FROM {$schemaName}.EFMI_CRUDE_TRADER_COMMITMENT
WHERE ENTITY  = 'Producers/Merchants'
ORDER BY trade_date asc,year asc, month asc
SQL;
		break;
	case "mm_crude_trader":
		$update_date_value = "EFMI_CRUDE_TRADER_COMMITMENT";
		$sql = <<<SQL
SELECT distinct trade_date, extract( year from to_date(trade_date))  as year,
ceil(extract( month from to_date(trade_date)))  as month, LONG_CONTRACTS, SHORT_CONTRACTS, NET_CONTRACTS, ENTITY
FROM {$schemaName}.EFMI_CRUDE_TRADER_COMMITMENT
WHERE ENTITY  = 'Money Managers'
ORDER BY trade_date asc,year asc, month asc
SQL;
		break;
	case "ubs_commodity":
		$update_date_value = "EFMI_UBS_COMMODITY_INDEX_ALLOC";
		$sql = <<<SQL
SELECT YEAR, COMMODITY, PERCENT_ALLOCATION
FROM {$schemaName}.EFMI_UBS_COMMODITY_INDEX_ALLOC
SQL;

		break;
	case "other_financial_markets":
		$update_date_value = "EFMI_OTHER_FINANCIAL_MARKETS";
		$sql = <<<SQL
SELECT substr(yyyyqq_datex,4,4) as year, substr(yyyyqq_datex,0,1) as qtr, s_and_p as snp,  dxy, treasury, wti_volatility as vol, tips_inflation as tips
FROM {$schemaName}.efmi_other_financial_markets
WHERE to_number(substr(yyyyqq_datex,4,4)) >= (select max(to_number(substr(yyyyqq_datex,4,4))) - 11 from {$schemaName}.efmi_other_financial_markets)
SQL;
		break;
	case "commodities":
		$update_date_value = "EFMI_OTHER_FINANCIAL_MARKETS";
		$sql = <<<SQL
SELECT substr(yyyyqq_datex,4,4) as year, substr(yyyyqq_datex,0,1) as qtr, nat_gas as ngas,  gold, copper, silver, soy, corn, wheat
FROM {$schemaName}.efmi_other_financial_markets
WHERE to_number(substr(yyyyqq_datex,4,4)) >= (select max(to_number(substr(yyyyqq_datex,4,4))) - 11 from {$schemaName}.efmi_other_financial_markets)
SQL;
		break;

}

if ($update_date_value !== '') {
	$neic->sql = $updateDateSQL;
	$updateDate = $neic->get(array("viewQueried" => $update_date_value));
}
if ($sql !== '') {
	$neic->sql = $sql;
	$query = $neic->get();
}

/* Don't output JSON for the table queries */
/*if ($chart !== 'other_financial_markets' and $chart !== 'commodities') {
	print json_encode($query);
}*/

?>
