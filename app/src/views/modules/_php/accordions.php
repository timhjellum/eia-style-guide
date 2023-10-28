<!doctype html>
<html>
<?php
$globalTitle 		= 'U.S. Energy Information Administration (EIA)';
$pageTitle          = 'Accordions';
?>


	<div class="l-row l-two-col-right">
		<div class="l-col">
			<span class="modules">
				<h1 class="uk-h1 tm-heading-fragment">
					<!-- title here -->
				</h1>
<p class="uk-text-lead"></p>
			</span>
			<p>Accordions support arbitrary markup, but each content panel must always be the next sibling after its associated header. See the <a href="#option-header"><code>header</code></a> option for information on how to use custom markup structures.</p>
			<p>The panels can be activated programmatically by setting the <a href="#option-active"><code>active</code></a> option.</p>

			<?php include('accordions/all-closed.inc') ?>
			<?php include('accordions/all-open.inc') ?>
			<?php include('accordions/first-open.inc') ?>
			<?php include('accordions/targeted-open.inc') ?>
			<div class="longdesc" id="entry-longdesc">

				<h4>Keyboard interaction</h4>

				<p>When focus is on a header, the following key commands are available:</p>
				<ul>
					<li>
						<code>UP</code>/<code>LEFT</code>: Move focus to the previous header. If on first header, moves focus to last header.
					</li>
					<li>
						<code>DOWN</code>/<code>RIGHT</code>: Move focus to the next header. If on last header, moves focus to first header.
					</li>
					<li>
						<code>HOME</code>: Move focus to the first header.
					</li>
					<li>
						<code>END</code>: Move focus to the last header.
					</li>
					<li>
						<code>SPACE</code>/<code>ENTER</code>: Activate panel associated with focused header.
					</li>
				</ul>

				<p>When focus is in a panel:</p>
				<ul>
					<li>
						<code>CTRL</code> + <code>UP</code>: Move focus to associated header.
					</li>
				</ul>


			</div>
		</div>
		<div>
			<?php include('./includes/sub-nav.inc') ?>
		</div>
	</div>
	