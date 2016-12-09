<html>
 <head>
  <title>Welcome to the Planet</title>
 </head>
 <body>
<?php echo '<p style="text-align: center;"><span style="color:#008000;"><span style="font-family:trebuchet ms,helvetica,sans-serif;"><span style="font-size:36px;">Super Duper Bluper Fluper Uber Awesome App!&nbsp;</span></span></span></p>';

$myfile = fopen("/etc/roster/webmat-misc", "r") or die("Unable to open file!");
echo fread($myfile,filesize("/etc/roster/webmat-misc"));
fclose($myfile);

?>

<p>&nbsp;</p>
 </body>
</html>

