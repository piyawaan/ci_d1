<?php 
	echo "<h1>".$title."</h1>";
	echo "<br>";
	echo "<h2>".$class."</h2>";



?>

<form method="get" action="add_member">
	id:<input type="text" name="id"><br>
	name:<input type="text" name="name"><br>
	pass:<input type="text" name="passwd"><br>
	status:<input type="text" name="status"><br>
	<input type="submit"  value="save" name="btnsave">
	
	
</form>
