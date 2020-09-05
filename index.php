<html>
    <h1 style='text-align:center'>  Sandys Website </h1>
  
<body>
<?php
$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);

  echo "<table>";
for($x=0;$x<$arrlength;$x++)
  {
  echo $cars[$x];
  echo "<br/>";
  }
  echo "</table>";
?>
</body>
</html>
