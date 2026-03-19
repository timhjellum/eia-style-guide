<!doctype html>

<?php
$globalTitle 	= 'U.S. Energy Information Administration (EIA)'; 
$pageTitle		= 'Commercial Buildings Energy Consumption Survey (CBECS)';
$L2Title 		= "Commercial Buildings Energy Consumption Survey (CBECS)";
$locale = 'overview';
$L2Title = "";
?>
<html>
<head>
	<title><?=$pageTitle?> - <?=$globalTitle?></title>
	<meta property="og:title" content="<?=$pageTitle?> - <?=$globalTitle?>">
	<meta property="og:url" content="https://www.eia.gov<?=$_SERVER['SCRIPT_NAME']?>">
	<meta name="url" content="https://www.eia.gov<?=$_SERVER['SCRIPT_NAME']?>">
	<?php include('global/head/includes/head.inc'); ?>

</head>

<body>
	<?php
include('global/header/includes/header.inc');
include('consumption/commercial/includes/sub-navigation.inc');
include('consumption/includes/report-header.inc')
?>
	<div class="l-row l-two-col-right-narrow">
		<div class="l-col">
    <h1>Estimation of Standard Errors</h1>
    <p>The standard error, or sampling error, of a  survey estimate is a measure of the variation among the estimates from all  possible samples, so it measures how precisely an estimate from a particular  sample approximates the average from all possible samples. This difference arises because we observe a  random subset, rather than the whole population. We measure the typical  magnitude of the sampling error by the standard error of the estimate.</p>     
<p>If the estimates are unbiased, which means they have no systematic error, this average over all possible samples is the true population value. If systematic error is present, however, this bias is not included in the error measured by the standard error. So, the standard error tends to understate the total estimation error if non-negligible biases exist.</p>
    
    <p>In principle, sources other than the sampling process can cause random errors. These sources could include random errors by respondents and data entry staff or buildings for which we did not get a response. To include these sources, we can expand the definition of the sampling process to include not just the building selection but all steps required to obtain a set of responses. Under this expanded definition, we can regard all random errors as sampling errors. The procedures for estimating the sampling error for CBECS incorporate all random components of the estimation process.</p>
    <h2>Jackknife replication</h2>
    <p>Throughout the CBECS data tables, we represent standard errors as percentages of their estimated values (that is, as relative standard errors [RSEs]). Computations of standard errors are more conveniently described, however, in terms of the estimation variance, which is the square of the standard error.</p>
    <p>For some types of surveys, a simple algebraic formula can be used to compute variances. For CBECS, however, we used a list-supplemented, multistage area sample design so complex that it’s almost impossible to construct an exact algebraic expression for estimating variances. In particular, formulas based on an assumption of simple random sampling, typical of most standard statistical packages, don’t work for CBECS estimates. These formulas understate standard errors, making the estimates appear much more accurate than they are.</p>
    <p> We used the jackknife replication method to estimate sampling variances in CBECS. Replication methods are used to form several pseudoreplicates of the sample by selecting subsets of the full sample. The subsets are selected in such a way that the observed variance of estimates, based on the different pseudoreplicates, is an approximation of the sampling variance in the overall estimate.</p>
    <p>The sampling strata are first divided into <em>k</em> groups, and within each group, divided into two (or occasionally three) members. We obtain the k<sup>th</sup> jackknife pseudoreplicate sample set by deleting all observations from one of the members in the k<sup>th</sup> group and multiplying the weights on all cases in the other group members by: two if there are two members in the group and by one-and-a-half if there are three members in the group. Observations in all other groups are unaffected. The k<sup>th</sup> pseudoestimate is then obtained from this pseudoreplicate sample by following all the steps used to construct the full-sample estimate.</p>
    <p>The variances are estimated from the pseudoestimates in the following way. Let <em>X</em>' be a survey estimate (based on the full sample) of characteristic <em>X</em> for a certain category of buildings. For example, <em>X</em> may be the total square footage of buildings using natural gas in the Midwest. Let R be the number of pseudoreplicates (151 for the 2018 CBECS). Let <em>X<sub>k</sub>'</em> be the pseudoestimate of <em>X</em> based on the k<sup>th</sup> pseudoreplicate sample. The estimated variance of the full-sample estimate <em>X</em>' is then given by:</p>
    <div><center><img src="images/eqn1.png" width="200" alt="equation 1"/></center></div>
    <p>The standard error of <em>X</em>' is given by:</p>
    <div><center><img src="images/eqn2.png" width="125" alt="equation 2"/></center></div>
    <p>The relative standard error of <em>X</em>' (standard error as a percentage of <em>X</em>') is:</p>
    <div><center><img src="images/eqn3.png" width="200" alt="equation 3"/></center></div>
    <hr>
    <p>Specific questions on these topics may be directed to:</p>
    <p>Jay Olsen<br>
      <a href="mailto:jay.olsen@eia.gov">jay.olsen@eia.gov</a></p>
  </div>
		<div class="l-col">
			<?php include('consumption/commercial/includes/side-nav-commercial.inc'); ?>
		</div>
  </div>
	<?php include('global/footer/includes/footer.inc'); ?>
</body>
  
</html>