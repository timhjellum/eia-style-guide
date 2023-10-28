<a name="RowSectionHead"></a>

<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Tables Section-Head</h2>

<p>
	Adding a <code>class="sectionhead"</code> to the table row.
</p>
<div class="uk-section uk-section-muted uk-padding">
	<h3 id="" class="uk-h3 tm-heading-fragment"><span class="uk-label uk-label-danger">ACCESSIBILITY REQUIREMENT</span></h3>
	<p class="accessibility p">
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
	<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
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
          Aligned-left
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
	<!-- Copy Button -->
	<p>
		<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#RowSectionHead">
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