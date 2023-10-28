<!doctype html>
<html>
<?php
$globalTitle 		= 'U.S. Energy Information Administration (EIA)';
$pageTitle 			= 'Forms';
?>


	<div class="l-row l-two-col-right">
		<div class="l-col">
			<span class="modules">
				<h1 class="uk-h1 tm-heading-fragment">
					<!-- title here -->
				</h1>
<p class="uk-text-lead"></p>
			</span>
			<div class="section" id="Button">
				<h2>Button</h2>
				<?php include('forms/button.inc') ?>
			</div>



			
				<h2>Checkboxes</h2>
				<p>Checkboxes must be clearly organized into groups and generally aligned uniformly with a corresponding textual label.</p>
				<?php include('forms/checkbox-group.inc') ?>
			</div>
			
				<?php include('forms/stand-alone-checkbox.inc') ?>
			</div>
			
				<?php include('forms/branded-checkbox.inc') ?>
			</div>

			
				<h2>Radiobuttons</h2>
				<p>Radiobuttons must be clearly organized into groups and generally aligned uniformly with a corresponding textual label.</p>
				<?php include('forms/radiobutton-group.inc') ?>
			</div>

			
				<h2>Text input</h2>
				<?php include('forms/text-input-config.inc') ?>
			</div>
			
				<?php include('forms/text-input.inc') ?>
			</div>

			
				<h2>Textarea</h2>
				<?php include('forms/textarea-config.inc') ?>
			</div>
			
				<?php include('forms/textarea.inc') ?>
			</div>



			
				<h2>Dropdown Select</h2>
				<?php include('forms/dropdown-select.inc.inc') ?>
			</div>
			
				<?php include('forms/branded-dropdown-select.inc.inc') ?>
			</div>

			
				<h2>Validation</h2>
				<?php include('forms/validation.inc') ?>
			</div>


			
				<h2>Form Containers</h2>
				<?php include('forms/fieldset.inc') ?>
			</div>
			
				<?php include('forms/form-label.inc') ?>
			</div>
		</div>
		<div>
			<?php include('./includes/sub-nav.inc') ?>
		</div>
	</div>
	<!-- includes/footer.inc') ?>
</body>


</html>
<!--

					<div class="alert">
						<p>Not all these form elements have been approved. Please refer to Miroslava for usage.</p>
					</div>

					<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Select Item / Dropdown</h2>
					<p>
						The width is defined by the layout container, for example: <code>l-col</code>.
					</p>


					<div class="_module-wrapper">
						<div class="_module-container">
							<div class="l-row l-four-col-even">
								<div class="l-col">
									<fieldset>
										<legend>Legend Label</legend>
										<div class="dropdown-container no-js">
											<div class="dropdown-button">
												<span class="text">For data year:</span>
												<span class="eia ico d-arrow">
													<span>dropdown arrow</span>
												</span>
											</div>
											<div class="dropdown-menu">
												<ul>
													<li class="eia ico pdf">
														<a>2011</a>
													</li>
													<li class="eia ico pdf">
														<a>2010</a>
													</li>
													<li class="eia ico pdf">
														<a>2009</a>
													</li>
													<li class="eia ico pdf">
														<a>2008</a>
													</li>
													<li>
														<a href="/totalenergy/data/annual/archive/">all archives</a>
													</li>
												</ul>
											</div>
										</div>
									</fieldset>
								</div>
								<div class="l-col"></div>
								<div class="l-col"></div>
								<div class="l-col"></div>
							</div>
						</div>
					</div>


					<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Select Item / Dropdown</h2>
					<p>
						Secondary content areas spacing and style can be easily defined by adding a primary/secondary: <code>l-col</code>.
					</p>


					<div class="_module-wrapper">
						<div class="_module-container">
							<div class="l-row l-four-col-even">
								<div class="l-col">
									<div class="secondary">
										<ul>
											<li class="eia ico pdf">
												<a href="/petroleum/archive/comparison7822010.pdf">Full report</a>
											</li>
										</ul>

										<fieldset>
											<legend>Previous editions</legend>
											<div class="dropdown-container no-js">
												<div class="dropdown-button">
													<span class="text">Year</span>
													<span class="eia ico d-arrow">
														<span>dropdown arrow</span>
													</span>
												</div>
												<div class="dropdown-menu">
													<ul>
														<li class="eia ico pdf">
															<a href="/petroleum/archive/comparison7822009.pdf">1998 to 2007</a>
														</li>
														<li class="eia ico pdf">
															<a href="/petroleum/archive/comparison7822008.pdf">1994-2006</a>
														</li>
														<li class="eia ico pdf">
															<a href="/petroleum/archive/comparison7822007.pdf">1994-2005</a>
														</li>
														<li class="eia ico pdf">
															<a href="/petroleum/archive/article782.pdf">1995-2003</a>
														</li>
														<li class="eia ico pdf">
															<a href="/petroleum/archive/comparison782.pdf">1995-2001</a>
														</li>
														<li class="eia ico pdf">
															<a href="/petroleum/archive/art9912.pdf">1983-1998</a>
														</li>
													</ul>
												</div>
											</div>
										</fieldset>
									</div>
								</div>
								<div class="l-col"></div>
								<div class="l-col"></div>
								<div class="l-col"></div>
							</div>
						</div>
					</div>



					<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Select Item / Dropdown - No Javascript</h2>
					<p>
						Setting the width of the select form is as simple as setting the width of the <code>form-container</code>.
					</p>


					<div class="_module-wrapper">
						<div class="_module-container">
							<div class="l-row l-report-header">
								<div class="l-col">
									<div class="form-container do-not-print">
										<fieldset>
											<legend>Annual Energy Review archives</legend>
											<div class="dropdown-container">
												<div class="dropdown-button">
													<span class="text">Year</span>
													<span class="eia ico d-arrow">
														<span>dropdown arrow</span>
													</span>
												</div>
												<div class="dropdown-menu">
													<ul>
														<li class="eia ico pdf">
															<a>2011</a>
														</li>
														<li class="eia ico pdf">
															<a>2010</a>
														</li>
														<li class="eia ico pdf">
															<a>2009</a>
														</li>
														<li class="eia ico pdf">
															<a>2008</a>
														</li>
														<li>
															<a>all archives</a>
														</li>
													</ul>
												</div>
											</div>
										</fieldset>
									</div>
								</div>
							</div>
						</div>
					</div>




					<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Javascript</h2>

					<div class="_module-wrapper">
						<div class="_module-container">
							<div class="l-row l-full-width-col">
								<div class="l-col">
									<div class="form-container do-not-print">
										<fieldset>
											<legend>Archive</legend>
											<div class="dropdown-container js">
												<div class="dropdown-button">
													<span class="text">Need to add archive</span>
													<span class="eia ico d-arrow">
														<span>dropdown arrow</span>
													</span>
												</div>
												<div class="dropdown-menu">
													<ul>
														<li>Lorem ipsum dolor sit amet</li>
														<li>Consectetur adipiscing elit</li>
														<li>Cras dictum</li>
														<li>Orci quis aliquet hendrerit</li>
														<li>Lorem ipsum dolor sit amet</li>
														<li>Consectetur adipiscing elit</li>
														<li>Cras dictum</li>
														<li>Orci quis aliquet hendrerit</li>
													</ul>
												</div>
											</div>
										</fieldset>
									</div>
								</div>
							</div>
						</div>
					</div>


					<?php /*
						<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Date Picker</h2>
						<p>Not approved!</p>

					<div class="_module-wrapper">
						<div class="_module-container">
							<div class="l-row l-two-col-left">
								<div class="l-col">
									<p>Date Picker.</p>
								</div>
								<div class="l-col">
									<div class="form-container do-not-print">
										<label>Select Date</label>
										<input id="date" type="date" class="date-picker" value="">
									</div>
								</div>
							</div>
						</div>

						<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">tbd</h2>
						<div class="l-row l-full-width-col">
							<div class="l-col">

								<div class="dropdown-container">
									<h4>Label</h4>

									<div class="dropdown-button">
										<span class="text">All available</span>
										<span class="eia ico d-arrow">
											<span>dropdown arrow</span>
										</span>
									</div>
									<div class="dropdown-menu">
										<ul>
											<li class="head">
												<h2>Most requested data</h2>
											</li>
											<li class="eia ico pdf"><a>Item</a></li>
											<li class="eia ico xls"><a>Item</a></li>
											<li class="eia ico csv"><a>Item</a></li>
											<li class="eia ico html"><a>Item</a></li>
											<li class="eia ico json"><a>Item</a></li>
											<li class="eia ico doc"><a>Item</a></li>
											<li class="eia ico ppt"><a>Item</a></li>
										</ul>

									</div>
									<div>


										<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">fieldset</h2>
	
					<div class="_module-wrapper">
						<div class="_module-container">
							<div class="l-row l-two-col-left">
								<div class="l-col">
									<span class="attribute-name"><code>fieldset</code></span>
									<p>Defines a <strong>group of controls</strong> within a form.</p>
								</div>
								<div class="l-col">
									<code>n/a</code>
									<span class="example">
										<form action="/subscribe" method="post">
											<fieldset>
												<legend>Subscribe to the Newsletter</legend>
												<input type="email" name="email" />
					<button>Ok</button>
</p>
					</fieldset>
					</form>
				</span>
			</div>
		</div>
	</div>


	<div class="_module-wrapper">
		<div class="_module-container">
			<div class="l-row l-two-col-left">
				<div class="l-col">
					<span class="attribute-name"><code>disabled</code></span>
					<p>Disables the controls the fieldset contains.
				</div>
				<div class="l-col">
					<code>n/a</code>
					<span class="example">
						<fieldset disabled="">
							<legend>Subscribe to the Newsletter</legend>
							<input type="email" name="email" />
							<button>Ok</button>
</p>
						</fieldset></textarea>

					</span>
				</div>
			</div>
		</div>
	</div>

	<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">form</h2>

	<div class="_module-wrapper">
		<div class="_module-container">
			<div class="l-row l-two-col-left">
				<div class="l-col">
					<span class="attribute-name"><code>action</code></span>
					<p>Defines which URL the form's information is sent to when submitted.</p>
				</div>
				<div class="l-col">
					<span class="attribute-name"><code>"/contact"</code></span>
					<p>You can use a <strong>relative</strong> URL.</p>


					<span class="_html">
						<textarea class="textarea" rows="5"><form action="/contact">
<label>Email</label>
<input type="email" name="email" placeholder="e.g. alex@smith.com">
<button>Ok</button>
</p>
</form></textarea>

					</span>



					<span class="attribute-name"><code>action</code></span>
					<code>"https://htmlreference.io/contact"</code>
					<p>You can use an <strong>absolute</strong> URL.</p>

					<span class="_html">
						<textarea class="textarea" rows="5"><form action="https://htmlreference.io/contact">
<label>Email</label>
<input type="email" name="email" placeholder="e.g. alex@smith.com">
<button>Ok</button>
</p>
</form></textarea>

					</span>
				</div>
			</div>


			<div class="_module-wrapper">
				<div class="_module-container">
					<div class="l-row l-two-col-left">
						<div class="l-col">
							<h4>method</h4>
							<p>Defines the HTTP method used when submitting the form.</p>
						</div>
						<div class="l-col">
							<span class="attribute-name"><code>"post"</code></span>
							<p>The form information is sent to the server as part of the <strong>request body</strong>.</p>



							<span class="_html">
								<textarea class="textarea" rows="5">
<form method="post">
<label>Email</label>
<input type="email" name="email" placeholder="e.g. alex@smith.com">
<button>Ok</button>
</p>
</form>
</textarea>
							</span>


							<h4></h4>
							<code>"get"</code>
							</span>
							<p>The form information is sent to the server as part <strong>URL parameters</strong>: <code>/contact?first_name=Alex&amp;last_name=Smith</code>.</p>


							<span class="_html">
								<textarea class="textarea" rows="5"><form method="get">
<label>Email</label>
<input type="email" name="email" placeholder="e.g. alex@smith.com">
<button>Ok</button>
</p>
</form></textarea>

							</span>
						</div>
					</div>



















					<div class="_module-wrapper">
						<div class="_module-container">
							<div class="l-row l-two-col-left">
								<div class="l-col">
									<h4>name</h4>
									<p>The form's name when sent to the server. Useful when multiple forms are present on the same web page.</p>
								</div>
								<div class="l-col">
									<span class="attribute-name"><code>"sign_up_form"</code></span>
									<p>The name value must be unique within the context of the whole web page.</p>
									<p>It can only contain alphanumeric characters <code>a-z</code> <code>A-Z</code> <code>0-9</code> and some special characters like <code>-</code> <code>_</code>… but no space.</p>


									<span class="_html">
										<textarea class="textarea" rows="5"><form name="sign_up_form">
<label>Email</label>
<input type="email" name="email" placeholder="e.g. alex@smith.com">
<button>Ok</button>
</p>
</form></textarea>

									</span>
								</div>
							</div>


















							<div class="_module-wrapper">
								<div class="_module-container">
									<div class="l-row l-two-col-left">
										<div class="l-col">
											<h4>autocomplete</h4>
											<p>Determines if the browser can autocomplete all the form's controls.</p>
										</div>
										<div class="l-col">
											<span class="attribute-name"><code>"off"</code></span>
											<p>The browser will <strong>disable</strong> autocomplete functions. This can however be overriden for each control individually.</p>
											<span class="example">
												<form autoComplete="off">
													<label>Email</label>
													<input type="email" name="email" placeholder="e.g. alex@smith.com">
													<button>Ok</button>
</p>
												</form>
											</span>


											<span class="_html">
												<textarea class="textarea" rows="5"><form autoComplete="off">
<label>Email</label>
<input type="email" name="email" placeholder="e.g. alex@smith.com">
<button>Ok</button>
</p>
</form></textarea>

											</span>

											<h4><code>"on"</code></h4>
											<p>The browser will <strong>enable</strong> autocomplete functions. This can however be overriden for each control individually.</p>
											<p>Try pressing "down" in this input. It will show previously entered email addresses.</p>

											<span class="example">
												<form autoComplete="on">
													<label>Email</label>
													<input type="email" name="email" placeholder="e.g. alex@smith.com">
													<button>Ok</button>
</p>
												</form>
											</span>


											<span class="_html">
												<textarea class="textarea" rows="5"><form autoComplete="on">
<label>Email</label>
<input type="email" name="email" placeholder="e.g. alex@smith.com">
<button>Ok</button>
</p>
</form></textarea>

											</span>
										</div>
									</div>





















									<div class="_module-wrapper">
										<div class="_module-container">
											<div class="l-row l-two-col-left">
												<div class="l-col">
													<h4>target</h4>
													<p>Defines in which tab or window the clicked link will show up.</p>
												</div>
												<div class="l-col">
													<span class="attribute-name"><code>"_blank"</code></span>
													<p>Opens in a new browsing context, which is usually a <strong>new tab</strong>.</p>
													<span class="example">
														<form href="https://htmlreference.io" target="_blank">
															<label>Email</label>
															<input type="email" name="email" placeholder="e.g. alex@smith.com">
															<button>Ok</button>
</p>
														</form>
													</span>


													<span class="_html">
														<textarea class="textarea" rows="5"><form href="https://htmlreference.io" target="_blank">
<label>Email</label>
<input type="email" name="email" placeholder="e.g. alex@smith.com">
<button>Ok</button>
</p>
</form></textarea>

													</span>

													<h4><code>"_self"</code></h4>
													<p>Opens in the current tab.</p>
													<span class="example">
														<form href="https://htmlreference.io" target="_self">
															<label>Email</label>
															<input type="email" name="email" placeholder="e.g. alex@smith.com">
															<button>Ok</button>
</p>
														</form>
													</span>


													<span class="_html">
														<textarea class="textarea" rows="5"><form href="https://htmlreference.io" target="_self">
<label>Email</label>
<input type="email" name="email" placeholder="e.g. alex@smith.com">
<button>Ok</button>
</p>
</form></textarea>

													</span>

													<h4><code>"_parent"</code></h4>
													<p>Opens in the parent browsing context, or <code>_self</code> is there is none.</p>

												</div>
												<div class="l-col">

													<span class="example">
														<form href="https://htmlreference.io" target="_parent">
															<label>Email</label>
															<input type="email" name="email" placeholder="e.g. alex@smith.com">
															<button>Ok</button>
</p>
														</form>
													</span>


													<span class="_html">
														<textarea class="textarea" rows="5"><form href="https://htmlreference.io" target="_parent">
<label>Email</label>
<input type="email" name="email" placeholder="e.g. alex@smith.com">
<button>Ok</button>
</p>
</form></textarea>

													</span>

													<h4> <code>"_top"</code></h4>
													<p>Opens in the top browsing context, or <code>_self</code> is there is none.</p>

												</div>
												<div class="l-col">

													<span class="example">
														<form href="https://htmlreference.io" target="_top">
															<label>Email</label>
															<input type="email" name="email" placeholder="e.g. alex@smith.com">
															<button>Ok</button>
</p>
														</form>
													</span>


													<span class="_html">
														<textarea class="textarea" rows="5"><form href="https://htmlreference.io" target="_top">
<label>Email</label>
<input type="email" name="email" placeholder="e.g. alex@smith.com">
<button>Ok</button>
</p>
</form></textarea>
													</span>

												</div>
											</div>





















											<div class="_module-wrapper">
												<div class="_module-container">
													<div class="l-row l-two-col-left">
														<div class="l-col">

															<h4>enctype</h4>
															<p>Defines the <a href="https://www.iana.org/assignments/media-types/media-types.xhtml">MIME type</a> of the information sent to the server. Only works if the method is <code>post</code>.</p>

														</div>
														<div class="l-col">

															<span class="attribute-name"><code>"application/x-www-form-urlencoded"</code></span>
															<strong class="value-is-default">Default.</strong>
															<p>The <strong>default</strong> value.</p>
															<span class="example">
																<form enctype="application/x-www-form-urlencoded">
																	<label>Email</label>
																	<input type="email" name="email" placeholder="e.g. alex@smith.com">
																	<button>Ok</button>
</p>
																</form>
															</span>


															<span class="_html">
																<textarea class="textarea" rows="5"><form enctype="application/x-www-form-urlencoded">
<label>Email</label>
<input type="email" name="email" placeholder="e.g. alex@smith.com">
<button>Ok</button>
</p>
</form></textarea>

															</span>

															<h4><code>"text/plain"</code></h4>
															<p>For HTML5 plain text.</p>
															<span class="example">
																<form enctype="text/plain">
																	<label>Email</label>
																	<input type="email" name="email" placeholder="e.g. alex@smith.com">
																	<button>Ok</button>
</p>
																</form>
															</span>


															<span class="_html">
																<textarea class="textarea" rows="5"><form enctype="text/plain">
<label>Email</label>
<input type="email" name="email" placeholder="e.g. alex@smith.com">
<button>Ok</button>
</p>
</form></textarea>

															</span>

															<h4><code>"multipart/form-data"</code></h4>
															<p>Needed when using an <code>&lt;input type="file"&gt;</code> element.</p>

														</div>
														<div class="l-col">

															<span class="example">
																<form enctype="multipart/form-data">
																	<label>Upload</label>
																	<input type="file">
																</form>
															</span>


															<span class="_html">
																<textarea class="textarea" rows="5"><form enctype="multipart/form-data">
<label>Upload</label>
<input type="file">
</form></textarea>

															</span>
														</div>
													</div>





















													<div class="_module-wrapper">
														<div class="_module-container">
															<div class="l-row l-two-col-left">
																<div class="l-col">
																	<span class="attribute-name"> <code>novalidate</code></span>
																	<p>Tells the browser to not validate the form on submission.
																</div>
																<div class="l-col">
																	<span class="example">
																		<form novalidate="">
																			<label>Email</label>
																			<input type="email" name="email" placeholder="e.g. alex@smith.com">
																			<button>Ok</button>
</p>
																		</form>
																	</span>


																	<span class="_html">
																		<textarea class="textarea" rows="5"><form novalidate="">
<label>Email</label>
<input type="email" name="email" placeholder="e.g. alex@smith.com">
<button>Ok</button>
</p>
</form></textarea>

																	</span>
																</div>
															</div>










															<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">input</h2>
															<p>Defines an <strong>interactive control</strong> within a web form.</p>

															<div class="_module-wrapper">
																<div class="_module-container">
																	<div class="l-row l-two-col-left">
																		<div class="l-col">

																			<code>n/a</code>
																			<span class="example"><input type="text" name="first_name" placeholder="e.g. Alex"></span>

																			<span class="attribute-name"><code>type</code></span>
																			<p>Defines the type of form input.</p>
																			<span class="attribute-is-required">Required.</span>
																		</div>
																		<div class="l-col">
																			<span class="attribute-values"><code>"text"</code></span>
																			<p>Simple single line text input that accepts any type of character</p>

																			<span class="attribute-name"><code>"email"</code></span>
																			<p>Like a text input, but the browser will try to only allow valid email addresses.</p>
																			<p>On mobile devices, the email keyboard will show up.</p>

																			<span class="attribute-name"><code>"number"</code></span>
																			<p>Like a text input, but the browser will try to only allow valid numbers.</p>
																			<p>On mobile devices, the number keyboard will show up.</p>



																			<h4>Radiobuttons and Checkboxes</h4>
																			<p>
																				Radiobuttons and Checkboxes must be clearly organized into groups and generally aligned uniformly with a corresponding textual label.
																			</p>
																			<h5>Checkboxes</h5>
																			<p>
																				Checkboxes should be utilized when the user has a list of options to choose from. Checkboxes should always allow for multiple selections.
																			</p>
																			<span class="attribute-name"><code>"checkbox"</code></span>
																			<p>A toggle checkbox that can only be one of two states: checked or unchecked. The value is only submitted by the form if the checkbox is checked.</p>
																			<pre><code class="html">&lt;ul class="checkbox-container"&gt;
&lt;li class="custom-checkbox"&gt;&lt;input type="checkbox" name="lists" class="custom-checkbox-input" value="valueOne" id="valueOne"&gt;&lt;label for="valueOne" class="custom-checkbox-label"&gt;&lt;span class="custom-checkbox-label-inside"&gt;&lt;a&gt;Label One&lt;/a&gt;&lt;/span&gt;&lt;/label&gt;&lt;/li&gt;
&lt;li class="custom-checkbox"&gt;&lt;input type="checkbox" name="lists" class="custom-checkbox-input" value="valueTwo" id="valueTwo"&gt;&lt;label for="valueTwo" class="custom-checkbox-label"&gt;&lt;span class="custom-checkbox-label-inside"&gt;&lt;a&gt;Label Two&lt;/a&gt;&lt;/span&gt;&lt;/label&gt;&lt;/li&gt;
&lt;li class="custom-checkbox"&gt;&lt;input type="checkbox" name="lists" class="custom-checkbox-input" value="valueThr" id="valueThr"&gt;&lt;label for="valueThr" class="custom-checkbox-label"&gt;&lt;span class="custom-checkbox-label-inside"&gt;&lt;a&gt;Label Thr&lt;/a&gt;&lt;/span&gt;&lt;/label&gt;&lt;/li&gt;
&lt;li class="custom-checkbox"&gt;&lt;input type="checkbox" name="lists" class="custom-checkbox-input" value="valueFou" id="valueFou"&gt;&lt;label for="valueFou" class="custom-checkbox-label"&gt;&lt;span class="custom-checkbox-label-inside"&gt;&lt;a&gt;Label Fou&lt;/a&gt;&lt;/span&gt;&lt;/label&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>

																			<span class="example">
																				<ul class="checkbox-container">
																					<li class="custom-checkbox"><input type="checkbox" name="lists" class="custom-checkbox-input" value="valueOne" id="valueOne">
																						<label for="valueOne" class="custom-checkbox-label"><span class="custom-checkbox-label-inside"><a>Label One</a></span></label>
																					</li>
																					<li class="custom-checkbox"><input type="checkbox" name="lists" class="custom-checkbox-input" value="valueTwo" id="valueTwo">
																						<label for="valueTwo" class="custom-checkbox-label"><span class="custom-checkbox-label-inside"><a>Label Two</a></span></label>
																					</li>
																					<li class="custom-checkbox"><input type="checkbox" name="lists" class="custom-checkbox-input" value="valueThr" id="valueThr">
																						<label for="valueThr" class="custom-checkbox-label"><span class="custom-checkbox-label-inside"><a>Label Thr</a></span></label>
																					</li>
																					<li class="custom-checkbox"><input type="checkbox" name="lists" class="custom-checkbox-input" value="valueFou" id="valueFou">
																						<label for="valueFou" class="custom-checkbox-label"><span class="custom-checkbox-label-inside"><a>Label Fou</a></span></label>
																					</li>
																				</ul>
																			</span>
																			<h5>Stand-alone Check-Box</h5>
																			<p></p>
																			A stand-alone checkbox should be utilized when the user has a single option to choose from. The label should always be positive and never negative. For example: "Active rather than Not Active," or "Yes rather than No."
																			</p>

																			<span class="example">
																				<ul>
																					<li class="custom-checkbox"><input type="checkbox" name="lists" class="custom-checkbox-input" value="Terms" id="Terms">
																						<label for="Terms" class="custom-checkbox-label">I accept the terms</label>
																					</li>
																				</ul>
																			</span>
																			<pre><code class="html">&lt;ul&gt;
&lt;li class="custom-checkbox"&gt;&lt;input type="checkbox" name="lists" class="custom-checkbox-input" value="Terms" id="Terms"&gt;&lt;label for="Terms" class="custom-checkbox-label"&gt;I accept the terms&lt;/label&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>




																			<h5>Radiobuttons</h5>
																			<p>
																				Radiobuttons should be utilized when the user must choose from two or more options and where each option is mutually exclusive of all other options. Radiobuttons should also be used in place of Select-field if the fixed number of options is less than six. Unless there are business rules that state otherwise, Radiobuttons should always have a default selection. If there's an instance where the user can not have a selection, then offer a "none" option.
																			</p>
																			<span class="attribute-name"><code>"radio"</code></span>
																			<p>Needs to be used used in combination with other radio buttons, so that they are mutually exclusive.</p>

																			<span class="example">
																				<input type="radio">
																			</span>

																			<span class="_html">
																				<textarea class="textarea" rows="1"><input type="radio"></textarea>

																			</span>

																		</div>
																	</div>




																	<p>You link radio buttons through a similar <code>name</code> value:</p>
																	<code><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label&gt;</span><br data-jekyll-commonmark-ghpages="">  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"newsletter"</span> <span class="na">value=</span><span class="s">"yes"</span><span class="nt">&gt;</span><br data-jekyll-commonmark-ghpages="">  Yes<br data-jekyll-commonmark-ghpages=""><span class="nt">&lt;/label&gt;</span><br data-jekyll-commonmark-ghpages=""><span class="nt">&lt;label&gt;</span><br data-jekyll-commonmark-ghpages="">  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"newsletter"</span> <span class="na">value=</span><span class="s">"no"</span><span class="nt">&gt;</span><br data-jekyll-commonmark-ghpages="">  No<br data-jekyll-commonmark-ghpages=""><span class="nt">&lt;/label&gt;</span></code></pre>
																	</code>
																	<p>Notice how clicking one deselects the other.</p>

																	<span class="example">
																		<label><input type="radio" name="newsletter" value="yes">Yes</label><label>
																			<input type="radio" name="newsletter" value="no">No</label>
																	</span>


																	<span class="_html">
																		<textarea class="textarea" rows="3"><label><input type="radio" name="newsletter" value="yes">Yes</label><label>
<input type="radio" name="newsletter" value="no">No</label></textarea>

																	</span>


																	<div class="_module-wrapper">
																		<div class="_module-container">
																			<div class="l-row l-two-col-left">
																				<div class="l-col">
																					<span class="attribute-name"><code>name</code></span>
																					<p>Defines the unique identifier for that input within the form. It allows the server to access each input's value when submitted.</p>
																					<span class="attribute-is-required">Required.</span>
																				</div>
																				<div class="l-col">
																					<span class="attribute-values"><code>"first_name"</code></span>
																					<p>The name value must be unique within the context of a <code>&lt;form&gt;</code> container.</p>
																					<p>It can only contain alphanumeric characters <code>a-z</code> <code>A-Z</code> <code>0-9</code> and some special characters like <code>-</code> <code>_</code>… but no space.</p>
																				</div>
																			</div>








																			<div class="l-row l-two-col-left">
																				<div class="l-col">
																					<h4>placeholder</h4>
																					<p>Defines a non-selectable placeholder text that only appears when the input is empty.</p>
																				</div>
																				<div class="l-col">
																					<span class="attribute-name"><code>"e.g. alex@smith.com"</code></span>
																					<p>You can hint at the format expected for the input.</p>

																					<span class="example">
																						<input placeholder="e.g. alex@smith.com">
																					</span>

																					<p>As a best practice, it is recommended to have a label to describe the input, and use the placeholder to showcase an example:</p>
																					<p>Notice how the placeholder disappears on focus, hence the need to maintain a separate label.</p>

																					<span class="example">
																						<label>Email</label>
																						<input type="email" name="email" placeholder="e.g. alex@smith.com">
																					</span>
																				</div>
																			</div>








																			<div class="l-row l-two-col-left">
																				<div class="l-col">
																					<span class="attribute-name"> <code>required</code></span>
																					<p>Tells the browser that this input is <strong>required</strong>. Leaving it empty will show a warning.</p>
																				</div>
																				<div class="l-col">

																					<p>You simply need to add the <code>required</code> attribute with no value:</p>
																					<code><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form&gt;</span><br data-jekyll-commonmark-ghpages="">  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">required</span><span class="nt">&gt;</span><br data-jekyll-commonmark-ghpages=""><span class="nt">&lt;/form&gt;</span></code></pre>
																					</code>

																					<p>The browser should show a warning if you try to submit the form with an empty text input.</p>

																					<span class="example">
																						<form>
																							<input type="text" class="invalid" required="required"><span></span>
																						</form>
																					</span>




																					<span class="_html">
																						<textarea class="textarea" rows="3"><form>
<input type="text" required="">
</form></textarea>

																					</span>

																				</div>
																			</div>








																			<div class="l-row l-two-col-left">
																				<div class="l-col">
																					<span class="attribute-name"> <code>disabled</code></span>
																					<p>Disables the input.</p>
																				</div>
																				<div class="l-col">
																					<span class="example">
																						<input disabled="">
																					</span>


																					<span class="_html">
																						<textarea class="textarea" rows="3"><input disabled=""></textarea>

																					</span>
																				</div>
																			</div>
																			</li>





																			<div class="right-content">
																				<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">legend</h2>

																				<div class="l-row l-two-col-left">
																					<div class="l-col">
																						<span class="attribute-name"> <code>legend</code></span>
																						<p>Defines a <strong>caption</strong> for a parent's content.</p>
																					</div>
																					<div class="l-col">
																						<code>n/a</code>
																						<span class="example">
																							<form action="/subscribe" method="post">
																								<fieldset>
																									<legend>Subscribe to the Newsletter</legend>
																									<input type="email" name="email" />
																									<button>Ok</button>
</p>
																								</fieldset>
																							</form>
																						</span>
																					</div>
																				</div>

																				</li>






																				<div class="right-content">
																					<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">textarea</h2>

																					<p>Defines a <strong>multi-line text control</strong> within a web form.</p>
																					<div class="l-row l-two-col-left">
																						<div class="l-col">
																							<span class="attribute-name"> <code>name</code></span>
																							<p>Defines the unique identifier for that textarea within the form. It allows the server to access each textarea's value when submitted.</p>
																							<span class="attribute-is-required">Required.</span>
																						</div>
																						<div class="l-col">
																							<span class="attribute-values"><code>"message"</code></span>
																							<p>The name value must be unique within the context of a <code>&lt;form&gt;</code> container.</p>
																							<p>It can only contain alphanumeric characters <code>a-z</code> <code>A-Z</code> <code>0-9</code> and some special characters like <code>-</code> <code>_</code>… but no space.</p>
																							<span class="example">
																								<textarea class="textarea" rows="10" placeholder="e.g. Hello my name is Alex" name="message"></textarea>

																							</span>


																							<span class="_html">
																								<textarea class="textarea" rows="1"><textarea columns="40" rows="10" placeholder="e.g. Hello my name is Alex" name="message"></textarea>
																								</textarea>

																							</span>
																						</div>
																					</div>
																					<div class="l-row l-two-col-left">
																						<div class="l-col">
																							<h4>autocomplete</h4>
																							<p>Determines if the browser can autocomplete the textarea.</p>
																						</div>
																						<div class="l-col">
																							<span class="attribute-name"><code>"off"</code></span>
																							<p>The browser will <strong>disable</strong> autocomplete functions..</p>

																							<span class="example">
																								<textarea class="textarea" rows="10" placeholder="e.g. Hello my name is Alex" name="message" autoComplete="off"></textarea>

																							</span>

																							<span class="_html">
																								<textarea class="textarea" rows="3"><textarea columns="40" rows="10" placeholder="e.g. Hello my name is Alex" name="message" autoComplete="off"></textarea>
																								</textarea>

																							</span>


																							<h4>"on"</code></h4>
																							<p>The browser will <strong>enable</strong> autocomplete functions.</p>

																							example coming soon...

																							<span class="example">
																								<textarea class="textarea" rows="10" placeholder="e.g. Hello my name is Alex" name="message" autoComplete="off"></textarea>

																							</span>

																							<span class="_html">
																								<textarea class="textarea" rows="3"><textarea columns="40" rows="10" placeholder="e.g. Hello my name is Alex" name="message" autoComplete="off"></textarea>
																								</textarea>

																							</span>

																						</div>
																					</div>





																					<div class="l-row l-two-col-left">
																						<div class="l-col">
																							<h4>minlength</h4>
																							<p>Defines the minimum amount of characters the textarea required to be valid.</p>
																						</div>
																						<div class="l-col">
																							<span class="attribute-name"><code>"15"</code></span>
																							<p>You can use <strong>integers</strong>.</p>

																							<span class="example">
																								<textarea class="textarea" rows="10" placeholder="e.g. Hello my name is Alex" name="message" autoComplete="off"></textarea>

																							</span>

																							<span class="_html">
																								<textarea class="textarea" rows="3"><textarea columns="40" rows="10" placeholder="e.g. Hello my name is Alex" name="message" autoComplete="off"></textarea>
																								</textarea>

																							</span>

																						</div>
																					</div>





																					<div class="l-row l-two-col-left">
																						<div class="l-col">
																							<h4>maxlength</h4>
																							<p>Defines the maxlength amount of characters allowed.</p>
																						</div>
																						<div class="l-col">
																							<span class="attribute-name"><code>"140"</code></span>
																							<p>You can use <strong>integers</strong>.</p>


																							<span class="example">
																								<textarea class="textarea" rows="10" placeholder="e.g. Hello my name is Alex" name="message" autoComplete="off"></textarea>

																							</span>

																							<span class="_html">
																								<textarea class="textarea" rows="3"><textarea columns="40" rows="10" placeholder="e.g. Hello my name is Alex" name="message" autoComplete="off"></textarea>
																								</textarea>

																							</span>

																						</div>
																					</div>





																					<div class="l-row l-two-col-left">
																						<div class="l-col">
																							<h4>placeholder</h4>
																							<p>Defines a non-selectable placeholder text that only appears when the textarea is empty.</p>
																						</div>
																						<div class="l-col">
																							<span class="attribute-name"><code>"e.g. Hello my name is Alex"</code></span>
																							<p>You can hint at the format expected for the textarea.</p>

																							<span class="example">
																								<textarea class="textarea" rows="10" placeholder="e.g. Hello my name is Alex" name="message" autoComplete="off"></textarea>

																							</span>

																							<span class="_html">
																								<textarea class="textarea" rows="3"><textarea columns="40" rows="10" placeholder="e.g. Hello my name is Alex" name="message" autoComplete="off"></textarea>
																								</textarea>

																							</span>

																						</div>
																					</div>





																					<div class="l-row l-two-col-left">
																						<div class="l-col">
																							<h4>cols</h4>
																							<p>Defines the number of columns.</p>
																						</div>
																						<div class="l-col">
																							<span class="attribute-name"><code>"40"</code></span>
																							<p>You can use <strong>integers</strong>.</p>
																							<p>Example of <code> columns="40"</code>:</p>

																							<span class="example">
																								<textarea columns="40" rows="10"></textarea>

																							</span>
																						</div>
																					</div>





																					<div class="l-row l-two-col-left">
																						<div class="l-col">
																							<h4>rows</h4>
																							<p>Defines the number of rows.</p>
																						</div>
																						<div class="l-col">
																							<span class="attribute-name"><code>"2"</code></span>
																							<p>You can use <strong>integers</strong>.</p>
																							<p>Example of <code>rows="2"</code>:</p>
																							<span class="example">
																								<textarea class="textarea" rows="2"></textarea>

																							</span>
																						</div>
																					</div>





																					<div class="l-row l-two-col-left">
																						<div class="l-col">
																							<h4>wrap</h4>
																							<p>Defines how the text should be wrapped.</p>
																						</div>
																						<div class="l-col">
																							<span class="attribute-name"><code>"hard"</code></span>
																							<p>The text will always be wrapped depending on the <code>cols</code> value.</p>

																							<span class="example">
																								<textarea class="textarea" rows="10" placeholder="e.g. Hello my name is Alex" name="message" autoComplete="off"></textarea>

																							</span>

																							<span class="_html">
																								<textarea class="textarea" rows="3"><textarea columns="40" rows="10" placeholder="e.g. Hello my name is Alex" name="message" autoComplete="off"></textarea>
																								</textarea>

																							</span>


																							<span class="attribute-values"><code>"soft"</code></span>
																							<p>The text will only break when needed.</p>


																							<span class="example">
																								<textarea class="textarea" rows="10" placeholder="e.g. Hello my name is Alex" name="message" autoComplete="off"></textarea>

																							</span>

																							<span class="_html">
																								<textarea class="textarea" rows="3"><textarea columns="40" rows="10" placeholder="e.g. Hello my name is Alex" name="message" autoComplete="off"></textarea>
																								</textarea>

																							</span>

																						</div>
																					</div>
																					<div class="l-row l-two-col-left">
																						<div class="l-col">
																							<span class="attribute-name"><code>disabled</code></span>
																							<p>Disables the textarea.</p>
																						</div>
																						<div class="l-col">
																							<span class="example">
																								<textarea class="textarea" rows="5"></textarea>

																							</span>


																							<span class="_html">
																								<textarea class="textarea" rows="3"><textarea columns="40" rows="5" placeholder="e.g. Hello my name is Alex" name="message" autoComplete="on" minLength="15" maxLength="140" cols="40" wrap="soft" disabled=""></textarea>
																								</textarea>

																							</span>

																						</div>
																					</div>
																					<div class="l-row l-two-col-left">
																						<div class="l-col">
																							<span class="attribute-name"><code>required</code></span>
																							<p>Tells the browser that this textarea is <strong>required</strong>. Leaving it empty will show a warning.
																						</div>
																						<div class="l-col">
																							<span class="example">
																								<textarea class="textarea invalid" rows="5"></textarea>
																								<span></span>
																							</span>



																							<span class="_html">
																								<textarea class="textarea" rows="3"><textarea columns="40" rows="5" placeholder="e.g. Hello my name is Alex" name="message" autoComplete="on" minLength="15" maxLength="140" cols="40" wrap="soft" disabled="" required=""></textarea>
																								</textarea>

																							</span>

																						</div>
																					</div>
																					<div class="l-row l-two-col-left">
																						<div class="l-col">
																							<span class="attribute-name"><code>autofocus</code></span>
																							<p>Sets focus on the textarea when the web page loads.
																						</div>
																						<div class="l-col">

																							<span class="example">
																								<textarea class="textarea" rows="5" placeholder="e.g. Hello my name is Alex" name="message" autoComplete="on" minLength="15" maxLength="140" cols="40" wrap="soft" disabled="" required=""></textarea>

																							</span>

																						</div>
																					</div>
																					<div class="l-row l-two-col-left">
																						<div class="l-col">
																							<span class="attribute-name"><code>readOnly</code></span>
																							<p>Turns the textarea into a read-only element.</p>
																						</div>
																						<div class="l-col">
																							<span class="example">
																								<textarea class="textarea" rows="5" placeholder="This textarea is read only" name="message" autoComplete="on" minLength="15" maxLength="140" cols="40" wrap="soft" disabled="" required="" readOnly=""></textarea>

																							</span>
																						</div>
																					</div>
																					<div class="l-row l-two-col-left">
																						<div class="l-col">
																							<span class="attribute-name"><code>spellCheck</code></span>
																							<p>Enables the browser spell checker.
																						</div>
																						<div class="l-col">

																							<span class="example">
																								<textarea class="textarea" rows="5" placeholder="e.g. Hello my name is Alex" name="message" autoComplete="on" minLength="15" maxLength="140" cols="40" wrap="soft" disabled="" required="" readOnly="" spellCheck=""></textarea>

																							</span>

																							<span class="_html">
																								<textarea class="textarea" rows="3"><textarea columns="40" rows="5" placeholder="e.g. Hello my name is Alex" name="message" autoComplete="on" minLength="15" maxLength="140" cols="40" wrap="soft" disabled="" required="" readOnly="" spellCheck=""></textarea>
																								</textarea>

																							</span>

																						</div>
																					</div>
																					</li>
																					<div class="right-content">
																						<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Validation</h2>
																						<div class="form-container">
																							<label>Form Label</label><textarea class="textarea invalid" rows="10" placeholder="e.g. Hello my name is Alex" name="message"></textarea>
																							<span></span>
																						</div>
																						<div class="form-container">
																							<label>Form Label</label><textarea class="textarea valid" rows="10" placeholder="e.g. Hello my name is Alex" name="message"></textarea>
																							<span></span>
																						</div>

																						<div class="form-container">
																							<label>Title</label>
																							<ul class="radio-container">
																								<li><label><input type="radio" name="title" value="mr">Mr</label></li>
																								<li><label><input type="radio" name="title" value="mrs"><label>Mrs</label></li>
																								<li><label><input type="radio" name="title" value="miss"><label>Miss</label></li>
																							</ul>
																						</div>
																						<div class="form-container">
																							<label>First name</label>
																							<input type="text" name="first_name" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
																						</div>
																						<div class="form-container">
																							<label>Last name</label>
																							<input type="text" name="last_name">
																						</div>
																						<div class="form-container">
																							<label>Email</label>
																							<input type="email" name="email" required="">
																						</div>
																						<div class="form-container">
																							<label>Phone number</label>
																							<input type="tel" name="phone">
																						</div>
																						<div class="form-container">
																							<label>Password</label>
																							<input type="password" name="password" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
																						</div>
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
																						</div>
																						<div class="form-container">
																							<label><input type="checkbox" vale="terms"> I agree to the <a>terms and conditions</a></label>
																						</div>
																						<div class="button-container">
																							<button>Sign up</button>
</p>
																							<button type="reset">Resetform</button>
</p>
																						</div>
																					</div>
																					*/?>
																				-->