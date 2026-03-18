<?php
/**
 * Created by PhpStorm.
 * User: HSH
 * Date: 2/16/16
 * Time: 7:53 AM
 */
?>
<?php
$subjectids = "140,142";
$tags = "T90";
$sectionname = "Manufacturing";
?>

<script>
    $(document).ready(function(){
        $('.dropdown').dd();
        $("div.dat_block a").click(function(){
            $("table.contable").children("tbody").hide();
            $("table.contable th").removeClass("active");
            var sID = this.href.substring(this.href.indexOf("#") + 1);
            $("[name$='" + sID + "']").click();
        });
    });
</script>
<div class="title bg_manufacturing">
    <h1><?= $sectionname ?></h1>
</div>

<div class="subnav">
    <span class="right"><a href="<?= $glossary_path ?>?id=consumption">Glossary &rsaquo;</a> <a href="<?= $faqs_path ?>#manufacturing">FAQS &rsaquo;</a></span>
    <ul>
        <li <?php if($locale == "overview"){ ?>
            class="active"
        <?php } ?>><a href="/consumption/manufacturing/">Overview</a></li>
        <li class="dropdown <?php if($locale == "data"){ ?>active <?php } ?>"><a href="/consumption/manufacturing/data.php">Data</a></li>

        <div class="dat_block dat_links">
            <ul>

            </ul>
        </div>

        <li class="dropdown <?php if($locale == "ap"){ ?>active<?php } ?>"><a href="/consumption/manufacturing/reports.cfm">Analysis & Projections</a></li>

        <div id="analysis-projections" class="dat_block dat_links" style="width:600px;">

            <div style="float:left; width:400px;">
                <h4 style="margin: 12px 20px 6px 20px;border-bottom:1px solid #CCC;padding-bottom:2px;">Major Topics</h4>
                <ul class="split_2columns" style="margin-bottom:16px;">
                    <?php
                    include "global/includes/menu_ap.inc";
                    ?>
                </ul>
            </div>

            <div class="listContainer2" style="width:200px; float:right">
                <h4 style="margin: 12px 20px 6px 20px; border-bottom:1px solid #ccc; padding-bottom:2px;">Browse by Tag</h4>
                <ul>
                    <li><a href="/consumption/manufacturing/browsebytag.php">Alphabetical</a></li>
                    <li><a href="/consumption/manufacturing/browsebytag.php?frequency">Frequency</a></li>
                    <li><a href="/consumption/manufacturing/browsebytag.php?tagcloud">Tag Cloud</a></li>
                </ul>
            </div>
        </div>
    </ul>
</div>