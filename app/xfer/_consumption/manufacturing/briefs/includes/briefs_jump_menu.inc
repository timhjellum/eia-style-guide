<h1><?php echo "$briefTopic"?> Industry Analysis Brief <span class="right"><strong>Change Topic: <a href="../steel/index.cfm" id="Steel">Steel</a> | <a href="../chemical/index.cfm" id="Chemical">Chemical</a></strong></span></h1>
<script>
$(document).ready(function(){
	$('a#<?php echo "$briefTopic"?>').replaceWith("<?php echo "$briefTopic"?>");
	});
</script> 
