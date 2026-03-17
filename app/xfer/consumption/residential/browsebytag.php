<?php
/**
 * Created by PhpStorm.
 * User: HSH
 * Date: 2/16/16
 * Time: 7:52 AM
 */
?>
<?php
require_once 'global/includes/utils/utils.inc';
require_once 'global/includes/utils/Neic.inc';
require_once 'reports/DataService.inc';
$neic      = new NEIC();
$DataService = new DataService();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <?php
    include "global/includes/eia_head_info.inc";
    ?>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>
<body>
<div id="outerX">
    <?php
    include "global/includes/eia_header.inc";
    include "./includes/subnav_residential.inc";

    include "global/includes/browsebytag.inc";
    include "global/includes/eia_footer.inc";
    ?>
</div>
</body>
</html>