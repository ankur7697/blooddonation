<!doctype html>
<html>
<head>
<title>ta</title>
</head>
</html>
<?php
foreach($a as $p){
echo "<ul>";
echo "<li>".$p->name."</li>";
echo "<li>".$p->email."</li>";
echo "<li>".$p->age."</li>";
echo "<li>".$p->bloodgrp."</li>";
echo "<li>".$p->contact."</li>";
echo "</ul>";
}
?>
