<h4>Text Input Configurations</h4>
<ul class="ul _bullet">
	<li class="li">
		The <code>type="text"</code> is single line text input that accepts any type of character
	</li>
</ul>
<h4>Input Number</h4>
<ul class="ul _bullet">
	<li class="li">
		The <code>type="number"</code> the browser will try to only allow valid numbers
	</li>
	<li class="li">
		The <code>type="number"</code> on mobile devices, the number keyboard will show up
	</li>
</ul>
<h4>Input Email</h4>
<ul class="ul _bullet">
	<li class="li">
		The <code>type="email"</code> the browser will try to only allow valid email addresses
	</li>
	<li class="li">
		The <code>type="email"</code> on mobile devices, the email keyboard will show up.
	</li>
</ul>


<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Text Input Autocomplete</h2>
<h4>autocomplete</h4>
<p>Determines if the browser can autocomplete the input.</p>
<code>"off"</code>
<p>
	The browser will <strong>disable</strong> autocomplete functions..
</p>
<!-- Live Examples --
<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
<dl class="uk-description-list uk-description-list-divider">
	<dd><a [routerLink]="['/modules/']" [fragment]="'placeholder'">placeholder</a></dd>
</dl>
-->
<!-- Example -->
<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
<div class="eia-card">
	<div class="primary form-area">
		<fieldset>
			<div class="form-container">
				<input placeholder="First name" autoComplete="" disabled="" required="" readOnly="" spellCheck="" />
			</div>
			<div class="button-container">
				<button type="submit" id="submitFeedback" tabIndex="0" role="button" class="submit">
					ok
				</button>
			</div>
	</div>
	</fieldset>
</div>

<code class="attribute">"on"</code>
<p>
	The browser will <strong>enable</strong> autocomplete functions.
</p>
<!-- Live Examples --
<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
<dl class="uk-description-list uk-description-list-divider">
	<dd><a [routerLink]="['/modules/']" [fragment]="'placeholder'">placeholder</a></dd>
</dl>
-->
<!-- Example -->
<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
<div class="eia-card">
	<div class="primary form-area">
		<fieldset>
			<div class="form-container">
				<input placeholder="First name" autoComplete="" disabled="" required="" readOnly="" spellCheck="" />
			</div>
			<div class="button-container">
				<button type="submit" id="submitFeedback" tabIndex="0" role="button" class="submit">
					ok
				</button>
			</div>
	</div>
	</fieldset>
</div>


<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Text Input Autofocus</h2>
<code>autofocus</code>
<p>Sets focus on the input when the web page loads.</p>
<!-- Live Examples --
<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
<dl class="uk-description-list uk-description-list-divider">
	<dd><a [routerLink]="['/modules/']" [fragment]="'placeholder'">placeholder</a></dd>
</dl>
-->
<!-- Example -->
<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
<div class="eia-card">
	<div class="primary form-area">
		<fieldset>
			<div class="form-container">
				<input rows="5" placeholder="First name" autoComplete="" disabled="" required="" readOnly="" spellCheck="" />
			</div>
		</fieldset>
	</div>


	<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Text Input Disabled</h2>
	<code>disabled</code>
	<p>Disables the input.</p>
	<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
	<dl class="uk-description-list uk-description-list-divider">
		<dd>
			<a></a>
		</dd>
	</dl>
	<!-- Example -->
	<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
	<div class="eia-card">
		<div class="primary form-area">
			<fieldset>
				<div class="form-container">
					<input columns="40" rows="5" placeholder="First name" autoComplete="on" disabled="" />
				</div>
			</fieldset>
		</div>


		<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Text Input Max-Length</h2>
		<h4>maxlength</h4>
		<p>Defines the maxlength amount of characters allowed.</p>
		<code>"140"</code>
		<p>
			You can use <strong>integers</strong>.
		</p>
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
		<dl class="uk-description-list uk-description-list-divider">
			<dd>
				<a></a>
			</dd>
		</dl>
		<!-- Example -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
		<div class="eia-card">
			<div class="primary form-area">
				<fieldset>
					<div class="form-container">
						<input placeholder="First name" autoComplete="" disabled="" required="" readOnly="" spellCheck="" />
					</div>
				</fieldset>
			</div>


			<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Text Input minlength</h2>
			<h4>minlength</h4>
			<p>Defines the minimum amount of characters the input required to be valid.</p>
			<code>"15"</code>
			<p>
				You can use <strong>integers</strong>.
			</p>
			<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
			<dl class="uk-description-list uk-description-list-divider">
				<dd>
					<a></a>
				</dd>
			</dl>
			<!-- Example -->
			<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
			<div class="eia-card">
				<div class="primary form-area">
					<fieldset>
						<div class="form-container">
							<input placeholder="First name" autoComplete="" disabled="" required="" readOnly="" spellCheck="" />
						</div>
					</fieldset>
				</div>


				<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Text Input Placeholder</h2>
				<h4>placeholder</h4>
				<p>Defines a non-selectable placeholder text that only appears when the input is empty.</p>
				<code>"First name"</code>
				<p>You can hint at the format expected for the input.</p>
				<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
				<dl class="uk-description-list uk-description-list-divider">
					<dd>
						<a></a>
					</dd>
				</dl>
				<!-- Example -->
				<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
				<div class="eia-card">
					<div class="primary form-area">
						<fieldset>
							<div class="form-container">
								<input placeholder="First name" autoComplete="off" disabled="" required="" readOnly="" spellCheck="" />
							</div>
						</fieldset>
					</div>


					<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Text Input Spellcheck</h2>

					<code>spellCheck</code>
					<p>Enables the browser spell checker.</p>
					<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
					<dl class="uk-description-list uk-description-list-divider">
						<dd>
							<a></a>
						</dd>
					</dl>
					<!-- Example -->
					<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
					<div class="eia-card">
						<div class="primary form-area">
							<fieldset>
								<div class="form-container">
									<input rows="5" placeholder="First name" autoComplete="on" disabled="" required="" readOnly="" spellCheck="" />
								</div>
							</fieldset>
						</div>
						<!-- HTML -->
						<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>

						<pre><code class="language-html" id="TextInputConfig"></code></pre>

						<!-- Copy Button -->
						<p>
							<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#TextInputConfig">
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