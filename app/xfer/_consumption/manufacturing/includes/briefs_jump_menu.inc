<h1>The <?php echo "$briefTopic"?> Industry Profile <span class="right"><b>Brief Topic: <a href="../steel/index.cfm" id="Steel">Steel</a> | <a href="../chemical/index.cfm" id="Chemical">Chemical</a></b></span></h1>
<script>
$(document).ready(function(){
	$('a#<?php echo "$briefTopic"?>').replaceWith("<?php echo "$briefTopic"?>");
	});
</script> 
