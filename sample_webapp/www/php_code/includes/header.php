<title><?php print $PAGE_TITLE;?></title>
<span style="float:right;">
<?php
date_default_timezone_set("Europe/London");
echo $tdtp=date("Y-m-d  H:i:s A",time()); $tdtp;
?></span>
<?php if ($CURRENT_PAGE == "Index") { ?>
	<meta name="description" content="" />
	<meta name="keywords" content="" /> 
<?php } ?>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<style>
	#main-content {
		margin-top:20px;
	}
	.footer {
		font-size: 14px;
		text-align: center;
	}
</style>