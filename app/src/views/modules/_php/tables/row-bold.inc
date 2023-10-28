<a name="RowBold"></a>

<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Row Bold</h2>
<p>
	Adding a <code>class="bold"</code> to the table row (&lt;tr&gt;).
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
<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
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
<!-- Copy Button -->
<p>
	<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#RowBold">
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