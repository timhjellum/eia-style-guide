<!doctype html>
<html>
<?php
$globalTitle 		= 'U.S. Energy Information Administration (EIA)';
$pageTitle 			= "Messaging and Banners";
?>


	<div class="l-row l-two-col-right">
		<div class="l-col">
			<span class="modules">
				<h1 class="uk-h1 tm-heading-fragment">
					<!-- title here -->
				</h1>
<p class="uk-text-lead"></p>

				<h3 id="system-notifications">Information and system notifications and messaging</h2>

				<h4 id="purpose-1">Purpose</h4>
				<p>Users need to be aware of important information related to the eia.gov website.</p>
				<!--
<h4 id="description-1">Description</h4>

<ul>
  <p>System notifications appear in in the top right corner of the screen</p>
  <p>They are usually triggered by events <em>unrelated</em> to the user&apos;s interactions</p>
  <p>They can be closable and can have other action buttons or links.</p>
  <p>Notifications with low importance (info or success) can close automatically after 20 seconds (if desired)</p>
  <p>Notifications with high importance (warning or danger) should not close automatically, unless the situation has been resolved in some other way</p>
</ul>
-->
			</span>
			<p><strong>Types:</strong></p>



			
				<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Alert</h2>
				<p><strong>Alert</strong> notifications can be used for messages that likely require attention</p>
				<?php include('messaging/alert.inc') ?>

				<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Alert (paragraph)</h2>
				<?php include('messaging/alert-paragraph.inc') ?>

				<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Alert (span)</h2>
				<?php include('messaging/alert-span.inc') ?>

			</div>
			
				<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Callout</h2>
				<p><strong>Callout</strong> notifications can be used for general messages that aren&apos;t particularly critical</p>
				<?php include('messaging/call-out.inc') ?>
			</div>
			
				<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Error</h2>
				<p><strong>Error</strong> notifications can be used for critical messages that require immediate attention</p>
				<?php include('messaging/error.inc') ?>
			</div>
			
				<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Information</h2>
				<p><strong>Information</strong> notifications can be used for general messages that aren&apos;t particularly critical</p>
				<?php include('messaging/information.inc') ?>
			</div>
			
				<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Notice</h2>
				<p><strong>Notice</strong> notifications can be used for general messages that aren&apos;t particularly critical</p>
				<?php include('messaging/notice.inc') ?>
			</div>
			
				<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Success</h2>
				<p><strong>Success</strong> notifications can be used for positive messages that don&apos;t have a context to associate it with</p>
				<?php include('messaging/success.inc') ?>
			</div>













		</div>
		<div>
			<?php include('./includes/sub-nav.inc') ?>
		</div>
	</div>

	<div class="l-row l-dull-width-col">
		<div class="l-col">
			<span class="modules">
				<?php include('messaging/beta-banner.inc') ?>
				<?php include('messaging/banner-notice.inc') ?>
			</span>
		</div>
	</div>
	<?php /* include('messaging/note.inc') */ ?>
	<?php /* include('messaging/note-inline.inc') */ ?>
	<?php /* include('messaging/note-inline-right.inc') */ ?>
	<!-- includes/footer.inc') ?>
</body>


</html>