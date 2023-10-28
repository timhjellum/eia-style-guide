<a name="Basic"></a>

<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Basic Table</h2>
<p>
	The basic EIA styled table can created by nesting the table in a div with the style: <code>class="basic-table"</code>, and adding the style <code>class="basic-table"</code> to the <code>table</code> tag. It's also important to use the HTML table structure of <code>&lt;head&gt;&lt;/head&gt;</code>, <code>&lt;body&gt;&lt;/body&gt;</code>, and <code>&lt;foot&gt;&lt;/foot&gt;</code> as needed.
</p>
<div class="uk-section uk-section-muted uk-padding">
	<h3 id="" class="uk-h3 tm-heading-fragment"><span class="uk-label uk-label-danger">ACCESSIBILITY REQUIREMENT</span></h3>
	<p class="accessibility p">
		Header cells must be marked up with <code>&lt;th&gt;</code>, and data cells with <code>&lt;td&gt;</code>, along with a <code>scope</code> to make tables accessible.
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
	<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
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
	<!-- Copy Button -->
	<p>
		<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#Basic">
			<span uk-icon="copy"></span>Copy to clipboard
		</button>
	</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$      dilly      $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="dilly">
<div class="eia-container">