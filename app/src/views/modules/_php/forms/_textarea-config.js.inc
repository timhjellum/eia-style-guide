<!--

import FormLayout from "../Containers/FormLayout"

class TextareaConfig

-->

<h2>Textarea Configuration</h2>
<!-- 
        <ul class="ul">
          <li class="li">
            The <code>type="text"</code> is single line text input that accepts any type of character
          </li>
        </ul>
          <ul class="ul">
          <li class="li"><code>Input Number=""</code></li>
<li>
        <ul class="ul">
          <li class="li">
            The <code>type="number"</code> the browser will try to only allow valid numbers
          </li>
          <li class="li">
            The <code>type="number"</code> on mobile devices, the number keyboard will show up
          </li>
        </ul>
          <ul class="ul">
          <li class="li"><code>Input Email=""</code></li>
<li>
        <ul class="ul">
          <li class="li">
            The <code>type="email"</code> the browser will try to only allow valid email addresses
          </li>
          <li class="li">
            The <code>type="email"</code> on mobile devices, the email keyboard will show up.
          </li>
        </ul>
         -->

<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Textarea Autocomplete</h2>
<ul class="ul">
	<li class="li">
		The <code>autocomplete="on"</code> will <strong>enable</strong> autocomplete functionality in the browser.
	</li>

	<li class="li">
		The <code>autocomplete="off"</code> will <strong>disable</strong> autocomplete functionality in the browser.
	</li>
</ul>
<!-- 
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
				<textarea rows="10" placeholder="Leave feedback"></textarea>
			</div>
			<div class="button-container">
				<button type="submit" id="submitFeedback" tabIndex="0" role="button" class="submit">
					ok
				</button>
				</p>
			</div>
		</fieldset>
	</div>




	-->




	<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Textarea Autofocus</h2>
	<p class="accessibility p">
		<strong>
			<span class="accessibility-requirement">Accessibility best-practices:</span>
		</strong>
	</p>
	<ul class="accessibility ul">
		<li>
			Do not use the <code>autofocus=""</code>.
		</li>
	</ul>




	<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Textarea Cols</h2>
	<ul class="ul">
		<li class="li">
			<code>cols=""</code> defines the number of columns.
		</li>
		<li class="li">
			You can use <strong>integers</strong>, e.g.: <code>cols="40"</code>.
		</li>
	</ul>
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
					<textarea columns="40" rows="10"></textarea>
				</div>
			</fieldset>
		</div>




		<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Textarea Disabled</h2>
		<ul class="ul">
			<li class="li">
				<code>disabled=""</code> defines the number of columns.
			</li>
			<li class="li">
				Disables the textarea, e.g.: <code>disabled="true"</code>.
			</li>
		</ul>

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
						<textarea columns="40" rows="5" placeholder="Disabled" disabled="disabled"></textarea>
					</div>
				</fieldset>
			</div>




			<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Textarea Max-Length</h2>
			<ul class="ul">
				<li class="li">
					<code>maxlength=""</code> defines the maxlength amount of characters allowed.
				</li>
				<li class="li">
					You can use <strong>integers</strong>, e.g.: <code>maxlength="50"</code>.
				</li>
			</ul>
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
							<textarea columns="40" rows="5" placeholder="maxlength = 10" maxLength="10"></textarea>
						</div>
					</fieldset>
				</div>




				<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Textarea minlength</h2>
				<ul class="ul">
					<li class="li">
						<code>minlength=""</code> defines the minimum amount of characters the textarea required to be valid.
					</li>
					<li class="li">
						You can use <strong>integers</strong>, e.g.: <code>minlength="15"</code>.
					</li>
				</ul>
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
								<textarea columns="40" rows="5" placeholder="minlength = 10" minLength="15"></textarea>
							</div>
						</fieldset>
					</div>




					<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Textarea Placeholder</h2>
					<ul class="ul">
						<li class="li">
							<code>placeholder=""</code> defines a non-selectable placeholder text that only appears when the textarea is empty.
						</li>

						<li class="li">
							You can hint at the format expected for the textarea, e.g.: <code>placeholder="Leave feedback"</code>
						</li>
					</ul>
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
									<textarea columns="40" rows="5" placeholder="Leave feedback"></textarea>
								</div>
							</fieldset>
						</div>




						<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Textarea Rows</h2>
						<ul class="ul">
							<li class="li">
								<code>rows=""</code> defines the number of rows.
							</li>
							<li class="li">
								You can use <strong>integers</strong>, e.g.: <code>rows="5"</code>.
							</li>
						</ul>
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
										<textarea columns="40" rows="5"></textarea>
									</div>
								</fieldset>
							</div>




							<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Textarea Spellcheck</h2>
							<ul class="ul">
								<li class="li">
									<code>spellcheck="true"</code> enables the browser spell-checker.
								</li>
							</ul>
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
											<textarea columns="40" rows="10" spellCheck="true"></textarea>
										</div>
									</fieldset>
								</div>




								<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Textarea Wrap</h2>
								<ul class="ul">
									<li class="li">
										<code>wrap=""</code> defines how the text should be wrapped.
									</li>
									<li class="li">
										<code>wrap="hard"</code> will always be wrapped depending on the <code>cols</code> value.
									</li>
									<li class="li">
										<code>wrap="soft"</code> the text will only break when needed.
									</li>
								</ul>
								<!-- 
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
												<textarea rows="10" placeholder="Leave feedback"></textarea>
												<textarea columns="40" rows="10" placeholder="Leave feedback"></textarea>
											</div>
										</fieldset>


									</div>
									-->
									<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>

									<pre><code class="language-html" id="TextareaConfig"></code></pre>

									<!-- Copy Button -->
									<p>
										<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#TextareaConfig">
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