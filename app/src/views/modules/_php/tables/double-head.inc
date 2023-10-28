<a name="DoubleHeader"></a>

<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Double Header</h2>
<div class="uk-section uk-section-muted uk-padding">
	<h3 id="" class="uk-h3 tm-heading-fragment"><span class="uk-label uk-label-danger">ACCESSIBILITY REQUIREMENT</span></h3>
	<p class="accessibility p">
		Add a <code>scope="colgroup"</code> whenever you use a <code>colspan="x"</code>.
	</p>

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
	<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
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
	<!-- Copy Button -->
	<p>
		<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#DoubleHeader">
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