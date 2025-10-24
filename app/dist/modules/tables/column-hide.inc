<section id="column-hide">
	<!-- start master layout-->
	<div class="grid-wrapper">
		<div class="grid-left">
			<!-- start left navigation-->
			<div></div>
			<!-- end master layout-->
		</div>
		<div class="grid-main">
			<!-- start main template area -->

			<div class="eia-container">
				<h3 class="uk-h3 tm-heading-fragment">Column Hide</h3>
				<p>Hiding a column (head, body and foot) can be accomplished by adding a <code>class="hide-col-1/2/3/4/5..."</code> to the table class.</p>
				<h4>Before</h4>
				<!-- Example -->
				<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
				<div class="uk-card uk-card-default uk-padding">
					<div class="basic-table">
						<table class="basic-table full-width highlight-col-2 highlight-col-4">
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
					<!-- end card -->
				</div>
				<h4>After</h4>
				<!-- Example -->
				<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
				<div class="uk-card uk-card-default uk-padding">
					<div class="basic-table">
						<table class="basic-table full-width hide-col-2 hide-col-4 highlight-col-2 highlight-col-4">
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
					<!-- end card -->
				</div>
				<!-- HTML -->
				<div class="uk-text-default uk-text-normal uk-text-uppercase copy-element">HTML</div>
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
					<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#ColumnHide"><span uk-icon="copy"></span>Copy to clipboard</button>
				</p>
			</div>

			<!-- end main template area -->
		</div>
		<div class="grid-right"></div>
	</div>
	<!-- end master layout-->
</section>