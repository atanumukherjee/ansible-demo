<?php include("includes/config.php");?>
<?php
   //$url=$_SERVER['REQUEST_URI'];
   //header("Refresh: 1; URL=$url");
?>
<!DOCTYPE html>
<html>
<//meta http-equiv="refresh" content="1">
<script type="text/javascript">
   // onload=”javascript:setTimeout(“location.reload(true);”,10000);”
   function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var x = new Date()
var x1=x.toUTCString();// changing the display to UTC string
document.getElementById('ct').innerHTML = x;
tt=display_c();
 }

</script>
<head>
	<?php include("includes/header.php");?>
</head>
<body onload=display_ct();>

<span id='ct' ></span>
<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>

<div class="container" id="main-content">
	<h2>Welcome to my website!</h2>
	<p>Some content goes here! Let's go with the classic  knowledge of "Dev-Ops."</p>

	<p>
    DevOps is a term for a group of concepts that, while not all new, have catalyzed into a movement and are rapidly spreading throughout the technical community.  Like any new and popular term, people may have confused and sometimes contradictory impressions of what it is.  Here’s my take on how DevOps can be usefully defined; I propose this definition as a standard framework to more clearly discuss the various areas DevOps covers. Like “Quality” or “Agile,” DevOps is a large enough concept that it requires some nuance to fully understand..
	</p>
	<p>
    DevOps is a new term emerging from the collision of two major related trends. The first was also called “agile infrastructure” or “agile operations”; it sprang from applying Agile and Lean approaches to operations work.  The second is a much expanded understanding of the value of collaboration between development and operations staff throughout all stages of the development lifecycle when creating and operating a service, and how important operations has become in our increasingly service-oriented world.
	</p>
    <p> <i><b> Notes: </b><i> 
    <ul>
    <li>DevOps is the practice of operations and development engineers participating together in the entire service lifecycle, from design through the development process to production support.</li>
    <li>DevOps is also characterized by operations staff making use many of the same techniques as developers for their systems work.</li>
    </ul>
    </p>

</div>

<?php include("includes/footer.php");?>

</body>
</html>