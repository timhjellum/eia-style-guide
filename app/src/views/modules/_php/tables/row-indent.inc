<a name="RowIndent"></a>

<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Row Indent</h2>
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
<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
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
<!-- Copy Button -->
<p>
	<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#RowIndent">
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