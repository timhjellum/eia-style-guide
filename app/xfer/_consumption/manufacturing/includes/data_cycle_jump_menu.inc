<h1><?php echo $page['year']; ?> MECS Survey Data <span class="right"><strong>
	<a href="../2022/" id="2022">2022</a> |<a href="../2018/" id="2018">2018</a> | <a href="../2014/" id="2014">2014</a> | <a href="../2010/" id="2010">2010</a> | <a href="../2006/" id="2006">2006</a> | <a href="../2002/" id="2002">2002</a> | <a href="../1998/" id="1998">1998</a> | <a href="../1994/" id="1994">1994</a><?php /* | <a href="../1991/" id="1991">1991</a>  | <a href="../1988/" id="1988">1988</a> | <a href="../1985/" id="1985">1985</a */ ?> | <a href="../archive/" id="Archive">Archive</a></strong></span></h1>
<script>
$(document).ready(function(){
	$('a#<?php echo $page['year']; ?>').replaceWith("<?php echo $page['year']; ?>");
	});
</script> 
