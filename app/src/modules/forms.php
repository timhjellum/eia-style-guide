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
  <h1 class="eia-h1">EIA Branded Checkbox</h1>
  <section>
    <div class="eia-container">
      <!-- h2 class="eia-h2"></h2 -->	<h2>EIA Branded Checkbox</h2>
		<h5>Checkboxes</h5>
		<p>A toggle checkbox that can only be one of two states: checked or unchecked. The value is only submitted by the form if the checkbox is checked.</p>
      <!-- p class="eia-para"></p -->
      <h3 class="eia-h3">Example</h3>
      <div class="eia-card">
        <div class="l-margin-bottom eia-container-resizer">

			<div class="l-row l-two-col-left-wide">
				<div class="primary l-col form-area">
					<ul class="checkbox-container">
						<li class="custom-checkbox">
							<input type="checkbox" name="elements" class="custom-checkbox-input" value="Item One" id="elementOne" />
							<label for="elementOne" class="custom-checkbox-label">
								<span class="custom-checkbox-label-inside"> Item One</span>
							</label>
						</li>
						<li class="custom-checkbox">
							<input type="checkbox" name="elements" class="custom-checkbox-input" value="Item Two" id="elementTwo" />
							<label for="elementTwo" class="custom-checkbox-label">
								<span class="custom-checkbox-label-inside"> Item Two</span>
							</label>
						</li>
					</ul>
				</div>
			</div>
			<div class="l-col"></div>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="BrandedCheckbox"></code></pre>
		<!-- Copy Button -->
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#BrandedCheckbox">
				<span></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  Accessible EIA Branded Select $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="accessibleEIABrandedSelect">
	<div class="eia-container">
		<h2 id="" class="eia-h2 eia-margin-xlarge-top">Accessible EIA Branded Select</h2>
		<div class="uk-section uk-section-muted ">
			<h3 id="" class=""><span class="uk-label uk-label-danger">ACCESSIBILITY REQUIREMENT</span></h3>
			<ul>
				<li>
					The <code> for="previousReports"</code> associates the label with the form input
				</li>
				<li>
					The <code>id="previousReports"</code> should reference the label <code> for="previousReports"</code>
				</li>
				<li>
					The <code>&lt;fieldset&gt;...&lt;/fieldset&gt;</code> and <code>&lt;legend&gt;&lt;/legend&gt;</code> should be utilized
				</li>
			</ul>
		</div>
		<!-- Live Examples --
		<h3 class="eia-h3">Live Examples</h3>
		<dl class="">
			<dd><a [routerLink]="['/modules/']" [fragment]="'placeholder'">placeholder</a></dd>
		</dl>
		-->
		<!-- Example -->
		<h3 class="eia-h3">Example</h3>
		<div class="eia-card">
			<div class="l-row l-two-col-left-wide">
				<div class="primary l-col">
					<div class="l-col">
						<div class="form-container do-not-print">
							<fieldset>
								<legend>Previous reports</legend>
								<div class="dropdown-container">
									<div class="dropdown-button">
										<span class="text" for="previousReports">
											Select Year
										</span>
										<span class="eia ico d-arrow">
											<span>dropdown arrow</span>
										</span>
									</div>
									<div class="dropdown-menu">
										<ul id="previousReports">
											<li class="eia ico pdf">
												<a>2020</a>
											</li>
											<li class="eia ico pdf">
												<a>2019</a>
											</li>
											<li class="eia ico pdf">
												<a>2018</a>
											</li>
											<li>
												<a>See all</a>
											</li>
										</ul>
									</div>
								</div>
							</fieldset>
						</div>
					</div>
				</div>
			</div>

			<div class="l-col"></div>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="BrandedSelect">&lt;div class="form-container do-not-print"&gt;
		  &lt;!-- add width here or leave blank --&gt;
		  &lt;fieldset style="width: 150px;"&gt;
			&lt;legend&gt;Previous reports&lt;/legend&gt;
			  &lt;div class="dropdown-container"&gt;
				&lt;div class="dropdown-button"&gt;
				  &lt;span class="text" for="previousReports"&gt;Select Year&lt;/span&gt;
				  &lt;span class="ico d-arrow"&gt;
					&lt;span&gt;dropdown arrow&lt;/span&gt;
				  &lt;/span&gt;
				&lt;/div&gt;
				&lt;div class="dropdown-menu"&gt;
				  &lt;ul id="<mark>previousReports</mark>"&gt;
					&lt;!-- note the icon (ico pdf) --&gt;
					&lt;li class="ico pdf"&gt;
					  &lt;a&gt;2020&lt;/a&gt;
					&lt;/li&gt;
					&lt;li class="ico pdf"&gt;
					  &lt;a&gt;2019&lt;/a&gt;
					&lt;/li&gt;
					&lt;li class="ico pdf"&gt;
					  &lt;a&gt;2018&lt;/a&gt;
					&lt;/li&gt;
					&lt;li&gt;
					  &lt;a&gt;See all&lt;/a&gt;
					&lt;/li&gt;
				  &lt;/ul&gt;
				&lt;/div&gt;
			  &lt;/div&gt;
			&lt;/fieldset&gt;
		  &lt;/div&gt;</code></pre>
		<!-- Copy Button -->
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#BrandedSelect">
				<span></span>Copy to clipboard
			</button>
		</p>
		<hr class="uk-margin-large">
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  Accessible Button $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="accessibleButton">
	<div class="eia-container">
		<h2 id="" class="eia-h2 eia-margin-xlarge-top">Accessible Button</h2>
		<div class="uk-section uk-section-muted ">
			<h3 id="" class=""><span class="uk-label uk-label-danger">ACCESSIBILITY REQUIREMENT</span></h3>
			<ul>
				<li>
					The <code>role="button"</code> lets screen-readers know the element is a button
				</li>
				<li>
					the <code>id="submitFeedback"</code> should describe the function of the button
				</li>
				<li>
					The <code>tabindex="0"</code> allows elements besides links and form elements to receive keyboard focus. It does not change the tab order, but places the element in the logical navigation flow, as if it were a link on the page.
				</li>
			</ul>
		</div>
		<!-- Live Examples --
		<h3 class="eia-h3">Live Examples</h3>
		<dl class="">
			<dd><a [routerLink]="['/modules/']" [fragment]="'placeholder'">placeholder</a></dd>
		</dl>
		-->
		<!-- Example -->
		<h3 class="eia-h3">Example</h3>
		<div class="eia-card">
			<div class="button-container">
				<button type="submit" id="submitFeedback" tabIndex="0" role="button" class="submit">
					This is a button
				</button>
			</div>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="Button">&lt;div class="button-container"&gt;
		  &lt;button type="submit" id="submitFeedback" tabIndex="0" role="button" class="submit"&gt;
			Submit Feedback
		  &lt;/button&gt;
		&lt;/div&gt;</code></pre>
		<!-- Copy Button -->
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#Button">
				<span></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  Accessible Checkbox Group $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="accessibleCheckboxGroup">
	<div class="eia-container">
		<h2 id="" class="eia-h2 eia-margin-xlarge-top">Accessible Checkbox Group</h2>
		<p>Checkboxes should be utilized when the user has a list of options to choose from. Checkboxes should always allow for multiple selections.</p>
		<div class="uk-section uk-section-muted ">
			<h3 id="" class=""><span class="uk-label uk-label-danger">ACCESSIBILITY REQUIREMENT</span></h3>
			<ul>
				<li>
					The <code>for="itemX"</code> associates the label with the form input <code>id="itemX"</code>
				</li>
				<li>
					The name is the common checkbox group name <code>name="items"</code>
				</li>

			</ul>
		</div>
		<p class="_note p">The user can click on the label to set focus to the form control. This is useful on small screens and to some people with motor disabilities, particularly when targeting small checkboxes and radio buttons. Clicking on labels is also an easy way to check for proper form labeling. If clicking the label sets focus to or activates the form control, then that label is programmatically associated.</p>
		<!-- Live Examples --
		<h3 class="eia-h3">Live Examples</h3>
		<dl class="">
			<dd><a [routerLink]="['/modules/']" [fragment]="'placeholder'">placeholder</a></dd>
		</dl>
		-->
		<!-- Example -->
		<h3 class="eia-h3">Example</h3>
		<div class="eia-card">
			<div class="l-row l-two-col-left-wide">
				<div class="primary l-col form-area">

					<div class="l-col">
						<label>Select your items:</label>
					</div>
					<div class="l-col">
						<div class="form-container">
							<label for="itemOne">Item One</label><input id="itemOne" type="checkbox" name="items" value="Item One" />
						</div>
						<div class="form-container">
							<label for="itemTwo">Item Two</label><input id="itemTwo" type="checkbox" name="items" value="Item Two" />
						</div>
						<div class="form-container">
							<label for="itemThr">Item Thr</label><input id="itemThr" type="checkbox" name="items" value="Item Thr" />
						</div>
						<div class="form-container">
							<label for="itemFou">Item Fo</label><input id="itemFou" type="checkbox" name="items" value="Item Fou" />
						</div>
					</div>
				</div>

			</div>
			<div class="l-col"></div>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="CheckboxGroup">&lt;div class="l-row l-two-col-left-narrow full-width"&gt;
		  &lt;div class="l-col"&gt;
			&lt;label&gt;Select your items:&lt;/label&gt;
		  &lt;/div&gt;
		  &lt;div class="l-col"&gt;
			&lt;div class="form-container"&gt;
			  &lt;label for="itemOne"&gt;Item One&lt;/label&gt;&lt;input id="itemOne" type="checkbox" name="items" value="Item One" /&gt;
			&lt;/div&gt;
			&lt;div class="form-container"&gt;
			  &lt;label for="itemTwo"&gt;Item Two&lt;/label&gt;&lt;input id="itemTwo" type="checkbox" name="items" value="Item Two" /&gt;
			&lt;/div&gt;
			&lt;div class="form-container"&gt;
			  &lt;label for="itemThr"&gt;Item Thr&lt;/label&gt;&lt;input id="itemThr" type="checkbox" name="items" value="Item Thr" /&gt;
			&lt;/div&gt;
			&lt;div class="form-container"&gt;
			  &lt;label for="itemFou"&gt;Item Fo&lt;/label&gt;&lt;input id="itemFou" type="checkbox" name="items" value="Item Fou" /&gt;
			&lt;/div&gt;
		  &lt;/div&gt;
		&lt;/div&gt;</code></pre>
		<!-- Copy Button -->
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#CheckboxGroup">
				<span></span>Copy to clipboard
			</button>
		</p>
		<hr class="uk-margin-large" />
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  Accessible Button $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="accessibleButton">
	<div class="eia-container">
		<h2 id="" class="eia-h2 eia-margin-xlarge-top">Accessible Button</h2>
		<div class="uk-section uk-section-muted ">
			<h3 id="" class=""><span class="uk-label uk-label-danger">ACCESSIBILITY REQUIREMENT</span></h3>
			<ul>
				<li>
					The <code>role="button"</code> lets screen-readers know the element is a button
				</li>
				<li>
					the <code>id="submitFeedback"</code> should describe the function of the button
				</li>
				<li>
					The <code>tabindex="0"</code> allows elements besides links and form elements to receive keyboard focus. It does not change the tab order, but places the element in the logical navigation flow, as if it were a link on the page.
				</li>
			</ul>
		</div>
		<!-- Live Examples --
		<h3 class="eia-h3">Live Examples</h3>
		<dl class="">
			<dd><a [routerLink]="['/modules/']" [fragment]="'placeholder'">placeholder</a></dd>
		</dl>
		-->
		<!-- Example -->
		<h3 class="eia-h3">Example</h3>
		<div class="eia-card">
			<div class="button-container">
				<button type="submit" id="submitFeedback" tabIndex="0" role="button" class="submit">
					This is a button
				</button>
			</div>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="Button">&lt;div class="button-container"&gt;
		  &lt;button type="submit" id="submitFeedback" tabIndex="0" role="button" class="submit"&gt;
			Submit Feedback
		  &lt;/button&gt;
		&lt;/div&gt;</code></pre>
		<!-- Copy Button -->
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#Button">
				<span></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  disabled $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="disabled">
	<div class="eia-container">
		<!-- %- include('./partials/disabled') % -->
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  dropdown-select $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="dropdownSelect">
	<div class="eia-container">
		<!-- %- include('./partials/dropdown-select') % -->
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  Enctype $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="enctype">
	<div class="eia-container">
		<!-- %- include('./partials/enctype') % -->
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  Fieldset $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="fieldset">
	<div class="eia-container">
		<!-- %- include('./partials/fieldset') % -->
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  form-label $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="formLabel">
	<div class="eia-container">
		<!-- %- include('./partials/form-label') % -->
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  form-placeholder $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="formPlaceholder">
	<div class="eia-container">
		<!-- %- include('./partials/form-placeholder') % -->
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  Introduction $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="introduction">
	<div class="eia-container">
		<!-- %- include('./partials/images') % -->
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  Accessible Label and Input $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="accessibleLabelAndInput">
	<div class="eia-container">
		<h2 id="" class="eia-h2 eia-margin-xlarge-top">Accessible Label and Input</h2>
		<!--
		<app-text-input-config></app-text-input-config>
		 -->
		<div class="uk-section uk-section-muted ">
			<h3 id="" class=""><span class="uk-label uk-label-danger">ACCESSIBILITY REQUIREMENT</span></h3>
			<ul>
				<li>
					The <code> for="name"</code> associates the label with the form input
				</li>
				<li>
					the <code>id="name"</code> should reference the label <code> for="name"</code>
				</li>
			</ul>
		</div>
		<p class="_note p">The user can click on the label to set focus to the form control. This is useful on small screens and to some people with motor disabilities, particularly when targeting small checkboxes and radio buttons. Clicking on labels is also an easy way to check for proper form labeling. If clicking the label sets focus to or activates the form control, then that label is programmatically associated.</p>
		<!-- Live Examples --
		<h3 class="eia-h3">Live Examples</h3>
		<dl class="">
			<dd><a [routerLink]="['/modules/']" [fragment]="'placeholder'">placeholder</a></dd>
		</dl>
		-->
		<!-- Example -->
		<h3 class="eia-h3">Example</h3>
		<div class="eia-card">
			<div class="l-row l-two-col-left-wide">
				<div class="primary l-col form-area">
					<div class="l-row l-two-col-left-narrow full-width">
						<div class="l-col"><label for="firstName">Firse Name:</label></div>
						<div class="l-col"><input name="firstName" id="firstName" type="text" autoComplete="firstname" /></div>
					</div>
					<div class="l-row l-two-col-left-narrow full-width">
						<div class="l-col"><label for="lastName">Last Name:</label></div>
						<div class="l-col"><input name="lastName" id="lastName" type="text" autoComplete="lastname" /></div>
					</div>
					<div class="l-row l-two-col-left-narrow full-width">
						<div class="l-col"><label for="email">Email:</label></div>
						<div class="l-col"><input id="email" id="email" type="email" autoComplete="email" /></div>
					</div>
					<div class="l-row l-two-col-left-narrow full-width">
						<div class="l-col"><label for="favoriteColor">Favorite Color:</label></div>
						<div class="l-col"><input id="favoriteColor" id="favoriteColor" type="number" autoComplete="off" /></div>
					</div>
					<div class="l-row l-two-col-left-narrow full-width">
						<div class="l-col"><label for="telephone">Phone Number:</label></div>
						<div class="l-col"><input name="telephone" id="telephone" type="tel" autoComplete="phonenumber" /></div>
					</div>
				</div>
			</div>

			<div class="l-col"></div>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="LabelAndInput">&lt;div class="primary form-area"&gt;
		  &lt;div class="l-row l-two-col-left-narrow full-width"&gt;
			&lt;div class="l-col"&gt;&lt;label  for="firstName"&gt;Firse Name:&lt;/label&gt;&lt;/div&gt;
			&lt;div class="l-col"&gt;&lt;input name="firstName" id="firstName" type="text" autoComplete="firstname" /&gt;&lt;/div&gt;
		  &lt;/div&gt;
		  &lt;div class="l-row l-two-col-left-narrow full-width"&gt;
			&lt;div class="l-col"&gt;&lt;label  for="lastName"&gt;Last Name:&lt;/label&gt;&lt;/div&gt;
			&lt;div class="l-col"&gt;&lt;input name="lastName" id="lastName" type="text" autoComplete="lastname" /&gt;&lt;/div&gt;
		  &lt;/div&gt;
		  &lt;div class="l-row l-two-col-left-narrow full-width"&gt;
			&lt;div class="l-col"&gt;&lt;label  for="email"&gt;Email:&lt;/label&gt;&lt;/div&gt;
			&lt;div class="l-col"&gt;&lt;input id="email" id="email" type="email" autoComplete="email" /&gt;&lt;/div&gt;
		  &lt;/div&gt;
		  &lt;div class="l-row l-two-col-left-narrow full-width"&gt;
			&lt;div class="l-col"&gt;&lt;label  for="favoriteColor"&gt;Favorite Color:&lt;/label&gt;&lt;/div&gt;
			&lt;div class="l-col"&gt;&lt;input id="favoriteColor" id="favoriteColor" type="number" autoComplete="off" /&gt;&lt;/div&gt;
		  &lt;/div&gt;
		  &lt;div class="l-row l-two-col-left-narrow full-width"&gt;
			&lt;div class="l-col"&gt;&lt;label  for="telephone"&gt;Phone Number:&lt;/label&gt;&lt;/div&gt;
			&lt;div class="l-col"&gt;&lt;input name="telephone" id="telephone" type="tel" autoComplete="phonenumber" /&gt;&lt;/div&gt;
		  &lt;/div&gt;
		&lt;/div&gt;</code></pre>
		<!-- Copy Button -->
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#LabelAndInput">
				<span></span>Copy to clipboard
			</button>
		</p>
		<hr class="uk-margin-large" />
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  Name $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="name">
	<div class="eia-container">
		<h2 id="" class="eia-h2 eia-margin-xlarge-top">Name</h2>

		<code>name</code>
		<p>Defines the unique identifier for that input within the form. It allows the server to access each input's value when submitted.</p>
		<span class="attribute-is-required">Required.</span>
		<span class="attribute-values">
			<code>"first_name"</code>
		</span>
		<p>
			The name value must be unique within the context of a <code>form</code> container.
		</p>
		<p>
			It can only contain alphanumeric characters <code>a-z</code> <code>A-Z</code> <code>0-9</code> and some special characters like <code>-</code> <code>_</code>… but no space.
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  No Validate $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="noValidate">
	<div class="eia-container">
		<h2 id="" class="eia-h2 eia-margin-xlarge-top">No Validate</h2>
		<code>novalidate</code>
		<p>Tells the browser to not validate the form on submission.</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  Accessible Radiobutton Group $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="accessibleRadiobuttonGroup">
	<div class="eia-container">
		<h2 id="" class="eia-h2 eia-margin-xlarge-top">Accessible Radiobutton Group</h2>

		<p>Radiobuttones should be utilized when the user has a list of options to choose from. Radiobuttones should always allow for multiple selections.</p>

		<div class="uk-section uk-section-muted ">
			<h3 id="" class=""><span class="uk-label uk-label-danger">ACCESSIBILITY REQUIREMENT</span></h3>
			<ul>
				<li>
					The <code>for="itemX"</code> associates the label with the form input <code>id="itemX"</code>
				</li>
				<li>
					The name is the common radiobutton group name <code>name="radioItems"</code>
				</li>
			</ul>
		</div>
		<p class="_note p">The user can click on the label to set focus to the form control. This is useful on small screens and to some people with motor disabilities, particularly when targeting small checkboxes and radio buttons. Clicking on labels is also an easy way to check for proper form labeling. If clicking the label sets focus to or activates the form control, then that label is programmatically associated.</p>
		<!-- Live Examples --
		<h3 class="eia-h3">Live Examples</h3>
		<dl class="">
			<dd><a [routerLink]="['/modules/']" [fragment]="'placeholder'">placeholder</a></dd>
		</dl>
		-->
		<!-- Example -->
		<h3 class="eia-h3">Example</h3>
		<div class="eia-card">
			<div class="l-row l-two-col-left-narrow full-width">
				<div class="l-col">
					<label>Select an Item:</label>
				</div>
				<div class="l-col">
					<div class="form-container">
						<label for="radioItemOne">Item One</label><input id="radioItemOne" type="radio" name="radioItems" value="Item One" />
					</div>
					<div class="form-container">
						<label for="radioItemTwo">Item Two</label><input id="radioItemTwo" type="radio" name="radioItems" value="Item Two" />
					</div>
					<div class="form-container">
						<label for="radioItemThr">Item Thr</label><input id="radioItemThr" type="radio" name="radioItems" value="Item Thr" />
					</div>
					<div class="form-container">
						<label for="radioItemFou">Item Fou</label><input id="radioItemFou" type="radio" name="radioItems" value="Item Fou" />
					</div>
				</div>
			</div>
		</div>

		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="RadiobuttonGroup">&lt;div class="l-row l-two-col-left-narrow full-width"&gt;
			&lt;div class="l-col"&gt;
				&lt;label&gt;Select an Item:&lt;/label&gt;
			&lt;/div&gt;
			&lt;div class="l-col"&gt;
				&lt;div class="form-container"&gt;
					&lt;label for="radioItemOne"&gt;Item One&lt;/label&gt;&lt;input id="radioItemOne" type="radio" name="radioItems" value="Item One" /&gt;
				&lt;/div&gt;
				&lt;div class="form-container"&gt;
					&lt;label for="radioItemTwo"&gt;Item Two&lt;/label&gt;&lt;input id="radioItemTwo" type="radio" name="radioItems" value="Item Two" /&gt;
				&lt;/div&gt;
				&lt;div class="form-container"&gt;
					&lt;label for="radioItemThr"&gt;Item Thr&lt;/label&gt;&lt;input id="radioItemThr" type="radio" name="radioItems" value="Item Thr" /&gt;
				&lt;/div&gt;
				&lt;div class="form-container"&gt;
					&lt;label for="radioItemFou"&gt;Item Fou&lt;/label&gt;&lt;input id="radioItemFou" type="radio" name="radioItems" value="Item Fou" /&gt;
				&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;</code></pre>
		<!-- Copy Button -->
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#RadiobuttonGroup">
				<span></span>Copy to clipboard
			</button>
		</p>
		<hr class="uk-margin-large" />
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  Required $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="required">
	<div class="eia-container">
		<h2 id="" class="eia-h2 eia-margin-xlarge-top">Required</h2>

		<code>required</code>
		<p>
			Tells the browser that this input is <strong>required</strong>. Leaving it empty will show a warning.
		</p>
		<p>
			You simply need to add the <code>required</code> attribute with no value:
		</p>
		<p>The browser should show a warning if you try to submit the form with an empty text input.</p>
		<!-- Live Examples --
		<h3 class="eia-h3">Live Examples</h3>
		<dl class="">
			<dd><a [routerLink]="['/modules/']" [fragment]="'placeholder'">placeholder</a></dd>
		</dl>
		-->
		<!-- Example -->
		<h3 class="eia-h3">Example</h3>
		<div class="eia-card">
			<div class="l-row l-two-col-left-wide">
				<div class="primary l-col form-area">
					<fieldset>
						<div>
							<div class="form-container">
								<input type="text" required="" />
							</div>
							<div class="button-container">
								<button type="submit" id="submitFeedback" tabIndex="0" role="button" class="submit">
									ok
								</button>
							</div>
						</div>
					</fieldset>
				</div>
			</div>
			<div class="l-col"></div>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="Required"></code></pre>
		<!-- Copy Button -->
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#Required">
				<span></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  Accessible Stand-alone Check-Box $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="accessibleStandAloneCheckBox">
	<div class="eia-container">
		<h2 id="" class="eia-h2 eia-margin-xlarge-top">Accessible Stand-alone Check-Box</h2>

		<p>A stand-alone checkbox should be utilized when the user has a single option to choose from. The label should always be positive and never negative. For example: "Active rather than Not Active," or "Yes rather than No."</p>

		<div class="uk-section uk-section-muted ">
			<h3 id="" class=""><span class="uk-label uk-label-danger">ACCESSIBILITY REQUIREMENT</span></h3>
			<ul>
				<li>
					The <code> for="itemX"</code> associates the label with the form input
				</li>
				<li>
					The <code>id="itemX"</code> should reference the label <code> for="itemX"</code>
				</li>
			</ul>
		</div>
		<p class="_note p">The user can click on the label to set focus to the form control. This is useful on small screens and to some people with motor disabilities, particularly when targeting small checkboxes and radio buttons. Clicking on labels is also an easy way to check for proper form labeling. If clicking the label sets focus to or activates the form control, then that label is programmatically associated.</p>
		<!-- Live Examples --
		<h3 class="eia-h3">Live Examples</h3>
		<dl class="">
			<dd><a [routerLink]="['/modules/']" [fragment]="'placeholder'">placeholder</a></dd>
		</dl>
		-->
		<!-- Example -->
		<h3 class="eia-h3">Example</h3>
		<div class="eia-card">
			<div class="l-row l-two-col-left-wide">
				<div class="primary l-col form-area">

					<div class="form-container">
						<input type="checkbox" name="lists" value="Terms" id="Terms" />
						<label for="Terms">I accept the terms</label>
					</div>

				</div>
			</div>
			<div class="l-col"></div>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="StandAloneCheckbox"></code></pre>
		<!-- Copy Button -->
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#StandAloneCheckbox">
				<span></span>Copy to clipboard
			</button>
		</p>
		<hr class="uk-margin-large" />
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  Target $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="target">
	<div class="eia-container">
		<h2 id="" class="eia-h2 eia-margin-xlarge-top">Target</h2>

		<p>Defines in which tab or window the clicked link will show up.</p>
		<code>"_blank"</code>
		<p>
			Opens in a new browsing context, which is usually a <strong>new tab</strong>.
		</p>


		<code>"_self"</code>
		<p>Opens in the current tab.</p>


		<code>"_parent"</code>
		<p>
			Opens in the parent browsing context, or <code>_self</code> is there is none.
		</p>

		<code>"_top"</code>
		<p>
			Opens in the top browsing context, or <code>_self</code> is there is none.
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  Textarea Configuration $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="textareaConfiguration">
	<div class="eia-container">
		<button href="#toggle-animation" class="eia-button eia-button-default" type="button" uk-toggle="target: #toggle-animation; animation: uk-animation-fade">Textarea Configurations</button>
		<div id="toggle-animation" class="eia-card uk-margin-small" hidden>

			<h2 id="" class="eia-h2 eia-margin-xlarge-top">Textarea Autocomplete</h2>
			<p>What controls fall into each group is described here: <a href="https://html.spec.whatwg.org/multipage/form-control-infrastructure.html#inappropriate-for-the-control">https://html.spec.whatwg.org/multipage/form-control-infrastructure.html#inappropriate-for-the-control</a>.</p>
			<ul>
				<li>The <code>autocomplete="on"</code> will <strong>enable</strong> autocomplete functionality in the browser.</li>
				<li>The <code>autocomplete="off"</code> will <strong>disable</strong> autocomplete functionality in the browser.</li>
			</ul>

			<h2 id="" class="eia-h2 eia-margin-xlarge-top">Textarea Autofocus</h2>
			<div class="uk-section uk-section-muted ">
				<h3 id="" class=""><span class="uk-label uk-label-danger">ACCESSIBILITY REQUIREMENT</span></h3>
				<ul>
					<li>
						Do not use the <code>autofocus=""</code>.</li>
				</ul>
			</div>
			<h2 id="" class="eia-h2 eia-margin-xlarge-top">Textarea Cols</h2>

			<ul>
				<li><code>cols=""</code> defines the number of columns.</li>
				<li>You can use <strong>integers</strong>, e.g.: <code>cols="40"</code>.</li>
			</ul>
			<!-- LIVE EXAMPLES --
			<h3 class="eia-h3">Live Examples</h3>
		<dl class="">
			<dd>
				<a></a>
			</dd>
		</dl>
		-->
			<!-- Example -->
			<h3 class="eia-h3">Example</h3>
			<div class="l-row l-two-col-left-wide">
				<div class="primary l-col form-area">
					<fieldset>
						<div class="form-container">
							<textarea columns="40" rows="10"></textarea>
						</div>
					</fieldset>
				</div>
				<div class="l-col"></div>
			</div>
			<!-- Textarea Disabled -->
			<h2 id="" class="eia-h2 eia-margin-xlarge-top">Textarea Disabled</h2>

			<ul>
				<li><code>disabled=""</code> defines the number of columns.</li>
				<li>
					Disables the textarea, e.g.: <code>disabled="true"</code>.</li>
			</ul>
			<!-- LIVE EXAMPLES --
			<h3 class="eia-h3">Live Examples</h3>
		<dl class="">
			<dd>
				<a></a>
			</dd>
		</dl>
		-->
			<!-- Example -->
			<h3 class="eia-h3">Example</h3>
			<div class="l-row l-two-col-left-wide">
				<div class="primary l-col form-area">
					<fieldset>
						<div class="form-container">
							<textarea columns="40" rows="5" placeholder="Disabled" disabled="disabled"></textarea>
						</div>
					</fieldset>
				</div>
				<div class="l-col"></div>
			</div>
			<!-- Textarea Max-Length -->
			<h2 id="" class="eia-h2 eia-margin-xlarge-top">Textarea Max-Length</h2>

			<ul>
				<li><code>maxlength=""</code> defines the maxlength amount of characters allowed.</li>
				<li>
					You can use <strong>integers</strong>, e.g.: <code>maxlength="50"</code>.</li>
			</ul>
			<!-- LIVE EXAMPLES --
			<h3 class="eia-h3">Live Examples</h3>
		<dl class="">
			<dd>
				<a></a>
			</dd>
		</dl>
		-->
			<!-- Example -->
			<h3 class="eia-h3">Example</h3>
			<div class="l-row l-two-col-left-wide">
				<div class="primary l-col form-area">
					<fieldset>
						<div class="form-container">
							<textarea columns="40" rows="5" placeholder="maxlength = 10" maxLength="10"></textarea>
						</div>
					</fieldset>
				</div>
				<div class="l-col"></div>
			</div>
			<!-- Textarea minlength -->
			<h2 id="" class="eia-h2 eia-margin-xlarge-top">Textarea minlength</h2>

			<ul>
				<li><code>minlength=""</code> defines the minimum amount of characters the textarea required to be valid.</li>
				<li>
					You can use <strong>integers</strong>, e.g.: <code>minlength="15"</code>.</li>
			</ul>
			<!-- LIVE EXAMPLES --
			<h3 class="eia-h3">Live Examples</h3>
		<dl class="">
			<dd>
				<a></a>
			</dd>
		</dl>
		-->
			<!-- Example -->
			<h3 class="eia-h3">Example</h3>
			<div class="l-row l-two-col-left-wide">
				<div class="primary l-col form-area">
					<fieldset>
						<div class="form-container">
							<textarea columns="40" rows="5" placeholder="minlength = 10" minLength="15"></textarea>
						</div>
					</fieldset>
				</div>
				<div class="l-col"></div>
			</div>
			<!-- Textarea Placeholder -->
			<h2 id="" class="eia-h2 eia-margin-xlarge-top">Textarea Placeholder</h2>

			<ul>
				<li><code>placeholder=""</code> defines a non-selectable placeholder text that only appears when the textarea is empty.</li>
				<li>
					You can hint at the format expected for the textarea, e.g.: <code>placeholder="Leave feedback"</code>
				</li>
			</ul>
			<!-- LIVE EXAMPLES --
			<h3 class="eia-h3">Live Examples</h3>
		<dl class="">
			<dd>
				<a></a>
			</dd>
		</dl>
		-->
			<!-- Example -->
			<h3 class="eia-h3">Example</h3>
			<div class="l-row l-two-col-left-wide">
				<div class="primary l-col form-area">
					<fieldset>
						<div class="form-container">
							<textarea columns="40" rows="5" placeholder="Leave feedback"></textarea>
						</div>
					</fieldset>
				</div>
				<div class="l-col"></div>
			</div>
			<!-- Textarea Rows -->
			<h2 id="" class="eia-h2 eia-margin-xlarge-top">Textarea Rows</h2>

			<ul>
				<li><code>rows=""</code> defines the number of rows.</li>
				<li>
					You can use <strong>integers</strong>, e.g.: <code>rows="5"</code>.</li>
			</ul>
			<!-- LIVE EXAMPLES --
			<h3 class="eia-h3">Live Examples</h3>
		<dl class="">
			<dd>
				<a></a>
			</dd>
		</dl>
		-->
			<!-- Example -->
			<h3 class="eia-h3">Example</h3>
			<div class="l-row l-two-col-left-wide">
				<div class="primary l-col form-area">
					<fieldset>
						<div class="form-container">
							<textarea columns="40" rows="5"></textarea>
						</div>
					</fieldset>
				</div>
				<div class="l-col"></div>
			</div>
			<!-- Textarea Spellcheck -->
			<h2 id="" class="eia-h2 eia-margin-xlarge-top">Textarea Spellcheck</h2>

			<ul>
				<li><code>spellcheck="true"</code> enables the browser spell-checker.</li>
			</ul>
			<!-- LIVE EXAMPLES --
			<h3 class="eia-h3">Live Examples</h3>
		<dl class="">
			<dd>
				<a></a>
			</dd>
		</dl>
		-->
			<!-- Example -->
			<h3 class="eia-h3">Example</h3>
			<div class="l-row l-two-col-left-wide">
				<div class="primary l-col form-area">
					<fieldset>
						<div class="form-container">
							<textarea columns="40" rows="10" spellCheck="true"></textarea>
						</div>
					</fieldset>
				</div>
				<div class="l-col"></div>
			</div>



			<div id="toggle-usage">
				<ul>
					<li><code>wrap=""</code> defines how the text should be wrapped.</li>
					<li></li>
					<li><code>wrap="soft"</code> the text will only break when needed.</li>
				</ul>
				<!-- Example -->
				<h3 class="eia-h3">Example</h3>
				<div class="l-row l-two-col-left-wide">
					<div class="primary l-col form-area">
						<code>wrap="hard"</code> will always be wrapped depending on the <code>cols</code> value.
						<fieldset>
							<div class="form-container">
								<textarea columns="40" rows="10" wrap="hard">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales suscipit ex, eu vulputate enim dictum quis. Morbi accumsan sem posuere justo placerat elementum. Vestibulum ac vulputate nisi. Maecenas cursus nec magna vitae auctor. Proin eu quam imperdiet, sagittis lorem vitae, volutpat velit. Proin in diam iaculis, facilisis magna at, ultrices justo. Fusce imperdiet metus non arcu tempus, eu mattis nisl aliquet. Quisque convallis facilisis ex, at volutpat purus consectetur quis.</textarea>
							</div>
						</fieldset>
						<code>wrap="soft"</code> the text will only break when needed.
						<fieldset>
							<div class="form-container">
								<textarea columns="40" rows="10" wrap="soft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales suscipit ex, eu vulputate enim dictum quis. Morbi accumsan sem posuere justo placerat elementum. Vestibulum ac vulputate nisi. Maecenas cursus nec magna vitae auctor. Proin eu quam imperdiet, sagittis lorem vitae, volutpat velit. Proin in diam iaculis, facilisis magna at, ultrices justo. Fusce imperdiet metus non arcu tempus, eu mattis nisl aliquet. Quisque convallis facilisis ex, at volutpat purus consectetur quis.</textarea>
							</div>
						</fieldset>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  Textarea $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="textarea">
	<div class="eia-container">
		<h3 class="eia-h2 eia-margin-xlarge-top">Live Examples</h3>Textarea</h2>

		<p class="_note p">The user can click on the label to set focus to the form control. This is useful on small screens and to some people with motor disabilities, particularly when targeting small checkboxes and radio buttons. Clicking on labels is also an easy way to check for proper form labeling. If clicking the label sets focus to or activates the form control, then that label is programmatically associated.</p>
		<!-- Live Examples --
		<h3 class="eia-h3">Live Examples</h3>
		<dl class="">
			<dd><a [routerLink]="['/modules/']" [fragment]="'placeholder'">placeholder</a></dd>
		</dl>
		-->
		<!-- Example -->
		<h3 class="eia-h3">Example</h3>
		<div class="l-row l-two-col-left-wide">
			<div class="primary l-col form-area">
				<div class="form-container">
					<label for="address">Enter your address:</label>
					<br />
					<textarea id="address" autoComplete="street-address"></textarea>
				</div>
			</div>
			<div class="l-col"></div>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="Textarea"></code></pre>
		<!-- Copy Button -->
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#Textarea">
				<span></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  Accessible Label and Input $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="accessibleLabelAndInput">
	<div class="eia-container">
		<h2 id="" class="eia-h2 eia-margin-xlarge-top">Accessible Label and Input</h2>
		<!--
		<app-text-input-config></app-text-input-config>	
		-->


		<div class="uk-section uk-section-muted ">
			<h3 id="" class=""><span class="uk-label uk-label-danger">ACCESSIBILITY REQUIREMENT</span></h3>
			<ul>
				<li>
					The <code> for="name"</code> associates the label with the form input
				</li>
				<li>
					the <code>id="name"</code> should reference the label <code> for="name"</code>
				</li>
			</ul>
		</div>
		<p class="_note p">The user can click on the label to set focus to the form control. This is useful on small screens and to some people with motor disabilities, particularly when targeting small checkboxes and radio buttons. Clicking on labels is also an easy way to check for proper form labeling. If clicking the label sets focus to or activates the form control, then that label is programmatically associated.</p>
		<!-- Live Examples --
		<h3 class="eia-h3">Live Examples</h3>
		<dl class="">
			<dd><a [routerLink]="['/modules/']" [fragment]="'placeholder'">placeholder</a></dd>
		</dl>
		-->
		<!-- Example -->
		<h3 class="eia-h3">Example</h3>
		<div class="eia-card">
			<div class="l-row l-two-col-left-wide">
				<div class="primary l-col form-area">
					<div class="l-row l-two-col-left-narrow full-width">
						<div class="l-col"><label for="firstName">Firse Name:</label></div>
						<div class="l-col"><input name="firstName" id="firstName" type="text" autoComplete="firstname" /></div>
					</div>
					<div class="l-row l-two-col-left-narrow full-width">
						<div class="l-col"><label for="lastName">Last Name:</label></div>
						<div class="l-col"><input name="lastName" id="lastName" type="text" autoComplete="lastname" /></div>
					</div>
					<div class="l-row l-two-col-left-narrow full-width">
						<div class="l-col"><label for="email">Email:</label></div>
						<div class="l-col"><input id="email" id="email" type="email" autoComplete="email" /></div>
					</div>
					<div class="l-row l-two-col-left-narrow full-width">
						<div class="l-col"><label for="favoriteColor">Favorite Color:</label></div>
						<div class="l-col"><input id="favoriteColor" id="favoriteColor" type="number" autoComplete="off" /></div>
					</div>
					<div class="l-row l-two-col-left-narrow full-width">
						<div class="l-col"><label for="telephone">Phone Number:</label></div>
						<div class="l-col"><input name="telephone" id="telephone" type="tel" autoComplete="phonenumber" /></div>
					</div>
				</div>
			</div>
			<div class="l-col"></div>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>


		<pre><code class="language-html" id="LabelAndInput">&lt;div class="primary form-area"&gt;
			&lt;div class="l-row l-two-col-left-narrow full-width"&gt;
				&lt;div class="l-col"&gt;&lt;label  for="firstName"&gt;Firse Name:&lt;/label&gt;&lt;/div&gt;
				&lt;div class="l-col"&gt;&lt;input name="firstName" id="firstName" type="text" autoComplete="firstname" /&gt;&lt;/div&gt;
			&lt;/div&gt;
			&lt;div class="l-row l-two-col-left-narrow full-width"&gt;
				&lt;div class="l-col"&gt;&lt;label  for="lastName"&gt;Last Name:&lt;/label&gt;&lt;/div&gt;
				&lt;div class="l-col"&gt;&lt;input name="lastName" id="lastName" type="text" autoComplete="lastname" /&gt;&lt;/div&gt;
			&lt;/div&gt;
			&lt;div class="l-row l-two-col-left-narrow full-width"&gt;
				&lt;div class="l-col"&gt;&lt;label  for="email"&gt;Email:&lt;/label&gt;&lt;/div&gt;
				&lt;div class="l-col"&gt;&lt;input id="email" id="email" type="email" autoComplete="email" /&gt;&lt;/div&gt;
			&lt;/div&gt;
			&lt;div class="l-row l-two-col-left-narrow full-width"&gt;
				&lt;div class="l-col"&gt;&lt;label  for="favoriteColor"&gt;Favorite Color:&lt;/label&gt;&lt;/div&gt;
				&lt;div class="l-col"&gt;&lt;input id="favoriteColor" id="favoriteColor" type="number" autoComplete="off" /&gt;&lt;/div&gt;
			&lt;/div&gt;
			&lt;div class="l-row l-two-col-left-narrow full-width"&gt;
				&lt;div class="l-col"&gt;&lt;label  for="telephone"&gt;Phone Number:&lt;/label&gt;&lt;/div&gt;
				&lt;div class="l-col"&gt;&lt;input name="telephone" id="telephone" type="tel" autoComplete="phonenumber" /&gt;&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;</code></pre>
		<!-- Copy Button -->
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#LabelAndInput">
				<span></span>Copy to clipboard
			</button>
		</p>
		<hr class="uk-margin-large" />
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  InputConfiguration $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="inputConfiguration">
	<div class="eia-container">
		<div class="primary">
			<div class="accordion all-closed">

				<h2 id="" class="eia-h2 eia-margin-xlarge-top">Input Text</h2>
				<div class="eia accordion-content">
					<ul class="ul">
						<li class="li">
							The <code>type="text"</code> is single line text input that accepts any type of character
						</li>
					</ul>
				</div>

				<h2 id="" class="eia-h2 eia-margin-xlarge-top">Input Number</h2>
				<div class="eia accordion-content">
					<ul class="ul">
						<li class="li">
							The <code>type="number"</code> the browser will try to only allow valid numbers
						</li>
						<li class="li">
							The <code>type="number"</code> on mobile devices, the number keyboard will show up
						</li>
					</ul>
				</div>

				<h2 id="" class="eia-h2 eia-margin-xlarge-top">Input Email</h2>
				<div class="eia accordion-content">
					<ul class="ul">
						<li class="li">
							The <code>type="email"</code> the browser will try to only allow valid email addresses
						</li>
						<li class="li">
							The <code>type="email"</code> on mobile devices, the email keyboard will show up.
						</li>
					</ul>
				</div>

				<h2 id="" class="eia-h2 eia-margin-xlarge-top">Input Telephone</h2>
				<div class="eia accordion-content">
					<ul class="ul">
						<li class="li">
							The <code>type="tel"</code> the browser will try to only allow valid phone numbers
						</li>
						<li class="li">
							The <code>type="tel"</code> on mobile devices, the numeric keyboard will show up.
						</li>
						<!-- 
									<li class="li">Additional <code>tel</code> configurations:
										<ul class="ul">
											<li class="li">
												<code>type="tel-country-code"</code>
											</li>
											<li class="li">
												<code>type="tel-national"</code>
											</li>
											<li class="li">
												<code>type="tel-area-code"</code>
											</li>
											<li class="li">
												<code>type="tel-local"</code>
											</li>
											<li class="li">
												<code>type="tel-local-prefix"</code>
											</li>
											<li class="li">
												<code>type="tel-local-suffix"</code>
											</li>
											<li class="li">
												<code>type="tel-extension"</code>
											</li>
										</ul>
									</li>
									 -->
					</ul>
				</div>

				<h2 id="" class="eia-h2 eia-margin-xlarge-top">Text Input Autocomplete</h2>
				<div class="eia accordion-content">
					<p>
						What controls fall into each group is described here: <a href="https://html.spec.whatwg.org/multipage/form-control-infrastructure.html#inappropriate-for-the-control">https://html.spec.whatwg.org/multipage/form-control-infrastructure.html#inappropriate-for-the-control</a>.
					</p>
					<ul class="ul">
						<li class="li">
							The <code>autocomplete="on"</code> will <strong>enable</strong> autocomplete functionality in the browser.
						</li>

						<li class="li">
							The <code>autocomplete="off"</code> will <strong>disable</strong> autocomplete functionality in the browser.
						</li>
					</ul>
				</div>

				<h2 id="" class="eia-h2 eia-margin-xlarge-top">Text Input Autofocus</h2>
				<div class="eia accordion-content">
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
				</div>

				<h2 id="" class="eia-h2 eia-margin-xlarge-top">Text Input Disabled</h2>
				<div class="eia accordion-content">
					<ul class="ul">
						<li class="li">
							<code>disabled=""</code> defines the number of columns.
						</li>
						<li class="li">
							Disables the input, e.g.: <code>disabled="true"</code>.
						</li>
						<li class="li">
							<div class="form-area">
								<div class="l-row l-two-col-left-narrow full-width">
									<div class="l-col">
										<label>Label:</label>
									</div>
									<div class="l-col">
										<div class="form-container">
											<input type="text" placeholder="Disabled" disabled="disabled" />
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>

				<h2 id="" class="eia-h2 eia-margin-xlarge-top">Text Input Max-Length</h2>
				<div class="eia accordion-content">
					<ul class="ul">
						<li class="li">
							<code>maxlength=""</code> defines the maxlength amount of characters allowed.
						</li>
						<li class="li">
							You can use <strong>integers</strong>, e.g.: <code>maxlength="50"</code>.
						</li>
						<li class="li">
							<div class="form-area">
								<div class="l-row l-two-col-left-narrow full-width">
									<div class="l-col">
										<label>Label:</label>
									</div>
									<div class="l-col">
										<div class="form-container">
											<input type="text" placeholder="maxlength = 10" maxLength="10" />
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>

				<h2 id="" class="eia-h2 eia-margin-xlarge-top">Text Input minlength</h2>
				<div class="eia accordion-content">
					<ul class="ul">
						<li class="li">
							<code>minlength=""</code> defines the minimum amount of characters the input required to be valid.
						</li>
						<li class="li">
							You can use <strong>integers</strong>, e.g.: <code>minlength="15"</code>.
						</li>
						<li class="li">
							<div class="form-area">
								<div class="l-row l-two-col-left-narrow full-width">
									<div class="l-col">
										<label>Label:</label>
									</div>
									<div class="l-col">
										<div class="form-container">
											<input type="text" placeholder="minlength = 10" minLength="15" />
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>

				<h2 id="" class="eia-h2 eia-margin-xlarge-top">Text Input Placeholder</h2>
				<div class="eia accordion-content">
					<ul class="ul">
						<li class="li">
							<code>placeholder=""</code> defines a non-selectable placeholder text that only appears when the input is empty.
						</li>
						<li class="li">
							You can hint at the format expected for the input, e.g.: <code>placeholder="Leave feedback"</code>
						</li>
						<li class="li">
							<div class="form-area">
								<div class="l-row l-two-col-left-narrow full-width">
									<div class="l-col">
										<label>Label:</label>
									</div>
									<div class="l-col">
										<div class="form-container">
											<input type="text" placeholder="Leave feedback" />
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>

				<h2 id="" class="eia-h2 eia-margin-xlarge-top">Text Input Spellcheck</h2>
				<div class="eia accordion-content">
					<ul class="ul">
						<li class="li">
							<code>spellcheck="true"</code> enables the browser spell-checker.
						</li>
						<li class="li">
							<div class="form-area">
								<div class="l-row l-two-col-left-narrow full-width">
									<div class="l-col">
										<label>Label:</label>
									</div>
									<div class="l-col">
										<div class="form-container">
											<input columns="40" rows="10" spellCheck="true" />
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  Validation $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="validation">
	<div class="eia-container">
		<h2 id="" class="eia-h2 eia-margin-xlarge-top">Validation</h2>
		<!-- Live Examples --
		<h3 class="eia-h3">Live Examples</h3>
		<dl class="">
			<dd><a [routerLink]="['/modules/']" [fragment]="'placeholder'">placeholder</a></dd>
		</dl>
		-->
		<!-- Example -->
		<h3 class="eia-h3">Example</h3>
		<div class="eia-card">
			<div class="l-row l-two-col-left-wide">
				<div class="primary l-col form-area">



					<div class="form-container">
						<label>Form Label</label>
						<textarea class="textarea invalid" rows="10" placeholder="e.g. Hello my name is Alex" name="message"></textarea>
					</div>
					<div class="uk-text-bold">Label Example</div>
					<div class="form-container">
						<label>Form Label</label>
						<textarea class="textarea valid" rows="10" placeholder="e.g. Hello my name is Alex" name="message"></textarea>
					</div>
					<div class="uk-text-bold">Title Example</div>

					<div class="form-container">
						<label>Title</label>
						<ul class="radio-container">
							<li><label><input type="radio" name="title" value="mr" />Mr</label></li>
							<li><label><input type="radio" name="title" value="mrs" />Mrs</label></li>
							<li><label><input type="radio" name="title" value="miss" />Miss</label></li>
						</ul>
					</div>

					<div class="uk-text-bold">First name Example</div>

					<div class="form-container">
						<label>First name</label>
						<input type="text" name="first_name" />

						style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;" />

					</div>

					<div class="uk-text-bold">Last name Example</div>



					<div class="form-container">
						<label>Last name</label>
						<input type="text" name="last_name" />
					</div>


					<div class="uk-text-bold">Email Example</div>


					<div class="form-container">
						<label>Email</label>
						<input type="email" name="email" required="" />
					</div>


					<div class="uk-text-bold">Phone Number Example</div>


					<div class="form-container">
						<label>Phone number</label>
						<input type="tel" name="phone" />
					</div>


					<div class="uk-text-bold">Password Example</div>


					<div class="form-container">
						<label>Password</label>
						<input type="password" name="password" />

						style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;" />

					</div>

					<div class="uk-text-bold">Select Example</div>

					<div class="form-container">
						<label>Country</label>
						<div class="select-container">
							<select>
								<option>China</option>
								<option>India</option>
								<option>United States</option>
								<option>Indonesia</option>
								<option>Brazil</option>
							</select>
						</div>
						<div class="form-container">
							<label><input type="checkbox" vale="terms" /> I agree to the <a>terms and conditions</a></label>
						</div>
						<div class="button-container">
							<button>Sign up</button><button type="reset">Resetform</button>
						</div>

					</div>
				</div>
			</div>

			<div class="l-col"></div>
		</div>
		<!-- HTML -->
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="Validation"></code></pre>
		<!-- Copy Button -->
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#Validation">
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