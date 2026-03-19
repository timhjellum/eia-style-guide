<h1><?php echo "$pageYear"?> CBECS Survey Data  <span class="right"><b><a href="../2018/index.php?view=characteristics" id="2018">2018</a> | <a href="../2012/" id="2012">2012</a> |
<a href="../2003/" id="2003">2003</a> | <a href="../1999/" id="1999">1999</a> | <a href="../1995/" id="1995">1995</a> | <a href="../1992/" id="1992">1992</a> | <a href="../previous/" id="previous">Previous</a></b></span></h1>
<script>
$(document).ready(function(){
	$('a#<?php echo "$pageYear"?>').replaceWith("<?php echo "$pageYear"?>");
	});
</script> 
