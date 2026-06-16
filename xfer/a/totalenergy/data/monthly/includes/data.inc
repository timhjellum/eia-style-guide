<?php
$previousLink = '<span class="pipe">|</span> <a href="previous.php">previous editions</a></span>';
?>
<div class="primary">
	<h1>Monthly Energy Review</h1>
	<?php 
include('./includes/data-release-dates.inc');
//include('./includes/data-call-out-change.inc');
include('./includes/data-sub-header.inc');
include('./includes/data-call-out.inc');
?>
	<h2 class="alt">Data categories</h2>
	<span class="expand-collapse-container">
		<span class="ico expand"><span>Expand all</span></span>
		<span class="ico collapse"><span>Collapse all</span></span>
	</span>

	<div class="accordion">
		<h3><a name="summary"></a>Energy overview</h3>
		<div class="accordion-content">
			<ul class="highlight">
				<li class="head">Topic</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec1.pdf" title="entire section"><span class="ico pdf"><span>PDF (entire section)</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">1.1</span>Primary energy overview</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec1_3.pdf" title="Table 1.1  Primary energy overview"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T01.01&freq=m"
						title="Table 1.1  Primary energy overview"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T01.01"
						title="Table 1.1  Primary energy overview"><span class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec1_2.pdf" title="Table 1.1  Primary energy overview"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T01.01#/?f=M&start=200001"
						title="Table 1.1  Primary energy overview  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">1.2</span>Primary energy production by source</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec1_5.pdf" title="Table 1.2  Primary energy production by source"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T01.02&freq=m"
						title="Table 1.2  Primary energy production by source"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T01.02"
						title="Table 1.2  Primary energy production by source"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec1_4.pdf" title="Table 1.2  Primary energy production by source"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T01.02#/?f=M&start=200001"
						title="Table 1.2  Primary energy production by source  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">1.3</span>Primary energy consumption by source</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec1_7.pdf" title="Table 1.3  Primary energy consumption by source"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T01.03&freq=m"
						title="Table 1.3  Primary energy consumption by source"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T01.03"
						title="Table 1.3  Primary energy consumption by source"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec1_6.pdf" title="Table 1.3  Primary energy consumption by source"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T01.03#/?f=M&start=200001"
						title="Table 1.3  Primary energy consumption by source  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">1.4a</span>Primary energy imports by source</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec1_9.pdf" title="Table 1.4a  Primary energy imports by source"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T01.04A&freq=m"
						title="Table 1.4a  Primary energy imports by source"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T01.04A"
						title="Table 1.4a  Primary energy imports by source"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec1_8.pdf" title="Table 1.4a  Primary energy imports by source"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T01.04A#/?f=M&start=200001"
						title="Table 1.4a  Primary energy imports by source  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">1.4b</span>Primary energy exports by source</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec1_11.pdf" title="Table 1.4b  Primary energy exports"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T01.04B&freq=m"
						title="Table 1.4b  Primary energy exports"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T01.04B"
						title="Table 1.4b  Primary energy exports"><span class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec1_10.pdf" title="Table 1.4b  Primary energy exports"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T01.04B#/?f=M&start=200001"
						title="Table 1.4b  Primary energy exports  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">1.4c</span>Primary energy net imports by source</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec1_13.pdf" title="Table 1.4c  Primary energy net imports by source"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T01.04C&freq=m"
						title="Table  1.4c Primary energy net imports by source"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T01.04C"
						title="Table 1.4c  Primary energy net imports by source"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec1_12.pdf" title="Table 1.4c  Primary energy net imports by source"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T01.04C#/?f=M&start=200001"
						title="Table 1.4c  Primary energy net imports by source  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">1.5</span>Merchandise trade value</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec1_15.pdf" title="Table 1.5  Merchandise trade value"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T01.05&freq=m"
						title="Table 1.5  Merchandise trade value"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T01.05"
						title="Table 1.5  Merchandise trade value"><span class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec1_14.pdf" title="Table 1.5  Merchandise trade value"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T01.05#/?f=M&start=200001"
						title="Table 1.5  Merchandise trade value  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">1.6</span>Cost of fuels to end users in real (1982&ndash;1984) dollars</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec1_17.pdf"
						title="Table 1.6  Cost of fuels to end users in real (1982-1984) dollars"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T01.06&freq=m"
						title="Table 1.6  Cost of fuels to end users in real (1982-1984) dollars"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T01.06"
						title="Table 1.6  Cost of fuels to end users in real (1982-1984) dollars"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec1_16.pdf"
						title="Table 1.6  Cost of fuels to end users in real (1982-1984) dollars"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T01.06#/?f=M&start=200001"
						title="Table 1.6  Cost of fuels to end users in real (1982-1984) dollars  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">1.7</span>Primary energy consumption, energy expenditures, and carbon dioxide
					emissions indicators</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec1_19.pdf"
						title="Table 1.7  Primary energy consumption, energy expenditures, and carbon dioxide emissions indicators"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T01.07&freq=m"
						title="Table 1.7  Primary energy consumption, energy expenditures, and carbon dioxide emissions indicators"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T01.07"
						title="Table 1.7  Primary energy consumption, energy expenditures, and carbon dioxide emissions indicators"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec1_18.pdf"
						title="Table 1.7  Primary energy consumption, energy expenditures, and carbon dioxide emissions indicators"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T01.07#/?f=M&start=200001"
						title="Table 1.7  Primary energy consumption, energy expenditures, and carbon dioxide emissions indicators  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">1.8</span>Motor vehicle mileage, fuel consumption, and fuel economy</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec1_21.pdf"
						title="Table 1.8 Motor vehicle mileage, fuel consumption, and fuel economy"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T01.08&freq=m"
						title="Table 1.8 Motor vehicle mileage, fuel consumption, and fuel economy"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T01.08"
						title="Table 1.8 Motor vehicle mileage, fuel consumption, and fuel economy"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec1_20.pdf"
						title="Table 1.8 Motor vehicle mileage, fuel consumption, and fuel economy"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T01.08#/?f=M&start=200001"
						title="Table 1.8 Motor vehicle mileage, fuel consumption, and fuel economy  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">1.9</span>Light-duty vehicle average miles travel by technology type</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec1_22.pdf"
						title="Table 1.9 Light-Duty Vehicle Average Miles Traveled by Technology Type"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T01.09&amp;freq=a"
						title="Table 1.9 Light-Duty Vehicle Average Miles Traveled by Technology Type"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T01.09"
						title="Table 1.9 Light-Duty Vehicle Average Miles Traveled by Technology Type"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T01.09#/f=A"
						title="Table 1.9 Light-Duty Vehicle Average Miles Traveled by Technology Type  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">1.10</span>Electric and fuel cell electric light-duty vehicles overview</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec1_23.pdf"
						title="Table 1.10 Electric and fuel cell electric light-duty vehicles overview"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T01.10&amp;freq=a"
						title="Table 1.10 Electric and fuel cell electric light-duty vehicles overview"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T01.10"
						title="Table 1.10 Electric and fuel cell electric light-duty vehicles overview"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T01.10#/f=A&start=2012"
						title="Table 1.10 Electric and fuel cell electric light-duty vehicles overview  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">1.11</span>Heating degree-days by census division</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec1_24.pdf" title="Table 1.11  Heating degree-days by census division"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T01.11&amp;freq=m"
						title="Table 1.11  Heating degree-days by census division"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T01.11"
						title="Table 1.11  Heating degree-days by census division"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T01.11#/?f=A&start=200001"
						title="Table 1.11  Heating degree-days by census division  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">1.12</span>Cooling degree-days by census division</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec1_25.pdf" title="Table 1.12  Cooling degree-days by census division"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T01.12&amp;freq=m"
						title="Table 1.12  Cooling degree-days by census division"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T01.12"
						title="Table 1.12  Cooling degree-days by census division"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T01.12#/?f=A&amp;start=200001"
						title="Table 1.12  Cooling degree-days by census division  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">1.13a</span>Non-combustion use of fossil fuels in physical units</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec1_26.pdf"
						title="Table 1.13a Non-combustion use of fossil fuels in physical units"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T01.13A&amp;freq=m"
						title="Table 1.13a Non-combustion use of fossil fuels in physical units"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T01.13A"
						title="Table 1.13a Non-combustion use of fossil fuels in physical units"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T01.13A#/?f=A&amp;start=200001"
						title="Table 1.13a Non-combustion use of fossil fuels in physical units  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">1.13b</span>Heat content of non-combustion use of fossil fuels</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec1_27.pdf"
						title="Table 1.13b Heat content of non-combustion use of fossil fuels"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T01.13B&amp;freq=m"
						title="Table 1.13b Heat content of non-combustion use of fossil fuels"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T01.13B"
						title="Table 1.13b Heat content of non-combustion use of fossil fuels"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T01.13B#/?f=A&amp;start=200001"
						title="Table 1.13b Heat content of non-combustion use of fossil fuels  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul>
				<!-- class="numbered" -->
				<li>Section notes</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec1_n.pdf" title="Section 1 notes"><span class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
		</div>




		<h3><a name="consumption"></a>Energy consumption by sector</h3>
		<div class="accordion-content">
			<ul class="highlight">
				<li class="head">Topic</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec2.pdf" title="entire section 2"><span class="ico pdf"><span>PDF (entire
								section)</span></span></a>
				</li>
			</ul>
			<!--<ul class="numbered">
				<li><span class="number">2.1</span>Energy consumption by sector</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec2_3.pdf" title="Table 2.1  Energy consumption by sector"><span class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T02.01&freq=m" title="Table 2.1  Energy consumption by sector"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T02.01" title="Table 2.1  Energy consumption by sector"><span class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec2_2.pdf" title="Table 2.1  Energy consumption by sector"><span class="ico pdf"><span>PDF (graph)</span></span></a></a>
					<span class="pipe">|</span><a href="/totalenergy/data/browser/index.php?tbl=T02.01#/?f=M&start=200001" title="Table 2.1  Energy consumption by sector  - View in Total Energy Browser"><span class="ico interactive"><span>Interactive</span></span></a></li>
			</ul>-->
			<ul class="numbered">
				<li><span class="number">2.1a</span>Energy consumption: Residential, commercial, and industrial sectors
				</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec2_4.pdf" title="Table 2.1a Residential, commercial, and industrial sectors"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T02.01a&freq=m"
						title="Table 2.1a Energy consumption: Residential, commercial, and industrial sectors"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T02.01A"
						title="Table 2.1a Energy consumption: Residential, commercial, and industrial sectors"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec2_2.pdf"
						title="Table 2.1a Energy consumption: Residential, commercial, and industrial sectors"><span
							class="ico pdf"><span>PDF (graph)</span></span></a></a>
					<span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T02.01A#/?f=M&start=200001"
						title="Table 2.1a Energy consumption: Residential, commercial, and industrial sectors  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>

			<ul class="numbered">
				<li><span class="number">2.1b</span>Energy consumption: Transportation sector, total end-use sectors, and electric power sector</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec2_5.pdf"
						title="Table 2.1b Energy consumption: Transportation sector, total end-use sectors, and electric power sector"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T02.01b&freq=m"
						title="Table 2.1b Energy consumption: Transportation sector, total end-use sectors, and electric power sector"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T02.01B"
						title="Table 2.1b Energy consumption: Transportation sector, total end-use sectors, and electric power sector"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec2_3.pdf"
						title="Table 2.1b Energy consumption: Transportation sector, total end-use sectors, and electric power sector"><span
							class="ico pdf"><span>PDF (graph)</span></span></a></a>
					<span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T02.01B#/?f=M&start=200001"
						title="Table 2.1b Energy consumption: Transportation sector, total end-use sectors, and electric power sector - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>

			<ul class="numbered">
				<li><span class="number">2.2</span>Residential sector energy consumption</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec2_7.pdf" title="Table 2.2  Residential sector energy consumption"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T02.02&freq=m"
						title="Table 2.2  Residential sector energy consumption"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T02.02"
						title="Table 2.2  Residential sector energy consumption"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec2_6.pdf" title="Table 2.2  Residential sector energy consumption"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T02.02#/?f=M&start=200001"
						title="Table 2.2  Residential sector energy consumption  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">2.3</span>Commercial sector energy consumption</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec2_9.pdf" title="Table 2.3  Commercial sector energy consumption"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T02.03&freq=m"
						title="Table 2.3  Commercial sector energy consumption"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T02.03"
						title="Table 2.3  Commercial sector energy consumption"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec2_8.pdf" title="Table 2.3  Commercial sector energy consumption"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T02.03#/?f=M&start=200001"
						title="Table 2.3  Commercial sector energy consumption  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">2.4</span>Industrial sector energy consumption</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec2_11.pdf" title="Table 2.4 Industrial sector energy consumption"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T02.04&freq=m"
						title="Table 2.4 Industrial sector energy consumption"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T02.04"
						title="Table 2.4 Industrial sector energy consumption"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec2_10.pdf" title="Table 2.4 Industrial sector energy consumption"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T02.04#/?f=M&start=200001"
						title="Table 2.4 Industrial sector energy consumption  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">2.5</span>Transportation sector energy consumption</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec2_13.pdf" title="Table 2.5  Transportation sector energy consumption"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T02.05&freq=m"
						title="Table 2.5  Transportation sector energy consumption"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T02.05"
						title="Table 2.5  Transportation sector energy consumption"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec2_12.pdf" title="Table 2.5  Transportation sector energy consumption"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T02.05#/?f=M&start=200001"
						title="Table 2.5  Transportation sector energy consumption  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">2.6</span>Electric power sector energy consumption</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec2_15.pdf" title="Table 2.6  Electric power sector energy consumption"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T02.06&freq=m"
						title="Table 2.6  Electric power sector energy consumption"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T02.06"
						title="Table 2.6  Electric power sector energy consumption"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec2_14.pdf" title="Table 2.6  Electric power sector energy consumption"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T02.06#/?f=M&start=200001"
						title="Table 2.6  Electric power sector energy consumption  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">2.7</span>U.S. government energy consumption by agency, fiscal years</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec2_16.pdf"
						title="Table 2.7 U.S. government energy consumption by agency, fiscal years"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T02.07&freq=m"
						title="Table 2.7   U.S. government energy consumption by agency, fiscal years"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T02.07"
						title="Table 2.7   U.S. government energy consumption by agency, fiscal years"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T02.07#/?f=M&start=200001"
						title="Table 2.7   U.S. government energy consumption by agency, fiscal years  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">2.8</span>U.S. government energy consumption by source, fiscal years</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec2_17.pdf"
						title="Table 2.8   U.S. government energy consumption by source, fiscal years"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T02.08&freq=m"
						title="Table 2.8   U.S. government energy consumption by source, fiscal years"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T02.08"
						title="Table 2.8   U.S. government energy consumption by source, fiscal years"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T02.08#/?f=M&start=200001"
						title="Table 2.8   U.S. government energy consumption by source, fiscal years  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul>
				<!-- class="numbered" -->
				<li>Section notes</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec2_n.pdf" title="Table 2 Section notes"><span
							class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
		</div>




		<h3><a name="petroleum"></a>Petroleum</h3>
		<div class="accordion-content">
			<ul class="highlight">
				<li class="head">Topic</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec3.pdf" title="entire section 3"><span class="ico pdf"><span>PDF (entire section
								)</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">3.1</span>Overview</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec3_3.pdf" title="Table 3.1  Overview"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T03.01&freq=m" title="Table 3.1  Overview"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T03.01" title="Table 3.1  Overview"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec3_2.pdf" title="Table 3.1  Overview"><span class="ico pdf"><span>PDF
								(graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T03.01#/?f=M&start=200001"
						title="Table 3.1  Overview  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">3.2</span>Refinery and blender net inputs and net production</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec3_5.pdf"
						title="Table 3.2  Refinery and blender net inputs and net production"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T03.02&freq=m"
						title="Table 3.2  Refinery and blender net inputs and net production"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T03.02"
						title="Table 3.2  Refinery and blender net inputs and net production"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec3_4.pdf"
						title="Table 3.2  Refinery and blender net inputs and net production"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T03.02#/?f=M&start=200001"
						title="Table 3.2  Refinery and blender net inputs and net production  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">3.3</span>Trade</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">3.3a</span>Overview</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec3_7.pdf" title="Table 3.3a  Trade Overview"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T03.03A&freq=m"
						title="Table 3.3a  Trade Overview"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T03.03A" title="Table 3.3a  Trade Overview"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec3_6.pdf" title="Table 3.3a  Trade Overview"><span class="ico pdf"><span>PDF
								(graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T03.03A#/?f=M&start=200001"
						title="Table 3.3a  Trade Overview  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">3.3b</span>Imports by type</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec3_9.pdf" title="Table 3.3b  Imports and exports by type"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T03.03B&freq=m"
						title="Table 3.3b  Imports and exports by type"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T03.03B"
						title="Table 3.3b  Imports and exports by type"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec3_8.pdf" title="Table 3.3b  Imports and exports by type"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T03.03B#/?f=M&start=200001"
						title="Table 3.3b  Imports and exports by type  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">3.3c</span>Imports from OPEC countries</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec3_10.pdf" title="Table 3.3c  Imports from OPEC countries"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T03.03C&freq=m"
						title="Table 3.3c  Imports from OPEC countries"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T03.03C"
						title="Table 3.3c  Imports from OPEC countries"><span
							class="ico csv"><span>CSV</span></span></a>
					<!--<a href="./pdf/sec3_8.pdf" title="Table 3.3c  Imports from OPEC countries"><span class="ico pdf"><span>PDF (graph)</span></span></a>-->
					<span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T03.03C#/?f=M&start=200001"
						title="Table 3.3c  Imports from OPEC countries  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">3.3d</span>Imports from non-OPEC countries</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec3_11.pdf" title="Table 3.3d  Imports from non-OPEC countries"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T03.03D&freq=m"
						title="Table 3.3d  Imports from non-OPEC countries"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T03.03D"
						title="Table 3.3d  Imports from non-OPEC countries"><span
							class="ico csv"><span>CSV</span></span></a>
					<!--<a href="./pdf/sec3_8.pdf" title="Table 3.3d  Imports from non-OPEC countries"><span class="ico pdf"><span>PDF (graph)</span></span></a>-->
					<span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T03.03D#/?f=M&start=200001"
						title="Table 3.3d  Imports from non-OPEC countries - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">3.3e</span>Exports by type</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec3_12.pdf" title="Table 3.3e Exports by type"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T03.03E&freq=m"
						title="Table 3.3e Exports by type"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T03.03E" title="Table 3.3e Exports by type"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec3_8.pdf" title="Table 3.3e Exports by type"><span class="ico pdf"><span>PDF
								(graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T03.03E#/?f=M&start=200001"
						title="Table 3.3e Exports by type - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">3.3f</span>Exports by country of destination</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec3_13.pdf" title="Table 3.3f Exports by country of destination"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T03.03f&freq=m"
						title="Table 3.3f Exports by country of destination"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T03.03f"
						title="Table 3.3f Exports by country of destination"><span
							class="ico csv"><span>CSV</span></span></a>
					<!--<a href="./pdf/sec3_8.pdf" title="Table 3.3f  Exports by country of destination"><span class="ico pdf"><span>PDF (graph)</span></span></a>-->
					<span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T03.03F#/?f=M&start=200001"
						title="Table 3.3f Exports by country of destination - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">3.4</span>Stocks</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec3_15.pdf" title="Table 3.4  Stocks"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T03.04&freq=m" title="Table 3.4  Stocks"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T03.04" title="Table 3.4  Stocks"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec3_14.pdf" title="Table 3.4  Stocks"><span class="ico pdf"><span>PDF
								(graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T03.04#/?f=M&start=200001"
						title="Table 3.4  Stocks  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">3.5</span>Products supplied by type</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec3_17.pdf" title="Table 3.5  Products supplied by type"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T03.05&freq=m"
						title="Table 3.5  Products supplied by type"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T03.05"
						title="Table 3.5  Products supplied by type"><span class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec3_16.pdf" title="Table 3.5  Products supplied by type"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T03.05#/?f=M&start=200001"
						title="Table 3.5  Products supplied by type  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">3.6</span>Heat content of petroleum products supplied by type</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec3_19.pdf"
						title="Table 3.6  Heat content of petroleum products supplied by type"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T03.06&freq=m"
						title="Table 3.6  Heat content of petroleum products supplied by type"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T03.06"
						title="Table 3.6  Heat content of petroleum products supplied by type"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec3_18.pdf"
						title="Table 3.6  Heat content of petroleum products supplied by type"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T03.06#/?f=M&start=200001"
						title="Table 3.6  Heat content of petroleum products supplied by type  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">3.7</span>Petroleum consumption by sector:</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">3.7a</span>Residential and commercial sectors</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec3_21.pdf" title="Table 3.7a  Residential and commercial sectors"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T03.07A&freq=m"
						title="Table 3.7a  Residential and commercial sectors"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T03.07A"
						title="Table 3.7a  Residential and commercial sectors"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec3_20.pdf" title="Table 3.7a  Residential and commercial sectors"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T03.07A#/?f=M&start=200001"
						title="Table 3.7a  Residential and commercial sectors  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">3.7b</span>Industrial sector</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec3_22.pdf" title="Table 3.7b  Industrial sector"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T03.07B&freq=m"
						title="Table 3.7b  Industrial sector"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T03.07B" title="Table 3.7b  Industrial sector"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec3_20.pdf" title="Table 3.7b  Industrial sector"><span class="ico pdf"><span>PDF
								(graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T03.07B#/?f=M&start=200001"
						title="Table 3.7b  Industrial sector  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">3.7c</span>Transportation and electric power sectors</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec3_23.pdf" title="Table 3.7c  Transportation and electric power sectors"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T03.07C&freq=m"
						title="Table 3.7c  Transportation and electric power sectors"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T03.07C"
						title="Table 3.7c  Transportation and electric power sectors"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec3_20.pdf" title="Table 3.7c  Transportation and electric power sectors"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T03.07C#/?f=M&start=200001"
						title="Table 3.7c  Transportation and electric power sectors  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">3.8</span>Heat content of petroleum consumption by sector:</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">3.8a</span>Residential and commercial sectors</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec3_26.pdf" title="Table 3.8a  Residential and commercial sectors"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T03.08A&freq=m"
						title="Table 3.8a  Residential and commercial sectors"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T03.08A"
						title="Table 3.8a  Residential and commercial sectors"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec3_24.pdf" title="Table 3.8a  Residential and commercial sectors"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T03.08A#/?f=M&start=200001"
						title="Table 3.8a  Residential and commercial sectors  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">3.8b</span>Industrial sector</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec3_27.pdf" title="Table 3.8b  Industrial sector"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T03.08B&freq=m"
						title="Table 3.8b  Industrial sector"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T03.08B" title="Table 3.8b  Industrial sector"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec3_24.pdf" title="Table 3.8b  Industrial sector"><span class="ico pdf"><span>PDF
								(graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T03.08B#/?f=M&start=200001"
						title="Table 3.8b  Industrial sector - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">3.8c</span>Transportation and electric power sectors</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec3_28.pdf" title="Table 3.8c  Transportation and electric power sectors"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T03.08C&freq=m"
						title="Table 3.8c  Transportation and electric power sectors"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T03.08C"
						title="Table 3.8c  Transportation and electric power sectors"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec3_24.pdf" title="Table 3.8c  Transportation and electric power sectors"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T03.08C#/?f=M&start=200001"
						title="Table 3.8c  Transportation and electric power sectors - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul>
				<!-- class="numbered" -->
				<li>Section notes</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec3_n.pdf" title="section 3 notes"><span class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
		</div>




		<h3><a name="naturalgas"></a>Natural gas</h3>
		<div class="accordion-content">
			<ul class="highlight">
				<li class="head">Topic</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec4.pdf" title="entire section 4"><span class="ico pdf"><span>PDF (entire section
								)</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">4.1</span>Overview</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec4_3.pdf" title="Table 4.1  Overview"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T04.01&freq=m" title="Table 4.1  Overview"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T04.01" title="Table 4.1  Overview"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec4_2.pdf" title="Table 4.1  Overview graph"><span class="ico pdf"><span>PDF
								(graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T04.01#/?f=M&start=200001"
						title="Table 4.1  Overview  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">4.2a</span>Imports by country</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec4_4.pdf" title="Table 4.2a Imports by country"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T04.02A&freq=m"
						title="Table 4.2a Imports by country"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T04.02A" title="Table 4.2a Imports by country"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T04.02A#/?f=M&start=200001"
						title="Table 4.2a Imports by country"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">4.2b</span>Exports by country</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec4_5.pdf" title="Table 4.2b Exports by country"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T04.02B&freq=m"
						title="Table 4.2b Exports by country"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T04.02B" title="Table 4.2b Exports by country"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T04.02B#/?f=M&start=200001"
						title="Table 4.2b Exports by country"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">4.3</span>Consumption by sector</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec4_6.pdf" title="Table 4.3  Consumption by sector"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T04.03&freq=m"
						title="Table 4.3  Consumption by sector"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T04.03"
						title="Table 4.3  Consumption by sector"><span class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec4_2.pdf"><span class="ico pdf"><span>PDF (graph)</span></span></a><span
						class="pipe">|</span><a href="/totalenergy/data/browser/index.php?tbl=T04.03#/?f=M&start=200001"
						title="Table 4.3  Consumption by sector  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">4.4</span>Underground storage</li>
				<li><span class="additional-formas">Available formats:</span>
					<a href="./pdf/sec4_7.pdf" title="Table 4.4 Underground storage"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T04.04&freq=m" title="Table 4.4 Underground storage"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T04.04"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T04.04#/?f=M&start=200001"
						title="Table 4.4 Underground storage  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul>
				<!-- class="numbered" -->
				<li>Section notes</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec4_n.pdf" title="Section 4 notes"><span class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
		</div>




		<h3><a name="crude"></a>Crude oil and natural gas resource development</h3>
		<div class="accordion-content">
			<ul class="highlight">
				<li class="head">Topic</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec5.pdf" title="entire section 5"><span class="ico pdf"><span>PDF (entire section
								)</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">5.1</span>Drilling activity measurements</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec5_3.pdf" title="Table 5.1  Drilling activity measurements"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T05.01&freq=m"
						title="Table 5.1  Drilling activity measurements"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T05.01"
						title="Table 5.1  Drilling activity measurements"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec5_2.pdf"><span class="ico pdf"><span>PDF (graph)</span></span></a><span
						class="pipe">|</span><a href="/totalenergy/data/browser/index.php?tbl=T05.01#/?f=M&start=200001"
						title="Table 5.1  Drilling activity measurements  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">5.2</span>Wells and footage drilled</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec5_5.pdf" title="Table 5.2 Wells and footage drilled"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T05.02&freq=m"
						title="Table 5.2 Wells and footage drilled"><span class="ico xls"><span>XLS</span></span></a>
					<!--<a href="/totalenergy/data/monthly/csv/Table_5_2.csv" title="Table 5.2 Wells and footage drilled"><span class="ico csv"><span>CSV</span></span>-->
					<a href="/totalenergy/data/browser/csv.php?tbl=T05.02"
						title="Table 5.2 Wells and footage drilled"><span class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec5_4.pdf"><span class="ico pdf"
							title="Table 5.2 Wells and footage drilled graph"><span>PDF (graph)</span></span></a><span
						class="pipe">|</span><a href="/totalenergy/data/browser/index.php?tbl=T05.02#/?f=M&start=200001"
						title="Table 5.2 Wells and footage drilled  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul>
				<!-- class="numbered" -->
				<li>Section notes</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec5_n.pdf" title="Section 5 notes"><span class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
		</div>




		<h3><a name="coal"></a>Coal</h3>
		<div class="accordion-content">
			<ul class="highlight">
				<li class="head">Topic</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec6.pdf" title="entire section 6"><span class="ico pdf"><span>PDF (entire section
								)</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">6.1</span>Overview</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec6_3.pdf" title="Table 6.1 Overview"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T06.01&freq=m" title="Table 6.1 Overview"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T06.01" title="Table 6.1 Overview"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec6_2.pdf"><span class="ico pdf" title="Table 6.1 Overview graph"><span>PDF
								(graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T06.01#/?f=M&start=200001"
						title="Table 6.1 Overview  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">6.2</span>Consumption by sector</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec6_4.pdf" title="Table 6.2 Consumption by sector"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T06.02&freq=m"
						title="Table 6.2 Consumption by sector"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T06.02" title="Table 6.2 Consumption by sector"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec6_2.pdf"><span class="ico pdf"><span>PDF (graph)</span></span></a><span
						class="pipe">|</span><a href="/totalenergy/data/browser/index.php?tbl=T06.02#/?f=M&start=200001"
						title="Table 6.2 Consumption by sector  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">6.3</span>Stocks by sector</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec6_5.pdf" title="Table 6.3 Stocks by sector"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T06.03&freq=m"
						title="Table 6.3 Stocks by sector"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T06.03" title="Table 6.3 Stocks by sector"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T06.03#/?f=M&start=200001"
						title="Table 6.3 Stocks by sector  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul>
				<!-- class="numbered" -->
				<li>Section notes</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec6_n.pdf" title="Section 6 notes"><span class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
		</div>




		<h3><a name="electricity"></a>Electricity</h3>
		<div class="accordion-content">
			<ul class="highlight">
				<li class="head">Topic</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec7.pdf" title="entire section 7"><span class="ico pdf"><span>PDF (entire
								section)</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">7.1</span>Overview</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec7_3.pdf" title="Table 7.1  Overview"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T07.01&freq=m" title="Table 7.1  Overview"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T07.01" title="Table 7.1  Overview"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec7_2.pdf" title="Table 7.1  Overview"><span class="ico pdf"><span>PDF
								(graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T07.01#/?f=M&start=200001"
						title="Table 7.1  Overview  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">7.2</span>Electricity net generation:</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">7.2a</span>Total (all sectors)</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec7_5.pdf" title="Table 7.2a  Electricity net generation: Total (all sectors)"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T07.02A&freq=m"
						title="Table 7.2a  Electricity net generation: Total (all sectors)"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T07.02A"
						title="Table 7.2a  Electricity net generation: Total (all sectors)"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec7_4.pdf" title="Table 7.2a  Electricity net generation: Total (all sectors)"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T07.02A#/?f=M&start=200001"
						title="Table 7.2a  Electricity net generation: Total (all sectors)  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">7.2b</span>Electric power sector</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec7_6.pdf"
						title="Table 7.2b  Electricity net generation: Electric power sector"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T07.02B&freq=m"
						title="Table 7.2b  Electricity net generation: Electric power sector"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T07.02B"
						title="Table 7.2b  Electricity net generation: Electric power sector"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec7_4.pdf"
						title="Table 7.2b  Electricity net generation: Electric power sector"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T07.02B#/?f=M&start=200001"
						title="Table 7.2b  Electricity net generation: Electric power sector  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">7.2c</span>Commercial and industrial sectors</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec7_7.pdf"
						title="Table 7.2c  Electricity net generation: Commercial and industrial sectors"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T07.02C&freq=m"
						title="Table 7.2c  Electricity net generation: Commercial and industrial sectors"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T07.02C"
						title="Table 7.2c  Electricity net generation: Commercial and industrial sectors"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec7_4.pdf"
						title="Table 7.2c  Electricity net generation: Commercial and industrial sectors"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T07.02C#/?f=M&start=200001"
						title="Table 7.2c  Electricity net generation: Commercial and industrial sectors  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">7.3</span>Consumption of combustible fuels for electricity generation:</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">7.3a</span>Total (all sectors)</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec7_9.pdf"
						title="Table 7.3a  Consumption of combustible fuels for electricity generation: Total (all sectors)"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T07.03A&freq=m"
						title="Table 7.3a  Consumption of combustible fuels for electricity generation: Total (all sectors)"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T07.03A"
						title="Table 7.3a  Consumption of combustible fuels for electricity generation: Total (all sectors)"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec7_8.pdf"
						title="Table 7.3a  Consumption of combustible fuels for electricity generation: Total (all sectors)"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T07.03A#/?f=M&start=200001"
						title="Table 7.3a  Consumption of combustible fuels for electricity generation: Total (all sectors)  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">7.3b</span>Electric power sector</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec7_10.pdf"
						title="Table 7.3b  Consumption of combustible fuelsfor electricity generation: Electric power sector"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T07.03B&freq=m"
						title="Table 7.3b  Consumption of combustible fuelsfor electricity generation: Electric power sector"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T07.03B"
						title="Table 7.3b  Consumption of combustible fuelsfor electricity generation: Electric power sector"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec7_8.pdf"
						title="Table 7.3b  Consumption of combustible fuelsfor electricity generation: Electric power sector"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T07.03B#/?f=M&start=200001"
						title="Table 7.3b  Consumption of combustible fuelsfor electricity generation: Electric power sector  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">7.3c</span>Commercial and industrial sectors (selected fuels) </a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec7_11.pdf"
						title="Table 7.3c  Consumption of combustible fuelsfor electricity generation: Commercial and industrial sectors (selected fuels)"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T07.03C&freq=m"
						title="Table 7.3c  Consumption of combustible fuelsfor electricity generation: Commercial and industrial sectors (selected fuels)"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T07.03C"
						title="Table 7.3c  Consumption of combustible fuelsfor electricity generation: Commercial and industrial sectors (selected fuels)"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec7_8.pdf"
						title="Table 7.3c  Consumption of combustible fuelsfor electricity generation: Commercial and industrial sectors (selected fuels)"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T07.03C#/?f=M&start=200001"
						title="Table 7.3c  Consumption of combustible fuelsfor electricity generation: Commercial and industrial sectors (selected fuels)  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">7.4</span>Consumption of combustible fuels for electricity generation and
					useful thermal output:
			</ul>
			<ul class="numbered">
				<li><span class="number">7.4a</span>Total (all sectors)</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec7_13.pdf"
						title="Table 7.4a  Consumption of combustible fuels for electricity generation and useful thermal output: Total (all sectors)"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T07.04A&freq=m"
						title="Table 7.4a  Consumption of combustible fuels for electricity generation and useful thermal output: Total (all sectors)"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T07.04A"
						title="Table 7.4a  Consumption of combustible fuels for electricity generation and useful thermal output: Total (all sectors)"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec7_12.pdf"
						title="Table 7.4a  Consumption of combustible fuels for electricity generation and useful thermal output: Total (all sectors)"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T07.04A#/?f=M&start=200001"
						title="Table 7.4a  Consumption of combustible fuels for electricity generation and useful thermal output: Total (all sectors)  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">7.4b</span>Electric power sector</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec7_14.pdf"
						title="Table 7.4b  Consumption of combustible fuels for electricity generation and useful thermal output: Electric power sector"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T07.04B&freq=m"
						title="Table 7.4b  Consumption of combustible fuels for electricity generation and useful thermal output: Electric power sector"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T07.04B"
						title="Table 7.4b  Consumption of combustible fuels for electricity generation and useful thermal output: Electric power sector"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec7_12.pdf"
						title="Table 7.4b  Consumption of combustible fuels for electricity generation and useful thermal output: Electric power sector"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T07.04B#/?f=M&start=200001"
						title="Table 7.4b  Consumption of combustible fuels for electricity generation and useful thermal output: Electric power sector  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">7.4c</span>Commercial and industrial sectors (selected fuels) </a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec7_15.pdf"
						title="Table 7.4c  Consumption of combustible fuels for electricity generation and useful thermal output: Commercial and industrial sectors (selected fuels)"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T07.04C&freq=m"
						title="Table 7.4c  Consumption of combustible fuels for electricity generation and useful thermal output: Commercial and industrial sectors (selected fuels)"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T07.04C"
						title="Table 7.4c  Consumption of combustible fuels for electricity generation and useful thermal output: Commercial and industrial sectors (selected fuels)"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec7_12.pdf"
						title="Table 7.4c  Consumption of combustible fuels for electricity generation and useful thermal output: Commercial and industrial sectors (selected fuels)"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T07.04C#/?f=M&start=200001"
						title="Table 7.4c  Consumption of combustible fuels for electricity generation and useful thermal output: Commercial and industrial sectors (selected fuels)  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">7.5</span>Stocks of coal and petroleum: electric power sector </a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec7_17.pdf"
						title="Table 7.5  Stocks of coal and petroleum: electric power sector"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T07.05&freq=m"
						title="Table 7.5  Stocks of coal and petroleum: electric power sector"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T07.05"
						title="Table 7.5  Stocks of coal and petroleum: electric power sector"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec7_16.pdf"
						title="Table 7.5  Stocks of coal and petroleum: electric power sector"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T07.05#/?f=M&start=200001"
						title="Table 7.5  Stocks of coal and petroleum: electric power sector  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">7.6</span>Electricity end use and electric vehicle use</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec7_19.pdf" title="Table 7.6 Electricity end use and electric vehicle use"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T07.06&freq=m"
						title="Table 7.6  Electricity end use and electric vehicle use"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T07.06" title="Table 7.6  Electricity end use and electric vehicle use"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec7_18.pdf" title="Table 7.6  Electricity end use and electric vehicle use"><span class="ico pdf"><span>PDF
								(graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T07.06#/?f=M&start=200001"
						title="Table 7.6  Electricity end use and electric vehicle use  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>

			<ul class="numbered">
				<li><span class="number">7.7</span>Electric net summer capacity:
			</ul>
			<ul class="numbered">
				<li><span class="number">7.7a</span>Total (all sectors)</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec7_20.pdf"
						title="Table 7.7a Electric net summer capacity: Total (all sectors)"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T07.07a&freq=m"
						title="Table 7.7a Electric net summer capacity: Total (all sectors)"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T07.07a"
						title="Table 7.7a Electric net summer capacity: Total (all sectors)"><span
							class="ico csv"><span>CSV</span></span></a>
					<!--<a href="./pdf/sec7_xx.pdf" title="Table 7.7a Electric net summer capacity: Total (all sectors)"><span class="ico pdf"><span>PDF (graph)</span></span></a>--><span
						class="pipe">|</span><a href="/totalenergy/data/browser/index.php?tbl=T07.07A#/?f=M"
						title="Table 7.7a Electric net summer capacity: Total (all sectors)"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">7.7b</span>Electric power sector</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec7_21.pdf"
						title="Table 7.7b Electric net summer capacity: Electric power sector"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T07.07b&freq=m"
						title="Table 7.7b Electric net summer capacity: Electric power sector"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T07.07b"
						title="Table 7.7b Electric net summer capacity: Electric power sector"><span
							class="ico csv"><span>CSV</span></span></a>
					<!--<a href="./pdf/sec7_xx.pdf" title="Table 7.7b Electric net summer capacity: Electric power sector"><span class="ico pdf"><span>PDF (graph)</span></span></a>--><span
						class="pipe">|</span><a href="/totalenergy/data/browser/index.php?tbl=T07.07B#/?f=M"
						title="Table 7.7b Electric net summer capacity: Electric power sector"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">7.7c</span>Commercial sector</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec7_22.pdf" title="Table 7.7c Electric net summer capacity: Commercial sector"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T07.07c&freq=m"
						title="Table 7.7c Electric net summer capacity: Commercial sector"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T07.07c"
						title="Table 7.7c Electric net summer capacity: Commercial sector"><span
							class="ico csv"><span>CSV</span></span></a>
					<!--<a href="./pdf/sec7_xx.pdf" title="Table 7.7c Electric net summer capacity: Commercial sector"><span class="ico pdf"><span>PDF (graph)</span></span></a>--><span
						class="pipe">|</span><a href="/totalenergy/data/browser/index.php?tbl=T07.07C#/?f=M"
						title="Table 7.7c Electric net summer capacity: Commercial sector"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">7.7d</span>Industrial sector</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec7_23.pdf" title="Table 7.7d Electric net summer capacity: Industrial sector"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T07.07d&freq=m"
						title="Table 7.7d Electric net summer capacity: Industrial sector"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T07.07d"
						title="Table 7.7d Electric net summer capacity: Industrial sector"><span
							class="ico csv"><span>CSV</span></span></a>
					<!--<a href="./pdf/sec7_xx.pdf" title="Table 7.7d Electric net summer capacity: Industrial sector"><span class="ico pdf"><span>PDF (graph)</span></span></a>--><span
						class="pipe">|</span><a href="/totalenergy/data/browser/index.php?tbl=T07.07D#/?f=M"
						title="Table 7.7d Electric net summer capacity: Industrial sector"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>

			<ul class="numbered">
				<li><span class="number">7.8</span>Capacity factors and usage factors at electric generators:
			</ul>
			<ul class="numbered">
				<li><span class="number">7.8a</span>Total (all sectors)</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec7_24.pdf"
						title="Table 7.8a Capacity factors and usage factors at electric generators: Total (all sectors)"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T07.08a&freq=m"
						title="Table 7.8a Capacity factors and usage factors at electric generators: Total (all sectors)"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T07.08a"
						title="Table 7.8a Capacity factors and usage factors at electric generators: Total (all sectors)"><span
							class="ico csv"><span>CSV</span></span></a>
					<!--<a href="./pdf/sec7_xx.pdf" title="Table 7.8a Capacity factors and usage factors at electric generators: Total (all sectors)"><span class="ico pdf"><span>PDF (graph)</span></span></a>--><span
						class="pipe">|</span><a href="/totalenergy/data/browser/index.php?tbl=T07.08A#/?f=M"
						title="Table 7.8a Capacity factors and usage factors at electric generators: Total (all sectors)"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">7.8b</span>Electric power sector</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec7_25.pdf"
						title="Table 7.8b Capacity factors and usage factors at electric generators: Electric power sector"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T07.08b&freq=m"
						title="Table 7.8b Capacity factors and usage factors at electric generators: Electric power sector"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T07.08b"
						title="Table 7.8b Capacity factors and usage factors at electric generators: Electric power sector"><span
							class="ico csv"><span>CSV</span></span></a>
					<!--<a href="./pdf/sec7_xx.pdf" title="Table 7.8b Capacity factors and usage factors at electric generators: Electric power sector"><span class="ico pdf"><span>PDF (graph)</span></span></a>--><span
						class="pipe">|</span><a href="/totalenergy/data/browser/index.php?tbl=T07.08B#/?f=M"
						title="Table 7.8b Capacity factors and usage factors at electric generators: Electric power sector"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">7.8c</span>Commercial sector</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec7_26.pdf"
						title="Table 7.8c Capacity factors and usage factors at electric generators: Commercial sector"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T07.08c&freq=m"
						title="Table 7.8c Capacity factors and usage factors at electric generators: Commercial sector"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T07.08c"
						title="Table 7.8c Capacity factors and usage factors at electric generators: Commercial sector"><span
							class="ico csv"><span>CSV</span></span></a>
					<!--<a href="./pdf/sec7_xx.pdf" title="Table 7.8c Capacity factors and usage factors at electric generators: Commercial sector"><span class="ico pdf"><span>PDF (graph)</span></span></a>--><span
						class="pipe">|</span><a href="/totalenergy/data/browser/index.php?tbl=T07.08C#/?f=M"
						title="Table 7.8c Capacity factors and usage factors at electric generators: Commercial sector"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">7.8d</span>Industrial sector</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec7_27.pdf"
						title="Table 7.8d Capacity factors and usage factors at electric generators: Industrial sector"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T07.08d&freq=m"
						title="Table 7.8d Capacity factors and usage factors at electric generators: Industrial sector"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T07.08d"
						title="Table 7.8d Capacity factors and usage factors at electric generators: Industrial sector"><span
							class="ico csv"><span>CSV</span></span></a>
					<!--<a href="./pdf/sec7_xx.pdf" title="Table 7.8d Capacity factors and usage factors at electric generators: Industrial sector"><span class="ico pdf"><span>PDF (graph)</span></span></a>--><span
						class="pipe">|</span><a href="/totalenergy/data/browser/index.php?tbl=T07.08D#/?f=M"
						title="Table 7.8d Capacity factors and usage factors at electric generators: Industrial sector"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>

			<ul>
				<!-- class="numbered" -->
				<li>Section notes</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec7_n.pdf" title="Section 7 notes"><span class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
			<ul>
				<!-- class="numbered" -->
				<li>Other notes:</li>
			</ul>
			<ul>
				<!-- class="numbered" -->
				<li>Notes on estimated monthly data (1989&ndash;2000)</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/historical/sec7_estimation.pdf"
						title="Table Notes on estimated monthly data (1989-2000)"><span
							class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
			<ul>
				<!-- class="numbered" -->
				<li>Estimating power sector fuel use</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/historical/sec12_d.pdf" title="Table Estimating power sector fuel use"><span
							class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
			<ul>
				<!-- class="numbered" -->
				<li>Allocating municipal solid waste to biogenic and nonbiogenic energy</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/historical/msw.pdf"
						title="Table Allocating municipal solid waste to biogenic and nonbiogenic energy"><span
							class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
		</div>

		<h3><a name="nuclear"></a>Nuclear energy</h3>
		<div class="accordion-content">
			<ul class="highlight">
				<li class="head">Topic</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec8.pdf" title="entire section 8"><span class="ico pdf"><span>PDF (entire
								section)</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">8.1</span>Nuclear energy overview</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec8_3.pdf" title="Table 8.1 Nuclear energy overview"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T08.01&freq=m"
						title="Table 8.1 Nuclear energy overview"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T08.01"
						title="Table 8.1 Nuclear energy overview"><span class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec8_2.pdf" title="Table 8.1 Nuclear energy overview"><span class="ico pdf"><span>PDF
								(graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T08.01#/?f=M&start=200001"
						title="Table 8.1 Nuclear energy overview  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">8.2</span>Uranium overview</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec8_5.pdf" title="Table 8.2 Uranium overview"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T08.02&freq=m"
						title="Table 8.2 Uranium overview"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T08.02" title="Table 8.2 Uranium overview"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec8_4.pdf" title="Table 8.2 Uranium overview"><span class="ico pdf"><span>PDF
								(graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T08.02#/?f=M&start=200001"
						title="Table 8.2 Uranium overview  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul>
				<!-- class="numbered" -->
				<li>Section notes</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec8_n.pdf" title="Section 8 notes"><span class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
		</div>




		<h3><a name="prices"></a>Energy prices</h3>
		<div class="accordion-content">
			<ul class="highlight">
				<li class="head">Topic</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec9.pdf" title="entire section 9"><span class="ico pdf"><span>PDF (entire
								section)</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">9.1</span>Crude oil price summary</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec9_3.pdf" title="Table 9.1  Crude oil price summary"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T09.01&freq=m"
						title="Table 9.1  Crude oil price summary"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T09.01"
						title="Table 9.1  Crude oil price summary"><span class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec9_2.pdf" title="Table 9.1  Crude oil price summary"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T09.01#/?f=M&start=200001"
						title="Table 9.1  Crude oil price summary  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">9.2</span>F.O.B. costs of crude oil imports from selected countries</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec9_4.pdf"
						title="Table 9.2  F.O.B. costs of crude oil imports from selected countries"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T09.02&freq=m"
						title="Table 9.2  F.O.B. costs of crude oil imports from selected countries"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T09.02"
						title="Table 9.2  F.O.B. costs of crude oil imports from selected countries"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T09.02#/?f=M&start=200001"
						title="Table 9.2  F.O.B. costs of crude oil imports from selected countries  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">9.3</span>Landed costs of crude oil imports from selected countries</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec9_5.pdf"
						title="Table 9.3  Landed costs of crude oil imports from selected countries"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T09.03&freq=m"
						title="Table 9.3  Landed costs of crude oil imports from selected countries"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T09.03"
						title="Table 9.3  Landed costs of crude oil imports from selected countries"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T09.03#/?f=M&start=200001"
						title="Table 9.3  Landed costs of crude oil imports from selected countries  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">9.4</span>Retail motor gasoline and on-highway diesel fuel prices</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec9_6.pdf"
						title="Table 9.4  Retail motor gasoline and on-highway diesel fuel prices"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T09.04&freq=m"
						title="Table 9.4  Retail motor gasoline and on-highway diesel fuel prices"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T09.04"
						title="Table 9.4  Retail motor gasoline and on-highway diesel fuel prices"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T09.04#/?f=M&start=200001"
						title="Table 9.4  Retail motor gasoline and on-highway diesel fuel prices  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">9.5</span>Refiner prices of residual fuel oil</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec9_7.pdf" title="Table 9.5  Refiner prices of residual fuel oil"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T09.05&freq=m"
						title="Table 9.5  Refiner prices of residual fuel oil"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T09.05"
						title="Table 9.5  Refiner prices of residual fuel oil"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec9_2.pdf" title="Table 9.5  Refiner prices of residual fuel oil"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T09.05#/?f=M&start=200001"
						title="Table 9.5  Refiner prices of residual fuel oil  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">9.6</span>Refiner prices of petroleum products for resale</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec9_8.pdf" title="Table 9.6  Refiner prices of petroleum products for resale"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T09.06&freq=m"
						title="Table 9.6  Refiner prices of petroleum products for resale"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T09.06"
						title="Table 9.6  Refiner prices of petroleum products for resale"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T09.06#/?f=M&start=200001"
						title="Table 9.6  Refiner prices of petroleum products for resale  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">9.7</span>Refiner prices of petroleum products to end users</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec9_9.pdf"
						title="Table 9.7  Refiner prices of petroleum products to end users"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T09.07&freq=m"
						title="Table 9.7  Refiner prices of petroleum products to end users"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T09.07"
						title="Table 9.7  Refiner prices of petroleum products to end users"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec9_2.pdf"><span class="ico pdf"
							title="Refiner prices of petroleum products to end users graph"><span>PDF
								(graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T09.07#/?f=M&start=200001"
						title="Table 9.7  Refiner prices of petroleum products to end users  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">9.8</span>Average prices of electricity to ultimate customers</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec9_11.pdf"
						title="Table 9.8  Average prices of electricity to ultimate customers"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T09.08&freq=m"
						title="Table 9.8 Average prices of electricity to ultimate customers"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T09.08"
						title="Table 9.8 Average prices of electricity to ultimate customers"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec9_10.pdf"
						title="Table 9.8 Average prices of electricity to ultimate customers"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T09.08#/?f=M&start=200001"
						title="Table 9.8 Average prices of electricity to ultimate customers - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">9.9</span>Cost of fossil-fuel receipts at electric generating plants</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec9_13.pdf"
						title="Table 9.9  Cost of fossil-fuel receipts at electric generating plants"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T09.09&freq=m"
						title="Table 9.9  Cost of fossil-fuel receipts at electric generating plants"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T09.09"
						title="Table 9.9  Cost of fossil-fuel receipts at electric generating plants"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec9_12.pdf"
						title="Table 9.9  Cost of fossil-fuel receipts at electric generating plants"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T09.09#/?f=M&start=200001"
						title="Table 9.9  Cost of fossil-fuel receipts at electric generating plants  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">9.10</span>Natural gas prices</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec9_15.pdf" title="Table 9.10  Natural gas prices"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T09.10&freq=m"
						title="Table 9.10  Natural gas prices"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T09.10" title="Table 9.10  Natural gas prices"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec9_14.pdf" title="Table 9.10  Natural gas prices"><span class="ico pdf"><span>PDF
								(graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T09.10#/?f=M&start=200001"
						title="Table 9.10  Natural gas prices  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul>
				<!-- class="numbered" -->
				<li>Section notes</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec9_n.pdf" title="Section 9 notes"><span class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
		</div>




		<h3><a name="renewable"></a>Renewable energy</h3>

		<div class="accordion-content">
			<ul class="highlight">
				<li class="head">Topic</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec10.pdf" title="entire section 10"><span class="ico pdf"><span>PDF (entire
								section)</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">10.1</span>Production and consumption by source</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec10_3.pdf" title="Table 10.1  Production and consumption by source"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T10.01&freq=m"
						title="Table 10.1  Production and consumption by source"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T10.01"
						title="Table 10.1  Production and consumption by source"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec10_2.pdf" title="Table 10.1  Production and consumption by source"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T10.01#/?f=M&start=200001"
						title="Table 10.1  Production and consumption by source  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">10.2a</span>Consumption:</span> residential and commercial sectors</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec10_4.pdf"
						title="Table 10.2a Consumption: residential and commercial sectors"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T10.02A&freq=m"
						title="Table 10.2a Consumption: residential and commercial sectors"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T10.02A"
						title="Table 10.2a Consumption: residential and commercial sectors"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec10_2.pdf"
						title="Table 10.2a Consumption: residential and commercial sectors"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T10.02A#/?f=M&start=200001"
						title="Table 10.2a Consumption: residential and commercial sectors  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">10.2b</span>Consumption:</span> industrial sector</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec10_5.pdf" title="Table 10.2b Consumption: industrial sector"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T10.02B&freq=m"
						title="Table 10.2b Consumption: industrial sector"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T10.02B"
						title="Table 10.2b Consumption: industrial sector"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec10_2.pdf" title="Table 10.2b Consumption: industrial sector"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T10.02B#/?f=M&start=200001"
						title="Table 10.2b Consumption: industrial sector  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">10.2c</span>Consumption:</span> transportation and electric power sectors</a>
				</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec10_6.pdf"
						title="Table 10.2c Consumption: transportation and electric power sectors"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T10.02C&freq=m"
						title="Table 10.2c Consumption: transportation and electric power sectors"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T10.02C"
						title="Table 10.2c Consumption: transportation and electric power sectors"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec10_2.pdf"
						title="Table 10.2c Consumption: transportation and electric power sectors"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T10.02C#/?f=M&start=200001"
						title="Table 10.2c Consumption: transportation and electric power sectors - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">10.3</span>Fuel ethanol overview</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec10_7.pdf" title="Table 10.3  Fuel ethanol overview"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T10.03&freq=m"
						title="Table 10.3  Fuel ethanol overview"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T10.03"
						title="Table 10.3  Fuel ethanol overview"><span class="ico csv"><span>CSV</span></span></a><span
						class="pipe">|</span><a href="/totalenergy/data/browser/index.php?tbl=T10.03#/?f=M&start=200001"
						title="Table 10.3  Fuel ethanol overview  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<!--<ul class="numbered">
				<li><span class="number">10.4</span>Biodiesel and other renewable fuels overview </a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec10_8.pdf" title="Table 10.4  Biodiesel and other renewable fuels overview"><span class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T10.04&freq=m" title="Table 10.4  Biodiesel and other renewable fuels overview"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T10.04" title="Table 10.4  Biodiesel and other renewable fuels overview"><span class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a href="/totalenergy/data/browser/index.php?tbl=T10.04#/?f=M&start=200001" title="Table 10.4  Biodiesel and other renewable fuels overview  - View in Total Energy Browser"><span class="ico interactive"><span>Interactive</span></span></a></li>
			</ul>-->
			<ul class="numbered">
				<li><span class="number">10.4a</span>Biodiesel overview</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec10_8.pdf" title="Table 10.4a Biodiesel overview"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T10.04A&freq=m"
						title="Table 10.4a Biodiesel overview"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T10.04A" title="Table 10.4a Biodiesel overview"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T10.04A#/?f=M"
						title="Table 10.4a Biodiesel overview - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">10.4b</span>Renewable diesel fuel overview</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec10_9.pdf" title="Table 10.4b Renewable diesel fuel overview"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T10.04B&freq=m"
						title="Table 10.4b Renewable diesel fuel overview"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T10.04B"
						title="Table 10.4b Renewable diesel fuel overview"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T10.04B#/?f=M"
						title="Table 10.4b Renewable diesel fuel overview  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">10.4c</span>Other biofuels overview</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec10_10.pdf" title="Table 10.4c Other biofuels overview"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T10.04C&freq=m"
						title="Table 10.4c Other biofuels overview"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T10.04C"
						title="Table 10.4c Other biofuels overview"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T10.04C#/?f=M"
						title="Table 10.4c Other biofuels overview  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">10.5</span>Solar energy consumption</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec10_11.pdf" title="Table 10.5 Solar energy consumption"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T10.05&amp;freq=m"
						title="Table 10.5 Solar energy consumption"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T10.05"
						title="Table 10.5 Solar energy consumption"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T10.05#/?f=M&amp;start=200001"
						title="Table 10.5 Solar energy consumption  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">10.6</span>Solar electricity net generation</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec10_12.pdf" title="Table 10.6 Solar electricity net generation"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T10.06&amp;freq=m"
						title="Table 10.6 Solar electricity net generation"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T10.06"
						title="Table 10.6 Solar electricity net generation"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T10.06#/?f=M&amp;start=200001"
						title="Table 10.6 Solar electricity net generation  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul>
				<li class="note">Notes:</li>
			</ul>
			<ul>
				<li>Section notes</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec10_n.pdf" title="Section 10 notes"><span
							class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
			<ul>
				<li>Allocating municipal solid waste to biogenic and non-biogenic energy</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/historical/msw.pdf"
						title="Table Allocating municipal solid waste to biogenic and non-biogenic energy"><span
							class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
			</li>
			</ul>
		</div>



		<?php /* 
<h3><a name="international"></a>International petroleum</h3>
<div class="accordion-content">
    <ul class="highlight">
        <li class="head">Topic</li>
        <li class="hide-bullet"><span class="formats">Available formats:</span> 
            <a href="./pdf/sec11.pdf" title="entire section 11"><span class="ico pdf"><span>PDF (entire section)</span></span></a></li>
    </ul>
    <ul class="numbered">
        <li><span class="number">11.1</span>World crude oil production:</li>
    </ul>
    <ul class="numbered">
        <li><span class="number">11.1a</span>OPEC members</a></li>
        <li class="hide-bullet"><span class="formats">Available formats:</span> 
            <a href="./pdf/sec11_4.pdf" title="Table 11.1a  OPEC members"><span class="ico pdf"><span>PDF</span></span></a>
            <a href="/totalenergy/data/browser/xls.php?tbl=T11.01A&freq=m" title="Table 11.1a  OPEC members"><span class="ico xls"><span>XLS</span></span></a>
            <a href="/totalenergy/data/browser/csv.php?tbl=T11.01A" title="Table 11.1a  OPEC members"><span class="ico csv"><span>CSV</span></span></a>
            <a href="./pdf/sec11_2.pdf" title="Table 11.1a  OPEC members"><span class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a href="/totalenergy/data/browser/index.php?tbl=T11.01A#/?f=M&start=200001" title="Table 11.1a  OPEC members  - View in Total Energy Browser"><span class="ico interactive"><span>Interactive</span></span></a></li>
    </ul>
    <ul class="numbered">
        <li><span class="number">11.1b</span>Persian Gulf nations, non-OPEC, and world </a></li>
        <li class="hide-bullet"><span class="formats">Available formats:</span> 
            <a href="./pdf/sec11_5.pdf" title="Table 11.1b  Persian Gulf nations, non-OPEC, and world"><span class="ico pdf"><span>PDF</span></span></a>
            <a href="/totalenergy/data/browser/xls.php?tbl=T11.01B&freq=m" title="Table 11.1b  Persian Gulf nations, non-OPEC, and world"><span class="ico xls"><span>XLS</span></span></a>
            <a href="/totalenergy/data/browser/csv.php?tbl=T11.01B" title="Table 11.1b  Persian Gulf nations, non-OPEC, and world"><span class="ico csv"><span>CSV</span></span></a>
            <a href="./pdf/sec11_3.pdf" title="Table 11.1b  Persian Gulf nations, non-OPEC, and world"><span class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a href="/totalenergy/data/browser/index.php?tbl=T11.01B#/?f=M&start=200001" title="Table 11.1b  Persian Gulf nations, non-OPEC, and world  - View in Total Energy Browser"><span class="ico interactive"><span>Interactive</span></span></a></li>
    </ul>
    <ul class="numbered">
        <li><span class="number">11.2</span>Petroleum consumption in OECD countries</a></li>
        <li class="hide-bullet"><span class="formats">Available formats:</span> 
            <a href="./pdf/sec11_7.pdf" title="Table 11.2  Petroleum consumption in OECD countries"><span class="ico pdf"><span>PDF</span></span></a>
            <a href="/totalenergy/data/browser/xls.php?tbl=T11.02&freq=m" title="Table 11.2  Petroleum consumption in OECD countries"><span class="ico xls"><span>XLS</span></span></a>
            <a href="/totalenergy/data/browser/csv.php?tbl=T11.02" title="Table 11.2  Petroleum consumption in OECD countries"><span class="ico csv"><span>CSV</span></span></a>
            <a href="./pdf/sec11_6.pdf" title="Table 11.2  Petroleum consumption in OECD countries"><span class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a href="/totalenergy/data/browser/index.php?tbl=T11.02#/?f=M&start=200001" title="Table 11.2  Petroleum consumption in OECD countries  - View in Total Energy Browser"><span class="ico interactive"><span>Interactive</span></span></a></li>
    </ul>
    <ul class="numbered">
        <li><span class="number">11.3</span>Petroleum stocks in OECD countries</a></li>
        <li class="hide-bullet"><span class="formats">Available formats:</span> 
            <a href="./pdf/sec11_9.pdf" title="Table 1.3  Petroleum stocks in OECD countries"><span class="ico pdf"><span>PDF</span></span></a>
            <a href="/totalenergy/data/browser/xls.php?tbl=T11.03&freq=m" title="Table 1.3  Petroleum stocks in OECD countries"><span class="ico xls"><span>XLS</span></span></a>
            <a href="/totalenergy/data/browser/csv.php?tbl=T11.03" title="Table 1.3  Petroleum stocks in OECD countries"><span class="ico csv"><span>CSV</span></span></a>
            <a href="./pdf/sec11_8.pdf" title="Table 1.3  Petroleum stocks in OECD countries"><span class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a href="/totalenergy/data/browser/index.php?tbl=T11.03#/?f=M&start=200001" title="Table 1.3  Petroleum stocks in OECD countries  - View in Total Energy Browser"><span class="ico interactive"><span>Interactive</span></span></a></li>
    </ul>
    <ul><!-- class="numbered" -->
        <li>Section notes</li>
        <li class="hide-bullet"><span class="formats">Available formats:</span> 
            <a href="./pdf/sec11_n.pdf" title="Section 11 notes"><span class="ico pdf"><span>PDF</span></span></a></li>
    </ul>
</div>
*/ ?>



		<h3><a name="environment"></a>Environment</h3>
		<div class="accordion-content">
			<ul class="highlight">
				<li class="head">Topic</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec11.pdf" title="entire section 11"><span class="ico pdf"><span>PDF (entire
								section)</span></span></a>
				</li>
			</ul>
			<ul>
				<li>Carbon dioxide emissions from energy consumption:</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">11.1</span>By source</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec11_3.pdf"
						title="Table 11.1 Carbon dioxide emissions from energy consumption: By source"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T11.01&freq=m"
						title="Table 11.1 Carbon dioxide emissions from energy consumption: By source"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T11.01"
						title="Table 11.1 Carbon dioxide emissions from energy consumption: By source"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec11_2.pdf"
						title="Table 11.1 Carbon dioxide emissions from energy consumption: By source"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T11.01#/?f=M&start=200001"
						title="Table 11.1 Carbon dioxide emissions from energy consumption: By source - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">11.2</span>Residential sector</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec11_5.pdf"
						title="Table 11.2 Carbon dioxide emissions from energy consumption: Residential sector"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T11.02&freq=m"
						title="Table 11.2 Carbon dioxide emissions from energy consumption: Residential sector"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T11.02"
						title="Table 11.2 Carbon dioxide emissions from energy consumption: Residential sector"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec11_4.pdf"
						title="Table 11.2 Carbon dioxide emissions from energy consumption: Residential sector"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T11.02#/?f=M&start=200001"
						title="Table 11.2 Carbon dioxide emissions from energy consumption: Residential sector - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">11.3</span>Commercial sector</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec11_6.pdf"
						title="Table 11.3 Carbon dioxide emissions from energy consumption:  Commercial sector"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T11.03&freq=m"
						title="Table 11.3 Carbon dioxide emissions from energy consumption:  Commercial sector"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T11.03"
						title="Table 11.3 Carbon dioxide emissions from energy consumption:  Commercial sector"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec11_4.pdf"
						title="Table 11.3 Carbon dioxide emissions from energy consumption:  Commercial sector"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T11.03#/?f=M&start=200001"
						title="Table 11.3 Carbon dioxide emissions from energy consumption:  Commercial sector - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">11.4</span>Industrial sector</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec11_7.pdf"
						title="Table 11.4 Carbon dioxide emissions from energy consumption:  Industrial sector"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T11.04&freq=m"
						title="Table 11.4 Carbon dioxide emissions from energy consumption:  Industrial sector"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T11.04"
						title="Table 11.4 Carbon dioxide emissions from energy consumption:  Industrial sector"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec11_4.pdf"
						title="Table 11.4 Carbon dioxide emissions from energy consumption:  Industrial sector"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T11.04#/?f=M&start=200001"
						title="Table 11.4 Carbon dioxide emissions from energy consumption:  Industrial sector - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">11.5</span>Transportation sector</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec11_8.pdf"
						title="Table 11.5 Carbon dioxide emissions from energy consumption:  Transportation sector"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T11.05&freq=m"
						title="Table 11.5 Carbon dioxide emissions from energy consumption:  Transportation sector"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T11.05"
						title="Table 11.5 Carbon dioxide emissions from energy consumption:  Transportation sector"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec11_4.pdf"
						title="Table 11.5 Carbon dioxide emissions from energy consumption:  Transportation sector"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T11.05#/?f=M&start=200001"
						title="Table 11.5 Carbon dioxide emissions from energy consumption:  Transportation sector - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">11.6</span>Electric power sector</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec11_9.pdf"
						title="Table 11.6 Carbon dioxide emissions from energy consumption:  Electric power sector"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T11.06&freq=m"
						title="Table 11.6 Carbon dioxide emissions from energy consumption:  Electric power sector"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T11.06"
						title="Table 11.6 Carbon dioxide emissions from energy consumption:  Electric power sector"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="./pdf/sec11_4.pdf"
						title="Table 11.6 Carbon dioxide emissions from energy consumption:  Electric power sector"><span
							class="ico pdf"><span>PDF (graph)</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T11.06#/?f=M&start=200001"
						title="Table 11.6 Carbon dioxide emissions from energy consumption:  Electric power sector - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">11.7</span>Biomass</a></li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec11_10.pdf"
						title="Table 11.7 Carbon dioxide emissions from energy consumption:  Biomass"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=T11.07&freq=m"
						title="Table 11.7 Carbon dioxide emissions from energy consumption:  Biomass"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=T11.07"
						title="Table 11.7 Carbon dioxide emissions from energy consumption:  Biomass"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=T11.07#/?f=M&start=200001"
						title="Table 11.7 Carbon dioxide emissions from energy consumption:  Biomass - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul>
				<!-- class="numbered" -->
				<li>Section notes</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec11_n.pdf" title="Section 11 notes"><span
							class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
		</div>




		<h3><a name="appendices"></a>Appendices (heat rates, conversion factors, and more) </h3>
		<div class="accordion-content">
			<ul class="highlight">
				<li class="head">Topic</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec12.pdf" title="Appendices"><span class="ico pdf"><span>PDF (entire
								section)</span></span></a>
				</li>
			</ul>
			<ul>
				<!-- class="numbered" -->
				<li>Appendix A</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/mer_A_FULL.pdf" title="Appendix A"><span class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>

			<ul>
				<!-- class="numbered" -->
				<li>Approximate heat content of:</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">A1</span>Petroleum and biofuels</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec12_2.pdf" title="Table A1  Petroleum and biofuels"><span
							class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">A2</span>Petroleum production, imports, and exports</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec12_3.pdf" title="Table A2  Petroleum production, imports, and exports"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=TA2&freq=a"
						title="Table A2  Petroleum production, imports, and exports"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=TA2"
						title="Table A2  Petroleum production, imports, and exports"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=TA2#/?f=A&start=1991"
						title="Table A2  Petroleum production, imports, and exports - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">A3</span>Petroleum consumption and fuel ethanol</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec12_4.pdf" title="Table A3  Petroleum consumption and fuel ethanol"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=TA3&freq=a"
						title="Table A3  Petroleum consumption and fuel ethanol"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=TA3"
						title="Table A3  Petroleum consumption and fuel ethanol"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=TA3#/?f=A&start=1991"
						title="Table A3  Petroleum consumption and fuel ethanol - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">A4</span>Natural gas</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec12_5.pdf" title="Table A4  Natural gas"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=TA4&freq=a" title="Table A4  Natural gas"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=TA4" title="Table A4  Natural gas"><span
							class="ico csv"><span>CSV</span></span></a>
					<a href="/totalenergy/data/browser/index.php?tbl=TA4#/?f=A&start=1991"
						title="Table A4  Natural gas - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">A5</span>Coal and coal coke</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec12_6.pdf" title="Table A5  Coal and coal coke"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=TA5&freq=a"
						title="Table A5  Coal and coal coke"><span class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=TA5" title="Table A5  Coal and coal coke"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=TA5#/?f=A&start=1991"
						title="Table A5  Coal and coal coke - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">A6</span>Approximate heat rates for electricity, and heat content of
					electricity</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec12_7.pdf" title="Table A6  Approximate heat rates for electricity,"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=TA6&freq=a"
						title="Table A6  Approximate heat rates for electricity,"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=TA6"
						title="Table A6  Approximate heat rates for electricity,"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=TA6#/?f=A&start=1991"
						title="Table A6  Approximate heat rates for electricity, - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul>
				<!-- class="numbered" -->
				<li>Appendix A documentation</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/mer_a_doc.pdf" title="Appendix A documentation"><span
							class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
			<ul>
				<!-- class="numbered" -->
				<li>Appendix B</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/mer_b.pdf" title="Appendix B"><span class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">B1</span>Metric conversion factors</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec12_19.pdf" title="Table B1 Metric conversion factors"><span
							class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">B2</span>Metric prefixes</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec12_20.pdf" title="Table B2 Metric prefixes"><span
							class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">B3</span>Other physical conversion factors</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec12_20.pdf" title="Table B3 Other physical conversion factors"><span
							class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
			<ul>
				<!-- class="numbered" -->
				<li>Appendix C</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/mer_c.pdf" title="Appendix C"><span class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">C1</span>Population, U.S. gross domestic product, and U.S. gross output</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec12_22.pdf"
						title="Table C1 Population, U.S. gross domestic product, and U.S. gross output"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=TC1&freq=a"
						title="Table C1  Population, U.S. gross domestic product, and U.S. gross output"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=TC1"
						title="Table C1  Population, U.S. gross domestic product, and U.S. gross output"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=TC1#/?f=A&start=1991"
						title="Table C1  Population, U.S. gross domestic product, and U.S. gross output  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul>
				<!-- class="numbered" -->
				<li>Appendix D</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/mer_d.pdf" title="Appendix D"><span class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">D1</span>Estimated primary energy consumption in the United States, selected
					years, 1635&ndash;1945</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec12_24.pdf"
						title="Table D1 Estimated primary energy consumption in the United States, selected years, 1635-1945"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/monthly/xls/Table_D1.xlsx"
						title="Table D1  Estimated primary energy consumption in the United States, selected years, 1635-1945"><span
							class="ico xls"><span>XLS</span></span></a>
				</li>
			</ul>
			<ul>
				<!-- class="numbered" -->
				<li>Appendix D section notes</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec12_25.pdf" title="appendix D section notes"><span
							class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
			<ul>
				<!-- class="numbered" -->
				<li>Appendix E</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/mer_e.pdf" title="Appendix E"><span class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">E1</span>Primary Energy Overview, Fossil Fuel Equivalency Approach
				</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec12_30.pdf"
						title="Table E1 Primary Energy Overview, Fossil Fuel Equivalency Approach"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=TE1&amp;freq=a"
						title="Table E1 Primary Energy Overview, Fossil Fuel Equivalency Approach"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=TE1"
						title="Table E1 Primary Energy Overview, Fossil Fuel Equivalency Approach"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=TE1#/?f=A&amp;start=1991"
						title="Table E1 Primary Energy Overview, Fossil Fuel Equivalency Approach  -  View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">E2</span>Primary Energy Production by Source, Fossil Fuel Equivalency Approach
				</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec12_31.pdf"
						title="Table E2 Primary Energy Production by Source, Fossil Fuel Equivalency Approach"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=TE2&amp;freq=a"
						title="Table E2 Primary Energy Production by Source, Fossil Fuel Equivalency Approach"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=TE2"
						title="Table E2 Primary Energy Production by Source, Fossil Fuel Equivalency Approach"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=TE2#/?f=A&amp;start=1991"
						title="Table E2 Primary Energy Production by Source, Fossil Fuel Equivalency Approach - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">E3</span>Primary Energy Consumption by Source, Fossil Fuel Equivalency Approach
				</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec12_32.pdf"
						title="Table E3 Primary Energy Consumption by Source, Fossil Fuel Equivalency Approach"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=TE3&amp;freq=a"
						title="Table E3 Primary Energy Consumption by Source, Fossil Fuel Equivalency Approach"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=TE3"
						title="Table E3 Primary Energy Consumption by Source, Fossil Fuel Equivalency Approach"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=TE3#/?f=A&amp;start=1991"
						title="Table E3 Primary Energy Consumption by Source, Fossil Fuel Equivalency Approach - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">E4</span>Renewable Energy Production and Consumption by Source, Fossil Fuel Equivalency Approach
				</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec12_33.pdf"
						title="Table E4 Renewable Energy Production and Consumption by Source, Fossil Fuel Equivalency Approach"><span
							class="ico pdf"><span>PDF</span></span></a>
					<a href="/totalenergy/data/browser/xls.php?tbl=TE4&amp;freq=a"
						title="Table E4 Renewable Energy Production and Consumption by Source, Fossil Fuel Equivalency Approach"><span
							class="ico xls"><span>XLS</span></span></a>
					<a href="/totalenergy/data/browser/csv.php?tbl=TE4"
						title="Table E4 Renewable Energy Production and Consumption by Source, Fossil Fuel Equivalency Approach"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span><a
						href="/totalenergy/data/browser/index.php?tbl=TE4#/?f=A&amp;start=1991"
						title="Table E4 Renewable Energy Production and Consumption by Source, Fossil Fuel Equivalency Approach - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul>
				<!-- class="numbered" -->
				<li>Appendix E documentation</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec12_28.pdf" title="Appendix A documentation"><span
							class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
			<!-- ---------------------------------------- -->
			<ul>
				<!-- class="numbered" -->
				<li>Appendix F</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/mer_F_FULL.pdf" title="Appendix F"><span class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
			<ul class="numbered">
				<li><span class="number">F1</span>Electric Vehicle Charging Infrastructure</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec12_36.pdf"
						title="Table F1. Electric Vehicle Charging Infrastructure"><span
							class="ico pdf"><span>PDF</span></span></a>
					
					<a href="/totalenergy/data/browser/xls.php?tbl=TF1&amp;freq=a"
						title="Table F1. Electric Vehicle Charging Infrastructure"><span
							class="ico xls"><span>XLS</span></span></a>
					
					<a href="/totalenergy/data/browser/csv.php?tbl=TF1"
						title="Table F1. Electric Vehicle Charging Infrastructure"><span
							class="ico csv"><span>CSV</span></span></a><span class="pipe">|</span>
							
					<a
						href="/totalenergy/data/browser/index.php?tbl=TF1#/?f=A&amp;start=2015"
						title="Table F1. Electric Vehicle Charging Infrastructure  - View in Total Energy Browser"><span
							class="ico interactive"><span>Interactive</span></span></a>
				</li>
			</ul>
			<ul>
				<!-- class="numbered" -->
				<li>Appendix F microdata file</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./full_data_MER.zip" title="Appendix F microdata file"><span class="ico zip"><span>ZIP</span></span></a>
				</li>
			</ul>
			<ul>
				<li>Appendix F monthly state file</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./State_data_MER.xlsx" title="Appendix F monthly state file"><span class="ico xls"><span>XLS</span></span></a>
				</li>
			</ul>
			<ul>
				<li>Appendix F documentation</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/MER_F_DOC.pdf" title="Appendix F documentation"><span class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
			<!-- ---------------------------------------- -->
		</div>
		<h3><a name="Glossary"></a>Glossary</h3>
		<div class="accordion-content">
			<ul>
				<li class="head">Glossary</li>
				<li class="hide-bullet"><span class="formats">Available formats:</span>
					<a href="./pdf/sec13.pdf" title="Glossary"><span class="ico pdf"><span>PDF</span></span></a>
				</li>
			</ul>
		</div>
	</div>



	<ul>
		<li class="foot"><a href="/about/contact/totalenergy.php">Total Energy Experts</a></li>
	</ul>
</div>