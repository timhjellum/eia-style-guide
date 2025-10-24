<style>
	#Default:active {
		color: red;
	}

	#Basic:active {
		color: red;
	}

	#FullWidth:active {
		color: red;
	}

	#Caption:active {
		color: red;
	}

	#HeadDouble:active {
		color: red;
	}

	#RowHead:active {
		color: red;
	}

	#RowTotal:active {
		color: red;
	}

	#RowBold:active {
		color: red;
	}

	#RowIndent:active {
		color: red;
	}

	#RowSectionHead:active {
		color: red;
	}

	#RowSectionDivider:active {
		color: red;
	}

	#ColumnHighlight:active {
		color: red;
	}

	#ColumnDivider:active {
		color: red;
	}

	#ColumnAlign:active {
		color: red;
	}

	#ColumnHide:active {
		color: red;
	}

	#Foot:active {
		color: red;
	}

	#Footnotes:active {
		color: red;
	}

	#Stacked:active {
		color: red;
	}

	#RowSelected:active {
		color: red;
	}

	#HolidaySchedule:active {
		color: red;
	}

	.tertiary-table-nav {
		display: block;
	}
</style>
<a id="scrollTop" href>
  <div></div>
</a>
<aside>
  <nav>
    <ul>
    </ul>
  </nav>
</aside>
<main>
  <h1 class="eia-h1">Introduction</h1></h1>
  <section>
    <div class="eia-container">
      <!-- h2 class="eia-h2">Basic Table</h2 -->
      <!-- p class="eia-para"></p -->
      <h3 class="eia-h3">Example</h3>
      <div class="eia-card">
        <div class="l-margin-bottom eia-container-resizer">

		<div class="basic-table">
			<table class="basic-table full-width">
				<thead>
					<tr>
						<th scope="col"><code>left aligned</code></th>
						<th scope="col"><code>right aligned</code></th>
						<th scope="col"><code>right aligned</code></th>
						<th scope="col"><code>right aligned</code></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<td scope="row"><code>left aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td colSpan="4" scope="colgroup">
							<code>left aligned</code>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="Basic">&lt;div class="basic-table"&gt;
  &lt;table class="basic-table full-width"&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td scope="row"&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
    &lt;tfoot&gt;
      &lt;tr&gt;
        &lt;td colspan="4" scope="colgroup"&gt;
			...
&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tfoot&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#Basic">
				<span></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$     full-width    $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="fullWidth">
	<div class="eia-container">
		<h3 class="">Full Width</h3>
		<p>
			Adding a <code>&lt;full-width&gt;</code> to the table class ( &lt;table class="basic-table full-width&gt;).
		</p>

		<div class="basic-table">
			<table class="basic-table full-width">
				<thead>
					<tr>
						<th scope="col"><code>left aligned</code></th>
						<th scope="col"><code>right aligned</code></th>
						<th scope="col"><code>right aligned</code></th>
						<th scope="col"><code>right aligned</code></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td scope="row"><code>left aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<td scope="row"><code>left aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<td scope="row"><code>left aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<td scope="row"><code>left aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td colSpan="4" scope="colgroup"><code>left aligned</code>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>

		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="FullWidth">&lt;div class="basic-table"&gt;
  &lt;table class="basic-table full-width"&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope="col"&gt;&lt;/th&gt;
        &lt;th scope="col"&gt;&lt;/th&gt;
        &lt;th scope="col"&gt;&lt;/th&gt;
        &lt;th scope="col"&gt;&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;td scope="row"&gt;&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td scope="row"&gt;&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td scope="row"&gt;&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td scope="row"&gt;&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
    &lt;tfoot&gt;
      &lt;tr&gt;
        &lt;td colSpan="4" scope="colgroup"&gt;
&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tfoot&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#FullWidth">
				<span></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$     caption    $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="caption">
	<div class="eia-container">
		<h3 class="">Caption</h3>
		<p><code>caption</code></p>
		<div class="basic-table">
			<table class="basic-table full-width">
				<caption>
					Primary Caption Goes Here
					<br />
					<span>(Secondary Caption if needed)</span>
				</caption>
				<thead>
					<tr>
						<th scope="col">...</th>
						<th scope="col">...</th>
						<th scope="col">...</th>
						<th scope="col">...</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>...</td>
						<td>...</td>
						<td>...</td>
						<td>...</td>
					</tr>
				</tbody>
			</table>
		</div>

		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="Caption">&lt;div class="basic-table"&gt;
  &lt;table class="basic-table full-width"&gt;
&lt;caption&gt;
		Primary Caption Goes Here
&lt;br&gt;
&lt;span&gt;(Secondary Caption if needed)&lt;/span&gt;
&lt;/caption&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#Caption">
				<span></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$      section      $$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section>
	<div class="eia-container">
		<h2 class="eia-sub-heading uk-text-center">HEAD</h2>
		<p><code>&lt;head&gt;...&lt;/head&gt;</code></p>
		<ul class="  uk-flex-center ">
			<li>
				<div class="eia-card prototype-table">
					<div class="prototype-table-inside">
						<div class="prototype-table-cell active">
							<div class="prototype-column">head</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">1</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">2</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">3</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">4</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">5</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">6</div>
						</div>
						<div class="flex-break"></div>
						<div class="prototype-table-cell">
							<div class="prototype-column">1</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">2</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">3</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">4</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">5</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">6</div>
						</div>
						<div class="flex-break"></div>
						<div class="prototype-table-cell">
							<div class="prototype-column">foot</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$     double-head    $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="doubleHead">
	<div class="eia-container">
		<h3 class="">Double Head</h3>
		<a name="DoubleHeader"></a>
		<div class="uk-section uk-section-muted ">
			<h3 id="" class=""><span class="uk-label uk-label-danger">ACCESSIBILITY REQUIREMENT</span></h3>
			<p class="accessibility p">
				Add a <code>scope="colgroup"</code> whenever you use a <code>colspan="x"</code>.
			</p>
		</div>
		<div class="basic-table">
			<table class="basic-table full-width">
				<thead class="double-header">
					<tr scope="colgroup">
						<th scope="col"></th>
						<th colSpan="2" scope="colgroup"><code>left aligned</code>
						</th>
						<th colSpan="2" scope="colgroup"><code>left aligned</code>
						</th>
					</tr>
					<tr>
						<th scope="col"><code>left aligned</code></th>
						<th scope="col"><code>right aligned</code></th>
						<th scope="col"><code>right aligned</code></th>
						<th scope="col"><code>right aligned</code></th>
						<th scope="col"><code>right aligned</code></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td scope="row"><code>left aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<td scope="row"><code>left aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="DoubleHeader">&lt;div class="basic-table"&gt;
  &lt;table class="basic-table full-width"&gt;
        &lt;thead class="double-header"&gt;
      &lt;tr scope="colgroup"&gt;
        &lt;th scope="col"&gt;&lt;/th&gt;
        &lt;th colspan="2" scope="colgroup"&gt;
&lt;/th&gt;
        &lt;th colspan="2" scope="colgroup"&gt;
&lt;/th&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="col"&gt;&lt;/th&gt;
        &lt;th scope="col"&gt;&lt;/th&gt;
        &lt;th scope="col"&gt;&lt;/th&gt;
        &lt;th scope="col"&gt;&lt;/th&gt;
        &lt;th scope="col"&gt;&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;td scope="row"&gt;&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td scope="row"&gt;&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#DoubleHeader">
				<span></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$        Head Row         $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="rowHead">
	<div class="eia-container">
		<h3 class="">Row head</h3>
		<p>
			Adding a <code>class="sectionhead"</code> to the table row.
		</p>
		<div class="uk-section uk-section-muted ">
			<h3 id="" class=""><span class="uk-label uk-label-danger">ACCESSIBILITY REQUIREMENT</span></h3>
			<p class="accessibility p">
				Add a <code>scope="colgroup"</code> whenever you use a <code>colspan="x"</code>.
			</p>
		</div>

		<div class="basic-table">
			<table class="basic-table full-width">
				<thead>
					<tr>
						<th scope="col">...</th>
						<th scope="col">...</th>
						<th scope="col">...</th>
						<th scope="col">...</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<td colSpan="4" scope="colgroup" class="sectionhead">
							Aligned-left
						</td>
					</tr>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>

					<tr class="sectionhead">
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
				</tbody>
			</table>
		</div><!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="RowSectionHead">&lt;div class="basic-table"&gt;
  &lt;table class="basic-table full-width"&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td colspan="4" scope="colgroup" class="sectionhead"&gt;
&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class="sectionhead"&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#RowSectionHead">
				<span></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$      section      $$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section>
	<div class="eia-container">
		<h2 class="eia-sub-heading uk-text-center">Table Rows</h2>
		<p><code>    &lt;tbody&gt;...    &lt;/tbody&gt;</code></p>
		<p><code>&lt;head&gt;...&lt;/head&gt;</code></p>
		<ul class="  uk-flex-center ">
			<li>
				<div class="eia-card prototype-table">
					<div class="prototype-table-inside">
						<div class="prototype-table-cell">
							<div class="prototype-column">head</div>
						</div>
						<div class="prototype-table-cell active">
							<div class="prototype-column">1</div>
						</div>
						<div class="prototype-table-cell active">
							<div class="prototype-column">2</div>
						</div>
						<div class="prototype-table-cell active">
							<div class="prototype-column">3</div>
						</div>
						<div class="prototype-table-cell active">
							<div class="prototype-column">4</div>
						</div>
						<div class="prototype-table-cell active">
							<div class="prototype-column">5</div>
						</div>
						<div class="prototype-table-cell active">
							<div class="prototype-column">6</div>
						</div>
						<div class="flex-break"></div>
						<div class="prototype-table-cell">
							<div class="prototype-column">1</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">2</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">3</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">4</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">5</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">6</div>
						</div>
						<div class="flex-break"></div>
						<div class="prototype-table-cell">
							<div class="prototype-column">foot</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$         Bold Row        $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="rowBold">
	<div class="eia-container">
		<h3 class="">Row Bold</h3>
		<a name="RowBold"></a>
		<p>
			Adding a <code>class="bold"</code> to the table row ( &lt;tr&gt;).
		</p>
		<p class="accessibility p">
			<strong>
				<span class="accessibility-requirement">Accessibility requirement</span>
			</strong>
			Add a <code>scope="colgroup"</code> whenever you use a <code>colspan="x"</code>.
		</p>

		<div class="basic-table">
			<table class="basic-table full-width">
				<thead>
					<tr>
						<th scope="col">...</th>
						<th scope="col">...</th>
						<th scope="col">...</th>
						<th scope="col">...</th>
					</tr>
				</thead>
				<tbody>
					<tr class="bold">
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr class="bold">
						<td colSpan="4" scope="colgroup">
							Aligned-left
						</td>
					</tr>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="RowBold">&lt;div class="basic-table"&gt;
  &lt;table class="basic-table full-width"&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr class="bold"&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class="bold"&gt;
        &lt;td colspan="4" scope="colgroup"&gt;
			Aligned-left
&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#RowBold">
				<span></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$     row-section-head    $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="rowHead">
	<div class="eia-container">
		<h3 class="">Row Head</h3>
		<a name="RowHead"></a>

		Table Row Head (<span class="accessibility-requirement">Accessibility requirement</span>)
		</h2>
		<p>
			Adding a <code>        &lt;th scope="row"&gt;&lt;/th&gt;</code> to the first cell ( &lt;th&gt; or &lt;td&gt;) in a table row.
			<br />
			<strong>Note:</strong> This does not change the appearance and is ony added for accessibility.
		</p>
		<div class="basic-table">
			<table class="basic-table full-width">
				<thead>
					<tr>
						<th scope="col">...</th>
						<th scope="col">...</th>
						<th scope="col">...</th>
						<th scope="col">...</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="RowHead">&lt;div class="basic-table"&gt;
  &lt;table class="basic-table full-width"&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#RowHead">
				<span></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$     row-indent    $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="rowIndent">
	<div class="eia-container">
		<h3 class="">Row Indent</h3>
		<a name="RowIndent"></a>
		<p>
			Adding a <code>class="level-1/2/3-indent"</code> to the first table cell.
		</p>

		<div class="basic-table">
			<table class="basic-table full-width">
				<thead>
					<tr>
						<th scope="col">...</th>
						<th scope="col">...</th>
						<th scope="col">...</th>
						<th scope="col">...</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<th scope="row" class="level-1-indent">
							Indent-one, aligned-left
						</th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<th scope="row" class="level-2-indent">
							Indent-two, aligned-left
						</th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<th scope="row" class="level-3-indent">
							Indent-three, aligned-left
						</th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="RowIndent">&lt;div class="basic-table"&gt;
  &lt;table class="basic-table full-width"&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row" class="level-1-indent"&gt;
			Indent-one, aligned-left
&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row" class="level-2-indent"&gt;
			Indent-two, aligned-left
&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row" class="level-3-indent"&gt;
			Indent-three, aligned-left
&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#RowIndent">
				<span></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$     row-Section-divider    $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="rowDivider">
	<div class="eia-container">
		<h3 class="">Row (Horizontal) Divider</h3>
		<p>
			Adding a <code>class="divider"</code> to the table row.
		</p>
		<div class="uk-section uk-section-muted ">
			<h3 id="" class=""><span class="uk-label uk-label-danger">ACCESSIBILITY REQUIREMENT</span></h3>
			<p class="accessibility p">
				Add a <code>scope="colgroup"</code> whenever you use a <code>colspan="x"</code>.
			</p>
		</div>
		<div class="basic-table">
			<table class="basic-table full-width">
				<caption>Caption</caption>
				<thead>
					<tr>
						<th scope="col">...</th>
						<th scope="col">...</th>
						<th scope="col">...</th>
						<th scope="col">...</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr class="divider">
						<th scope="row">Divider Row, Aligned-left</th>
						<td>Divider Row, Aligned-right</td>
						<td>Divider Row, Aligned-right</td>
						<td>Divider Row, Aligned-right</td>
					</tr>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr class="divider">
						<td colSpan="4" scope="colgroup">
							Divider
						</td>
					</tr>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
				</tbody>
			</table>
		</div><!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="RowSectionDivider">&lt;div class="basic-table"&gt;
  &lt;table class="basic-table full-width"&gt;
&lt;caption&gt;Caption&lt;/caption&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class="divider"&gt;
        &lt;th scope="row"&gt;Divider Row, Aligned-left&lt;/th&gt;
        &lt;td&gt;Divider Row, Aligned-right&lt;/td&gt;
        &lt;td&gt;Divider Row, Aligned-right&lt;/td&gt;
        &lt;td&gt;Divider Row, Aligned-right&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class="divider"&gt;
        &lt;td colspan="4" scope="colgroup"&gt;
			Divider
&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>

		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#RowSectionDivider">
				<span></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$     row-total    $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="rowTotal">
	<div class="eia-container">
		<h3 class="">Row Total</h3>
		<div class="basic-table">
			<table class="basic-table full-width">
				<thead>
					<tr>
						<th scope="col">...</th>
						<th scope="col">...</th>
						<th scope="col">...</th>
						<th scope="col">...</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr class="totals">
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
				</tbody>
			</table>
		</div><!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="RowTotal">&lt;div class="basic-table"&gt;
  &lt;table class="basic-table full-width"&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class="totals"&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#RowTotal">
				<span></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>

<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$      section      $$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section>
	<div class="eia-container">
		<h2 class="eia-sub-heading uk-text-center">Table Columns</h2>
		<p><code>    &lt;tbody&gt;...    &lt;/tbody&gt;</code></p>
		<ul class="  uk-flex-center ">
			<li>
				<div class="eia-card prototype-table">
					<div class="prototype-table-inside">
						<div class="prototype-table-cell">
							<div class="prototype-column">head</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">1</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column active">2</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">3</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column active">4</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">5</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column active">6</div>
						</div>
						<div class="flex-break"></div>
						<div class="prototype-table-cell">
							<div class="prototype-column">1</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column active">2</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">3</div>
						</div>
						<div class="prototype-table-cell active">
							<div class="prototype-column">4</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">5</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column active">6</div>
						</div>
						<div class="flex-break"></div>
						<div class="prototype-table-cell">
							<div class="prototype-column">foot</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$     column-align    $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="columnAlign">
	<div class="eia-container">
		<h3 class="">Column Align</h3>
		<a name="ColumnAlign"></a>
		<p>
			Adding a <code>class="align-left-col-1/2/3/4/5/6/7/8/9/10"</code> to the to the table class (Note, this may not have the desired effect if there are spanned columns).
		</p>

		<div class="basic-table">
			<table class="basic-table full-width align-left-col-2">
				<thead>
					<tr>
						<th scope="col"><code>left aligned</code></th>
						<th scope="col"><code>left aligned</code></th>
						<th scope="col"><code>right aligned</code></th>
						<th scope="col"><code>right aligned</code></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>left aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>left aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>left aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="ColumnAlign">&lt;div class="basic-table"&gt;
  &lt;table class="basic-table full-width align-left-col-2"&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#ColumnAlign">
				<span></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$     column-divider    $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="columnDivider">
	<div class="eia-container">
		<h3 class="">Column (Vertical) divider</h3>
		<a name="ColumnDivider"></a>



		<p>
			Adding a <code>class="vertical-divider-after-col-1/2/3/4/5/6/7/8/9/10"</code> to the to the table class (Note, this may not have the desired effect if there are spanned columns).
		</p>
		<div class="basic-table">
			<table class="basic-table full-width vertical-divider-after-col-1">
				<thead>
					<tr>
						<th scope="col"><code>left aligned</code></th>
						<th scope="col"><code>right aligned</code></th>
						<th scope="col"><code>right aligned</code></th>
						<th scope="col"><code>right aligned</code></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr class="divider">
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
					<tr>
						<th scope="row"><code>left aligned</code></th>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
						<td><code>right aligned</code></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td scope="colgroup" colSpan="99" class="footnotes">
							Footnotes: Aligned-left
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="ColumnDivider">&lt;div class="basic-table"&gt;
  &lt;table class="basic-table full-width vertical-divider-after-col-1"&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class="divider"&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
    &lt;tfoot&gt;
      &lt;tr&gt;
        &lt;td scope="colgroup" colspan="99" class="footnotes"&gt;&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tfoot&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#ColumnDivider">
				<span></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$     column-hide    $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="columnHide">
	<div class="eia-container">
		<h3 class="">Column Hide</h3>
		<a name="ColumnHide"></a>
		<p>
			Hiding a column (head, body and foot) can be accomplished by adding a <code>class="hide-col-1/2/3/4/5..."</code> to the table class.
		</p>
		<h4>Before</h4>
		<div class="basic-table">
			<table class="basic-table full-width highlight-col-2  highlight-col-4">
				<thead>
					<tr>
						<th scope="col">Col-1</th>
						<th scope="col">Col-2</th>
						<th scope="col">Col-3</th>
						<th scope="col">Col-4</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Col-1</td>
						<td>Col-2</td>
						<td>Col-3</td>
						<td>Col-4</td>
					</tr>
					<tr>
						<td>Col-1</td>
						<td>Col-2</td>
						<td>Col-3</td>
						<td>Col-4</td>
					</tr>
				</tbody>
			</table>
		</div>

		<h4>After</h4>
		<div class="basic-table">
			<table class="basic-table full-width hide-col-2 hide-col-4 highlight-col-2  highlight-col-4">
				<thead>
					<tr>
						<th scope="col">Col-1</th>
						<th scope="col">Col-2</th>
						<th scope="col">Col-3</th>
						<th scope="col">Col-4</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Col-1</td>
						<td>Col-2</td>
						<td>Col-3</td>
						<td>Col-4</td>
					</tr>
					<tr>
						<td>Col-1</td>
						<td>Col-2</td>
						<td>Col-3</td>
						<td>Col-4</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="ColumnHide">&lt;div class="basic-table"&gt;
  &lt;table class="basic-table full-width hide-col-2 hide-col-4 highlight-col-2  highlight-col-4"&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope="col"&gt;Col-1&lt;/th&gt;
        &lt;th scope="col"&gt;Col-2&lt;/th&gt;
        &lt;th scope="col"&gt;Col-3&lt;/th&gt;
        &lt;th scope="col"&gt;Col-4&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;td&gt;Col-1&lt;/td&gt;
        &lt;td&gt;Col-2&lt;/td&gt;
        &lt;td&gt;Col-3&lt;/td&gt;
        &lt;td&gt;Col-4&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Col-1&lt;/td&gt;
        &lt;td&gt;Col-2&lt;/td&gt;
        &lt;td&gt;Col-3&lt;/td&gt;
        &lt;td&gt;Col-4&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#ColumnHide">
				<span></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$ column-highlight $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="columnHighlight">
	<div class="eia-container">
		<h2 class="eia-h2">Column Highlight</h2>
		<a name="ColumnHighlight"></a>
		<p>
			Highlighting a column can be accomplished by adding a <code>class="highlight-col-1/2/3/4/5..."</code> to the to the table class.
		</p>

		<div class="basic-table">
			<table class="basic-table full-width highlight-col-2  highlight-col-4">
				<thead>
					<tr>
						<th scope="col">...</th>
						<th scope="col">...</th>
						<th scope="col">...</th>
						<th scope="col">...</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Col-1</td>
						<td>Col-2</td>
						<td>Col-3</td>
						<td>Col-4</td>
					</tr>
					<tr>
						<td>Col-1</td>
						<td>Col-2</td>
						<td>Col-3</td>
						<td>Col-4</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="ColumnHighlight">&lt;div class="basic-table"&gt;
  &lt;table class="basic-table full-width highlight-col-2  highlight-col-4"&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;td&gt;Col-1&lt;/td&gt;
        &lt;td&gt;Col-2&lt;/td&gt;
        &lt;td&gt;Col-3&lt;/td&gt;
        &lt;td&gt;Col-4&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Col-1&lt;/td&gt;
        &lt;td&gt;Col-2&lt;/td&gt;
        &lt;td&gt;Col-3&lt;/td&gt;
        &lt;td&gt;Col-4&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#ColumnHighlight">
				<span></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$            FOOT             $$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section>
	<div class="eia-container">
		<h2 class="eia-sub-heading uk-text-center">FOOT</h2>
		<p><code>&lt;foot&gt;...&lt;/foot&gt;</code></p>
		<ul class="  uk-flex-center ">
			<li>
				<div class="eia-card prototype-table">
					<div class="prototype-table-inside">
						<div class="prototype-table-cell">
							<div class="prototype-column">head</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">1</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">2</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">3</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">4</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">5</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">6</div>
						</div>
						<div class="flex-break"></div>
						<div class="prototype-table-cell">
							<div class="prototype-column">1</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">2</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">3</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">4</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">5</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">6</div>
						</div>
						<div class="flex-break"></div>
						<div class="prototype-table-cell active">
							<div class="prototype-column">foot</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$       Table Foot        $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="tableFoot">
	<div class="eia-container">
		<h2 class="eia-h2">Table Foot</h2>
		<div class="basic-table">
			<table class="basic-table full-width">
				<thead>
					<tr>
						<th scope="col">...</th>
						<th scope="col">...</th>
						<th scope="col">...</th>
						<th scope="col">...</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">...</th>
						<td>...</td>
						<td>...</td>
						<td>...</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td scope="col"><code>left aligned</code></td>
						<td scope="col"><code>right aligned</code></td>
						<td scope="col"><code>right aligned</code></td>
						<td scope="col"><code>right aligned</code></td>
					</tr>
				</tfoot>
			</table>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="Foot">&lt;div class="basic-table"&gt;
  &lt;table class="basic-table full-width"&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
    &lt;tfoot&gt;
      &lt;tr&gt;
        &lt;td scope="col"&gt;...&lt;/td&gt;
        &lt;td scope="col"&gt;...&lt;/td&gt;
        &lt;td scope="col"&gt;...&lt;/td&gt;
        &lt;td scope="col"&gt;...&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tfoot&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#Foot">
				<span></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$     footnotes    $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="Footnotes">
	<div class="eia-container">
		<h3 class="">Footnotes</h3>

		<div class="basic-table">
			<table class="basic-table full-width">
				<thead>
					<tr>
						<th scope="col">...</th>
						<th scope="col">...</th>
						<th scope="col">...</th>
						<th scope="col">...</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">...</th>
						<td>...</td>
						<td>...</td>
						<td>...</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td colSpan="99" scope="colgroup" class="footnotes">
							<ul class="footnotes">
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
								<li>Donec lorem massa, semper nec eros a, lacinia porttitor nunc.</li>
								<li>Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien.</li>
								<li>Suspendisse sagittis risus eu sem suscipit sodales.</li>
								<li>Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus.</li>
								<li>Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis.</li>
								<li>Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem.</li>
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
							</ul>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="TableFootnotesOrderedList">&lt;div class="basic-table"&gt;
	&lt;table class="basic-table full-width"&gt;
		&lt;tfoot&gt;
			&lt;tr&gt;
				&lt;td colspan="99" scope="colgroup" class="footnotes"&gt;
					&lt;ul class="footnotes"&gt;
						&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;
						&lt;li&gt;Donec lorem massa, semper nec eros a, lacinia porttitor nunc.&lt;/li&gt;
						&lt;li&gt;Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien.&lt;/li&gt;
						&lt;li&gt;Suspendisse sagittis risus eu sem suscipit sodales.&lt;/li&gt;
						&lt;li&gt;Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus.&lt;/li&gt;
						&lt;li&gt;Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis.&lt;/li&gt;
						&lt;li&gt;Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem.&lt;/li&gt;
						&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;
					&lt;/ul&gt;
				&lt;/td&gt;
			&lt;/tr&gt;
		&lt;/tfoot&gt;
	&lt;/table&gt;
&lt;/div&gt;</code></pre>
		<!-- Copy Button -->
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#TableFootnotesOrderedList">
				<span></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$      section      $$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section>
	<div class="eia-container">
		<h2 class="eia-sub-heading uk-text-center">Multiple Tables</h2>
		<ul class="  uk-flex-center ">
			<li>
				<div class="eia-card prototype-table">
					<div class="prototype-table-inside">
						<div class="prototype-table-cell">
							<div class="prototype-column">head</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">1</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">2</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">3</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">4</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">5</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">6</div>
						</div>
						<div class="flex-break"></div>
						<div class="prototype-table-cell">
							<div class="prototype-column">1</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">2</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">3</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">4</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">5</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">6</div>
						</div>
						<div class="flex-break"></div>
						<div class="prototype-table-cell">
							<div class="prototype-column">foot</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="eia-card prototype-table">
					<div class="prototype-table-inside">
						<div class="prototype-table-cell">
							<div class="prototype-column">head</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">1</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">2</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">3</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">4</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">5</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">6</div>
						</div>
						<div class="flex-break"></div>
						<div class="prototype-table-cell">
							<div class="prototype-column">1</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">2</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">3</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">4</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">5</div>
						</div>
						<div class="prototype-table-cell">
							<div class="prototype-column">6</div>
						</div>
						<div class="flex-break"></div>
						<div class="prototype-table-cell">
							<div class="prototype-column">foot</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$     stacked    $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="stacked">
	<div class="eia-container">
		<h3 class="">Stacked</h3>

		<div class="basic-table">
			<table class="basic-table full-width">
				<caption>Table One</caption>
				<thead>
					<tr>
						<th scope="col">...</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>...</td>
					</tr>
					<tr>
						<td>...</td>
					</tr>
				</tbody>
			</table>

			<table class="basic-table full-width">
				<caption>Table Two</caption>
				<thead>
					<tr>
						<th scope="col">...</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>...</td>
					</tr>
					<tr>
						<td>...</td>
					</tr>
				</tbody>
			</table>

			<table class="basic-table full-width">
				<caption>Table Three</caption>
				<thead>
					<tr>
						<th scope="col">...</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>...</td>
					</tr>
					<tr>
						<td>...</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="Stacked">&lt;div class="basic-table"&gt;
	&lt;table class="basic-table full-width"&gt;
	&lt;caption&gt;Table One&lt;/caption&gt;
	&lt;thead&gt;
		&lt;tr&gt;
		&lt;th scope="col"&gt;...&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
		&lt;td&gt;...&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
		&lt;td&gt;...&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
	&lt;/table&gt;

	&lt;table class="basic-table full-width"&gt;
	&lt;caption&gt;Table Two&lt;/caption&gt;
	&lt;thead&gt;
		&lt;tr&gt;
		&lt;th scope="col"&gt;...&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
		&lt;td&gt;...&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
		&lt;td&gt;...&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
	&lt;/table&gt;

	&lt;table class="basic-table full-width"&gt;
	&lt;caption&gt;Table Three&lt;/caption&gt;
	&lt;thead&gt;
		&lt;tr&gt;
		&lt;th scope="col"&gt;...&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
		&lt;td&gt;...&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
		&lt;td&gt;...&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
	&lt;/table&gt;
&lt;/div&gt;</code></pre>
		<!-- Copy Button -->
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#Stacked">
				<span></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$      section      $$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section>
	<div class="eia-container">
		<h2 class="eia-sub-heading uk-text-center">custom tables</h2>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$     row-selected    $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="table">
	<div class="eia-container">
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$     holiday-schedule    $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="table">
	<div class="eia-container">

		<div class="basic-table">
			<table class="basic-table schedule full-width align-left-col-2 align-left-col-3 align-left-col-4 align-left-col-5">
				<thead>
					<tr>
						<th scope="col">Data for the week ending</th>
						<th scope="col">Alternate Release Date</th>
						<th scope="col">Release Day</th>
						<th scope="col">Release Time</th>
						<th scope="col">Holiday</th>
					</tr>
				</thead>
				<tbody>
					<tr class="past-holiday">
						<th scope="row">December 28, 2018</th>
						<td>January 4, 2019</td>
						<td>Friday</td>
						<td>11:00 a.m.</td>
						<td>New Year's</td>
					</tr>
					<tr class="past-holiday">
						<th scope="row">January 18, 2019</th>
						<td>January 24, 2019</td>
						<td>Thursday</td>
						<td>11:00 a.m.</td>
						<td>Martin Luther King Jr.</td>
					</tr>
					<tr class="past-holiday">
						<th scope="row">February 15, 2019</th>
						<td>February 21, 2019</td>
						<td>Thursday</td>
						<td>11:00 a.m.</td>
						<td>President's</td>
					</tr>
					<tr class="past-holiday">
						<th scope="row">May 24, 2019</th>
						<td>May 30, 2019</td>
						<td>Thursday</td>
						<td>11:00 a.m.</td>
						<td>Memorial</td>
					</tr>
					<tr class="past-holiday">
						<th scope="row">August 30, 2019</th>
						<td>September 5, 2019</td>
						<td>Thursday</td>
						<td>11:00 a.m.</td>
						<td>Labor</td>
					</tr>
					<tr class="past-holiday">
						<th scope="row">October 11, 2019</th>
						<td>October 17, 2019</td>
						<td>Thursday</td>
						<td>11:00 a.m.</td>
						<td>Columbus</td>
					</tr>
					<tr class="past-holiday">
						<th scope="row">November 8, 2019</th>
						<td>November 14, 2019</td>
						<td>Thursday</td>
						<td>11:00 a.m.</td>
						<td>Veterans</td>
					</tr>
					<tr class="past-holiday">
						<th scope="row">December 20, 2019</th>
						<td>December 27, 2019</td>
						<td>Friday</td>
						<td>11:00 a.m.</td>
						<td>Christmas</td>
					</tr>
					<tr class="past-holiday">
						<th scope="row">December 27, 2019</th>
						<td>January 3, 2020</td>
						<td>Friday</td>
						<td>11:00 a.m.</td>
						<td>New Year's</td>
					</tr>
					<tr class="past-holiday">
						<th scope="row">January 17, 2020</th>
						<td>January 23, 2020</td>
						<td>Thursday</td>
						<td>11:00 a.m.</td>
						<td>Martin Luther King Jr.</td>
					</tr>
					<tr class="past-holiday">
						<th scope="row">February 14, 2020</th>
						<td>February 20, 2020</td>
						<td>Thursday</td>
						<td>11:00 a.m.</td>
						<td>President's</td>
					</tr>
					<tr class="past-holiday">
						<th scope="row">May 22, 2020</th>
						<td>May 28, 2020</td>
						<td>Thursday</td>
						<td>11:00 a.m.</td>
						<td>Memorial</td>
					</tr>
					<tr>
						<th scope="row">September 4, 2020</th>
						<td>September 10, 2020</td>
						<td>Thursday</td>
						<td>11:00 a.m.</td>
						<td>Labor</td>
					</tr>
					<tr>
						<th scope="row">October 9, 2020</th>
						<td>October 15, 2020</td>
						<td>Thursday</td>
						<td>11:00 a.m.</td>
						<td>Columbus</td>
					</tr>
					<tr>
						<th scope="row">November 6, 2020</th>
						<td>November 12, 2020</td>
						<td>Thursday</td>
						<td>11:00 a.m.</td>
						<td>Veterans</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="HolidaySchedule">&lt;div class="basic-table"&gt;
	&lt;table class="basic-table schedule full-width align-left-col-2 align-left-col-3 align-left-col-4 align-left-col-5"&gt;
	&lt;thead&gt;
		&lt;tr&gt;
		&lt;th scope="col"&gt;Data for the week ending&lt;/th&gt;
		&lt;th scope="col"&gt;Alternate Release Date&lt;/th&gt;
		&lt;th scope="col"&gt;Release Day&lt;/th&gt;
		&lt;th scope="col"&gt;Release Time&lt;/th&gt;
		&lt;th scope="col"&gt;Holiday&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody&gt;
		&lt;tr class="past-holiday"&gt;
		&lt;th scope="row"&gt;December 28, 2018&lt;/th&gt;
		&lt;td&gt;January 4, 2019&lt;/td&gt;
		&lt;td&gt;Friday&lt;/td&gt;
		&lt;td&gt;11:00 a.m.&lt;/td&gt;
		&lt;td&gt;New Year's&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr class="past-holiday"&gt;
		&lt;th scope="row"&gt;January 18, 2019&lt;/th&gt;
		&lt;td&gt;January 24, 2019&lt;/td&gt;
		&lt;td&gt;Thursday&lt;/td&gt;
		&lt;td&gt;11:00 a.m.&lt;/td&gt;
		&lt;td&gt;Martin Luther King Jr.&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr class="past-holiday"&gt;
		&lt;th scope="row"&gt;February 15, 2019&lt;/th&gt;
		&lt;td&gt;February 21, 2019&lt;/td&gt;
		&lt;td&gt;Thursday&lt;/td&gt;
		&lt;td&gt;11:00 a.m.&lt;/td&gt;
		&lt;td&gt;President's&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr class="past-holiday"&gt;
		&lt;th scope="row"&gt;May 24, 2019&lt;/th&gt;
		&lt;td&gt;May 30, 2019&lt;/td&gt;
		&lt;td&gt;Thursday&lt;/td&gt;
		&lt;td&gt;11:00 a.m.&lt;/td&gt;
		&lt;td&gt;Memorial&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr class="past-holiday"&gt;
		&lt;th scope="row"&gt;August 30, 2019&lt;/th&gt;
		&lt;td&gt;September 5, 2019&lt;/td&gt;
		&lt;td&gt;Thursday&lt;/td&gt;
		&lt;td&gt;11:00 a.m.&lt;/td&gt;
		&lt;td&gt;Labor&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr class="past-holiday"&gt;
		&lt;th scope="row"&gt;October 11, 2019&lt;/th&gt;
		&lt;td&gt;October 17, 2019&lt;/td&gt;
		&lt;td&gt;Thursday&lt;/td&gt;
		&lt;td&gt;11:00 a.m.&lt;/td&gt;
		&lt;td&gt;Columbus&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr class="past-holiday"&gt;
		&lt;th scope="row"&gt;November 8, 2019&lt;/th&gt;
		&lt;td&gt;November 14, 2019&lt;/td&gt;
		&lt;td&gt;Thursday&lt;/td&gt;
		&lt;td&gt;11:00 a.m.&lt;/td&gt;
		&lt;td&gt;Veterans&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr class="past-holiday"&gt;
		&lt;th scope="row"&gt;December 20, 2019&lt;/th&gt;
		&lt;td&gt;December 27, 2019&lt;/td&gt;
		&lt;td&gt;Friday&lt;/td&gt;
		&lt;td&gt;11:00 a.m.&lt;/td&gt;
		&lt;td&gt;Christmas&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr class="past-holiday"&gt;
		&lt;th scope="row"&gt;December 27, 2019&lt;/th&gt;
		&lt;td&gt;January 3, 2020&lt;/td&gt;
		&lt;td&gt;Friday&lt;/td&gt;
		&lt;td&gt;11:00 a.m.&lt;/td&gt;
		&lt;td&gt;New Year's&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr class="past-holiday"&gt;
		&lt;th scope="row"&gt;January 17, 2020&lt;/th&gt;
		&lt;td&gt;January 23, 2020&lt;/td&gt;
		&lt;td&gt;Thursday&lt;/td&gt;
		&lt;td&gt;11:00 a.m.&lt;/td&gt;
		&lt;td&gt;Martin Luther King Jr.&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr class="past-holiday"&gt;
		&lt;th scope="row"&gt;February 14, 2020&lt;/th&gt;
		&lt;td&gt;February 20, 2020&lt;/td&gt;
		&lt;td&gt;Thursday&lt;/td&gt;
		&lt;td&gt;11:00 a.m.&lt;/td&gt;
		&lt;td&gt;President's&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr class="past-holiday"&gt;
		&lt;th scope="row"&gt;May 22, 2020&lt;/th&gt;
		&lt;td&gt;May 28, 2020&lt;/td&gt;
		&lt;td&gt;Thursday&lt;/td&gt;
		&lt;td&gt;11:00 a.m.&lt;/td&gt;
		&lt;td&gt;Memorial&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
		&lt;th scope="row"&gt;September 4, 2020&lt;/th&gt;
		&lt;td&gt;September 10, 2020&lt;/td&gt;
		&lt;td&gt;Thursday&lt;/td&gt;
		&lt;td&gt;11:00 a.m.&lt;/td&gt;
		&lt;td&gt;Labor&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
		&lt;th scope="row"&gt;October 9, 2020&lt;/th&gt;
		&lt;td&gt;October 15, 2020&lt;/td&gt;
		&lt;td&gt;Thursday&lt;/td&gt;
		&lt;td&gt;11:00 a.m.&lt;/td&gt;
		&lt;td&gt;Columbus&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
		&lt;th scope="row"&gt;November 6, 2020&lt;/th&gt;
		&lt;td&gt;November 12, 2020&lt;/td&gt;
		&lt;td&gt;Thursday&lt;/td&gt;
		&lt;td&gt;11:00 a.m.&lt;/td&gt;
		&lt;td&gt;Veterans&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
	&lt;/table&gt;
&lt;/div&gt;</code></pre>
		<!-- Copy Button -->
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#HolidaySchedule">
				<span></span>Copy to clipboard
			</button>
		</p>
</div>
	</section>
</main>
<footer>
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
</footer>
<link href="https://www.eia.gov/global/styles/global.min.css" type="text/css" media="screen, projection" rel="stylesheet">