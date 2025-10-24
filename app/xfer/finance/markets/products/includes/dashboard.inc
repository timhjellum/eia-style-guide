<div class="pub_title bg_pub_default"><?php /* Page/Section Title */ ?>
	<h3><?php echo $L2Title; ?></h3>
	<h1 style="padding-top:0px;">What drives petroleum product prices?</h1>
	<p style="font-size:14px;margin-top:-6px;">Graphs & data updated monthly and quarterly</p>
</div><?php /* / Page/Section Title */ ?>
<div class="subnav"><?php /* Page/Sub Nav */ ?>
	<?php /*<span class="right"><a href="<cfoutput>#glossary_path#</cfoutput>">Glossary &rsaquo;</a> <a href="<cfoutput>#faqs_path#</cfoutput>">FAQS &rsaquo;</a></span>*/ ?>
	<ul>
		<li><a href="../crudeoil/">Crude Oil</a></li>
		<li class="active"><a href=".">Petroleum Products</a></li>
	</ul>
</div>
<?php /* / Page/Sub Nav */ ?>

<div class="efmi_ui" id="efmi_ui">
	<style>
		#bubble2 li {
			margin-left: 62px;
		}

		.efmi_ui_container3 {
			margin: 10px 10px 0 45px;
		}
	</style>
	<div class="efmi_ui_container3 left">
		<?php /* Row 1 */ ?>
		<ul id="bubble2">
			<li>
				<a href="consumption.php">
					<img class="small" src="images/ui/b_productconsumption_button_off.png" alt="Supply non-OECD"/>
					<img class="large" src="images/ui/b_productconsumption_button_on.png" alt="Supply non-OECD"/>
				</a>
			</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>
				<a href="trade.php">
					<img class="small" src="images/ui/b_producttrade_button_off.png" alt="Demand OECD"/>
					<img class="large" src="images/ui/b_producttrade_button_on.png" alt="Demand OECD"/>
				</a>
			</li>
		</ul>
		<div class="clear"></div>
		<?php /* Row 2 */ ?>
		<ul id="bubble2">
			<li>
				<a href="production.php">
					<img class="small" src="images/ui/b_productproduction_button_off.png" alt="Supply OECD"/>
					<img class="large" src="images/ui/b_productproduction_button_on.png" alt="Supply OECD"/>
				</a>
			</li>
			<li class="mid-adjust">
				<a href="prices.php">
					<img class="small" src="images/ui/b_productprice_button_off.png" alt="Spot Prices"/>
					<img class="large" src="images/ui/b_productprice_button_on.png" alt="Spot Prices"/>
				</a>
			</li>
			<li class="mid-adjust">
				<a href="financial_markets.php">
					<img class="small" src="images/ui/b_productfinancialmarkets_button_off.png" alt="Balance"/>
					<img class="large" src="images/ui/b_productfinancialmarkets_button_on.png" alt="Balance"/>
				</a>
			</li>
			<li>
				<a href="balance.php">
					<img class="small" src="images/ui/b_productbalance_button_off.png" alt="Financial Markets"/>
					<img class="large" src="images/ui/b_productbalance_button_on.png" alt="Financial Markets"/>
				</a>
			</li>
		</ul>
		<div class="clear"></div>
		<div>
			<a href="prices.php">Price</a> &nbsp;|&nbsp;
			<a href="consumption.php">Consumption</a> &nbsp;|&nbsp;
			<a href="production.php">Production</a> &nbsp;|&nbsp;
			<a href="financial_markets.php">Financial Markets</a> &nbsp;|&nbsp;
			<a href="trade.php">Trade</a> &nbsp;|&nbsp;
			<a href="balance.php">Balance</a>
		</div>
	</div>

	<div class="clear"></div>
</div>