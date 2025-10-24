<!doctype html>
<?php
$linkPage 		= 'link00page';
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$pageTitle 		= 'Energy & Financial Markets: What drives petroleum product prices - Energy Information Administration';
$L2T 			= 'Markets & Finance';
$locale 		= 'petprod';
$l2page 		= 'page_fin';
$l2id 			= 10;
?>
<html>

<head>
	<title><?=$pageTitle?> - <?=$globalTitle?></title>
	<meta property="og:title" content="<?=$pageTitle?> - <?=$globalTitle?>">
	<meta property="og:url" content="https://www.eia.gov<?=$_SERVER['SCRIPT_NAME']?>">
	<meta name="url" content="https://www.eia.gov<?=$_SERVER['SCRIPT_NAME']?>">
	<?php include('global/head/includes/head.inc'); ?>
	<?php
	$doNotIncludeHighcharts = true;
	include('../includes/header_efmi.inc');
	?>
	<link rel="stylesheet" href="includes/efmi.css" type="text/css">
	<script type="text/javascript" src="../includes/efmi.js"></script>
	<!--style>
	:root {
		--select-bg-color-inactive: #fefefe;
		--select-bg-color-hover: #fff;
		--select-bg-color-focus: #fff;
		--select-border-inactive: 2px solid #333;
		--select-border-hover: 2px solid #007eb5;
		--select-border-expanded: 2px solid #007eb5;
		--select-color-inactive: #999;
		--select-color-hover: #000;
		--select-drop-active-color: #fff;
		--select-drop-active-color-hover: #fff;
		--select-drop-active-bg-color: #007eb5;
		--select-drop-active-bg-color-hover: #007eb5;
		--select-tabs-active-color: #000;
		--select-tabs-active-color-hover: #000;
		--select-tabs-active-bg-color: #fff;
		--select-tabs-active-bg-color-hover: #fff;
		--select-drop-color: #333;
		--select-drop-color-hover: #007eb5;
		--select-drop-bg-color-hover: #f7f7f7;
		--select-drop-bg-color: #ffffff;
		--arrow-color-inactive: #666;
		--arrow-color-hover: #007eb5;
		--arrow-color: #007eb5;
		--select-border-radius: 4px;
		--select-height: 36px;
		--font-family: Jost, sans-serif;
	}

	/* Tablet */
	@media screen and (min-width: 769px) {
		.select {
			width: 100%;
			padding: 0;
			margin: 0 auto 3em auto;
			border-bottom: 4px solid #0096d7;
		}

		.select li {
			margin: 0;
			padding: 0;
			list-style: none;
		}

		.select li li {
			margin: 0;
			padding: 0;
			list-style: none;
		}

		.select__input {
			display: none !important;
		}

		.select>li:nth-child(1) {
			display: none;
		}

		.select>li:nth-child(2)>input,
		.select>li:nth-child(2)>label {
			display: none;
		}

		.select ul {
			width: 100%;
			padding: 0;
			margin: 0;
			display: flex;
			flex-direction: row;
			align-items: flex-end;
			justify-content: flex-start;
		}

		.select ul li label {
			display: flex;
			padding: 0 0.8em;
			margin-bottom: 2px;
			border-right: 1px solid #ddd;
		}

		.select ul li:last-child label {
			border-right: none;
		}

		.select ul li a {
			line-height: 1;
		}

		.select ul li a:hover {
			text-decoration: none !important;
		}

		.select ul li.select__active a {
			color: var(--select-tabs-active-color) !important;
			font-weight: bolder;
			text-decoration: none;
		}

		.select ul li.select__active a:hover {
			text-decoration: none !important;
		}
	}

	@media screen and (min-width: 320px) and (max-width: 768px) {
		.select {
			width: 100%;
			height: var(--select-height);
			margin: 0;
			padding: 0;
			cursor: pointer;
			font-family: var(--font-family);
			background-color: var(--select-bg-color-inactive);
		}

		.select li {
			list-style: none;
		}

		.select li li {
			margin: 0;
			padding: 0;
		}

		.select:hover {
			background-color: var(--select-bg-color-hover);
		}

		.select:hover .select__label--placeholder {
			color: var(--select-color-hover);
		}

		.select>li {
			position: relative;
		}

		.select__expand {
			width: 0;
			height: var(--select-height);
			position: absolute;
			top: 0;
			right: 0;
			background-color: var(--select-bg-color-focus);
		}

		.select__expand:after {
			content: "\2770";
			position: absolute;
			top: 50%;
			right: 0;
			transform: translate(-15px, -50%) rotate(270deg);
			color: var(--arrow-color-inactive);
			font-size: 1.1rem;
			pointer-events: none;
			z-index: 2;
			transition: all 250ms cubic-bezier(0.4, 0.25, 0.3, 1);
			font-weight: 900;
			font-size-adjust: 0.5;
		}

		.select__expand:hover:after {
			color: var(--arrow-color-hover);
		}

		.select__options {
			padding-left: 0;
		}

		.select__option {
			position: relative;
		}

		.select__option:hover .select__label {
			cursor: pointer;
		}

		.select__expand:hover:after {
			opacity: 1;
		}

		.select__expand:checked:after {
			transform: translate(-15px, -50%) rotate(90deg);
			color: var(--arrow-color);
		}

		.select__expand--label {
			display: block;
			width: 100%;
			height: var(--select-height);
			position: absolute;
			top: 0;
			left: 0;
			cursor: pointer;
		}

		.select__close {
			display: none;
		}

		.select__close--label {
			width: 100vw;
			height: 100vh;
			position: fixed;
			top: 0;
			left: 0;
			display: none;
		}

		.select__items {
			width: 100%;
			position: absolute;
			top: 0;
			left: 0;
			border: var(--select-border-inactive);
			border-radius: var(--select-border-radius);
			padding-top: var(--select-height);
		}

		.select__items:hover {
			border: var(--select-border-hover);
		}

		.select__input {
			display: none;
		}

		.select__label {
			transition: all 250ms cubic-bezier(0.4, 0.25, 0.3, 1);
			display: block;
			height: 0;
			font-size: 1.1rem;
			line-height: 40px;
			overflow: hidden;
			cursor: pointer;
			padding-left: 20px;
		}

		.select__label a {
			color: var(--select-drop-color);
			text-decoration: none;
		}

		.select__label a:hover {
			text-decoration: none;
			color: var(--select-drop-color-hover);
			text-decoration: none !important;
		}

		.select__label--placeholder {
			height: var(--select-height);
			vertical-align: middle;
			position: absolute;
			top: 0;
			left: 0;
			background-color: transparent;
			color: var(--select-color-inactive);
		}

		.select__expand:checked+.select__close--label+.select__options .select__label {
			height: var(--select-height);
		}

		.select__expand:checked+.select__close--label+.select__options .select__label:hover {
			background-color: var(--select-drop-bg-color-hover);
		}

		.select__expand:checked+.select__close--label {
			display: block;
		}

		.select__expand:checked+.select__close--label+.select__options.select__active .select__label {
			color: #666;
		}

		.select__expand:checked+.select__close--label+.select__options .select__label {
			background-color: var(--select-drop-bg-color);
		}

		.select__expand:checked+.select__close--label+.select__options .select__active .select__label {
			background-color: var(--select-drop-active-bg-color);
		}

		.select__expand:checked+.select__close--label+.select__options .select__active .select__label a {
			color: var(--select-drop-active-color) !important;
			text-decoration: none;
		}

		.select__expand:checked+.select__close--label+.select__options .select__active .select__label a:hover {
			text-decoration: none !important;
		}

		.select__expand:checked+.select__close--label+.select__options .select__active .select__label:hover {
			background-color: var(--select-drop-active-bg-color-hover);
			color: var(--select-drop-color-focus) !important;
			text-decoration: none;
		}

		.select__expand:checked+.select__close--label+.select__options+.select__expand--label {
			display: none;
		}

		.select__input:checked+.select__label {
			height: var(--select-height);
			margin-top: -var(--select-height);
		}

		li:has(input.select__expand[type="radio"]:checked) {
			border: var(--select-border-expanded);
			outline: 0;
			box-shadow: inset 0 3px 8px rgba(0, 0, 0, 0.075), 0 3px 8px rgba(102, 175, 233, 0.6);
		}
	}


	.secondary>ul.tie-list {
		padding-left: 0;
		padding-right: 0;
	}

	.tie-head {
		background: #ddf5ff;
		border-bottom: 3px solid #0096d7;
	}

	.tie-head h4 {
		padding: .5em 6px;
		font-size: 1.6rem;
		color: #000;
		line-height: .9;
	}

	.tie-head h4 span {
		font-size: .8rem;
		color: #000;
	}
	</style>
	-->
</head>

<body>
	<?php
include('global/header/includes/header.inc');
include('./includes/report-header.inc');
include('./includes/sub-navigation.inc');
include('./includes/dashboard.inc');
include('./includes/tertiary-navigation.inc');
?>
	<div class="l-row l-two-col-right">
		<div class="l-col">
			<?php
$schemaName = "neic";
require_once 'global/includes/utils/Neic.inc';
$neic = new NEIC();

$neic->sql = <<<SQL
SELECT CHART_ID, FREQUENCY, UPDATE_DATE
FROM $schemaName.V2_EFMI_UPDATE_DATE
SQL;

$query = $neic->get();
$dataArray = array();

for ($i = 0; $i < sizeof($query); $i++) {
	$chartId = $query[$i]['chart_id'];
	$dataArray[$chartId] = array();
	$dataArray[$chartId]["frequency"] = $query[$i]['frequency'];
	$dataArray[$chartId]["update_date"] = $query[$i]['update_date'];
}
?>
<?php include('./includes/index-content.inc'); ?>
		</div>
		<div class="l-col">
			<?php include('./includes/index-side-content.inc'); ?>
		</div>
	</div>

	<?php include('global/footer/includes/footer.inc'); ?>
</body>
			
</html>