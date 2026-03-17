<h1><?php if ( $page['year'] != "Archive") {?><?php echo $page['year']; ?> RECS Survey Data<?php  } else { ?>Archived Publications &amp; Reports<?php  } // end if ?> <span class="right"><a href="/consumption/residential/data/2020/" id="2020">2020</a> | <a href="/consumption/residential/data/2015/" id="2015">2015</a> |<a href="/consumption/residential/data/2009/" id="2009">2009</a> | <a href="/consumption/residential/data/2005/" id="2005">2005</a> | <a href="/consumption/residential/data/2001/" id="2001">2001</a> | <a href="/consumption/residential/data/1997/" id="1997">1997</a> | <a href="/consumption/residential/data/1993/" id="1993">1993</a> | <a href="/consumption/residential/data/previous.cfm" id="Previous">Previous</a><?php /* | <a href="/consumption/residential/data/archive.cfm" id="Archive">Archive</a*/ ?></b></span></h1>
<script>
$(document).ready(function(){
	$('a#<?php echo $page['year']; ?>').replaceWith("<?php echo $page['year']; ?>");
	});
</script> 
