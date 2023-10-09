<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>OOP in PHP</title>

	<?php
	include("includes/core.php");
	?>
</head>

<?php
$employee = new Employee();
$Sensy = $employee->find(2);
echo "<pre>";
var_dump();
echo "</pre>";

?>


<body>

</body>

</html>